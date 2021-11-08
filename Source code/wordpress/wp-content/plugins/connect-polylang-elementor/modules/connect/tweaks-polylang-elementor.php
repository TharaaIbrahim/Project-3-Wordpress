<?php

// modules/connect/tweaks-polylang-elementor

/**
 * Prevent direct access to this file.
 *
 * @since 1.0.0
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Sorry, you are not allowed to access this file directly.' );
}


add_filter( 'pll_get_post_types', 'ddw_cpel_add_cpts_to_polylang', 10, 2 );
/**
 * Enable Elementor-specific post types automatically for Polylang support.
 *
 * @link   https://polylang.pro/doc/filter-reference/
 *
 * @since  1.0.0
 *
 * @param  bool  $is_settings Whether a post type is already added to Polylang
 *                            or not.
 * @param  array $post_types  Holds all Polylang-added post types.
 * @return array Modified array of post types.
 */
function ddw_cpel_add_cpts_to_polylang( $post_types, $is_settings ) {

	/** Bail early if integration not wanted */
	if ( ! apply_filters( 'cpel/filter/polylang/posttypes_automatic', true ) ) {
		return;
	}

	/** Set Elementor-relevant post types */
	$relevant_types = apply_filters(
		'cpel/filter/polylang/post_types',
		array(
			'elementor_library',   // Elementor
			'e-landing-page',      // Elementor Landing pages
			'oceanwp_library',     // OceanWP Library
			'astra-advanced-hook', // Astra Custom Layouts (Astra Pro)
			'gp_elements',         // GeneratePress Elements (GP Premium)
			'jet-theme-core',      // JetThemeCore (Kava Pro/ CrocoBlock)
			'jet-engine',          // JetEngine Listing Item (CrocoBlock)
			'customify_hook',      // Customify (Customify Pro)
			'wpbf_hooks',          // Page Builder Framework Sections (WPBF Premium)
			'ae_global_templates', // AnyWhere Elementor plugin
		)
	);

	return array_merge( $post_types, array_combine( $relevant_types, $relevant_types ) );

}


add_action( 'parse_query', 'ddw_cpel_polylang_elementor_library_conditions_parse_query', 1 );
/**
 * Fix for Elementor template conditions not compatible with Polylang (you need
 *   to save again one of your templates conditions to make it work, after
 *   putting this function in your plugin/theme).
 *   Note: Needs to be priority 1, since Polylang uses the action parse_query
 *         which is fired before 'pre_get_posts'.
 *
 * @link  https://github.com/polylang/polylang/issues/152#issuecomment-320602328
 * @link  https://github.com/pojome/elementor/issues/4839
 *
 * @since 1.0.0
 * @since 1.0.3 only check meta_key is '_elementor_conditions' & set lang 'all'
 * @since 1.0.5 also filter for Global Widgets & set lang ''
 *
 * @param WP_Query $query
 */
function ddw_cpel_polylang_elementor_library_conditions_parse_query( $query ) {

	if ( ! is_admin() ) {
		return;
	}

	$global_widget_meta_query = array(
		'key'   => '_elementor_template_type',
		'value' => 'widget',
	);

	$is_elementor_conditions = isset( $query->query_vars['meta_key'] )
		&& '_elementor_conditions' === $query->query_vars['meta_key'];

	$is_global_widget = isset( $query->query_vars['post_type'] )
		&& 'elementor_library' === $query->query_vars['post_type']
		&& isset( $query->query_vars['meta_query'] )
		&& in_array( $global_widget_meta_query, $query->query_vars['meta_query'] );

	if ( $is_elementor_conditions || $is_global_widget ) {
		$query->set( 'lang', '' );
	}

}


add_filter( 'elementor/theme/get_location_templates/template_id', 'ddw_cpel_change_template_based_on_language' );
/**
 * Filter Elementor conditions system: Change Elementor template based on an
 *   assigned language in Polylang plugin.
 *
 * @link   https://github.com/pojome/elementor/issues/4839
 *
 * @since  1.0.0
 * @since  1.0.4 save global $ddw_cpel_template_id
 *
 * @uses   pll_get_post()
 *
 * @global int $ddw_cpel_template_id used to save current template ID
 * @param  int $post_id ID of the current post.
 * @return string Based translation, the translation ID, or the original Post ID.
 */
function ddw_cpel_change_template_based_on_language( $post_id ) {
	global $ddw_cpel_template_id;

	if ( ddw_cpel_is_polylang_active() ) {

		$post_id = pll_get_post( $post_id ) ?: $post_id;

	}

	$ddw_cpel_template_id = $post_id;

	return $post_id;

}


add_filter( 'elementor/theme/get_location_templates/condition_sub_id', 'ddw_cpel_change_condition_sub_id_based_on_language', 10, 2 );
/**
 * Filter Elementor sub_conditions system: If is translated condition that is based
 *   on term or post return the translation ID of term or post.
 *
 * @since  1.0.4
 *
 * @uses   pll_get_post()
 * @uses   pll_get_term()
 *
 * @global int   $ddw_cpel_template_id used to get current template ID
 * @param  int   $sub_id ID of the object in subcondition.
 * @param  array $parsed_condition condition parts
 * @return int original sub ID or translated ID
 */
function ddw_cpel_change_condition_sub_id_based_on_language( $sub_id, $parsed_condition ) {
	global $ddw_cpel_template_id;

	if ( $sub_id && ddw_cpel_is_polylang_active() && ddw_cpel_is_translation( $ddw_cpel_template_id ) ) {

		if ( in_array( $parsed_condition['sub_name'], get_post_types() ) ) {

			$sub_id = pll_get_post( $sub_id ) ?: $sub_id;

		} else {

			$sub_id = pll_get_term( $sub_id ) ?: $sub_id;

		}
	}

	return $sub_id;

}


add_filter( 'get_post_metadata', 'ddw_cpel_empty_elementor_conditions_on_translations', 10, 3 );
/**
 * Return empty conditions on secondary translations
 *
 * @since  1.0.3
 *
 * @param  mixed  $null null value
 * @param  int    $post_id post ID
 * @param  string $meta_key Post meta key name
 * @return mixed null or empty array
 */
function ddw_cpel_empty_elementor_conditions_on_translations( $null, $post_id, $meta_key ) {

	if ( is_admin() && ddw_cpel_is_polylang_active() && '_elementor_conditions' === $meta_key ) {

		return ddw_cpel_is_translation( $post_id ) ? array( array() ) : $null;

	}

	return $null;

}


add_filter( 'pre_update_option_elementor_pro_theme_builder_conditions', 'ddw_cpel_theme_builder_conditions_clear_empty' );
/**
 * Clear empty conditions before save 'elementor_pro_theme_builder_conditions' option
 *
 * @since  1.0.3
 *
 * @param  array $value array of theme builder conditions
 * @return array  filtered array
 */
function ddw_cpel_theme_builder_conditions_clear_empty( $value ) {

	foreach ( $value as $location => $items ) {
		$value[ $location ] = array_filter( $items );
	}

	$value = array_filter( $value );

	return $value;

}
