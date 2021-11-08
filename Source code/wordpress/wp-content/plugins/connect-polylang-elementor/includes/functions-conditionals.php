<?php

// includes/functions-conditionals

/**
 * Prevent direct access to this file.
 *
 * @since 1.0.0
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Sorry, you are not allowed to access this file directly.' );
}


/**
 * Is Elementor (free) plugin active or not?
 *
 * @since  1.0.0
 *
 * @return bool TRUE if plugin is active, FALSE otherwise.
 */
function ddw_cpel_is_elementor_active() {

	return defined( 'ELEMENTOR_VERSION' );

}


/**
 * Is Elementor Pro plugin active or not?
 *
 * @since  1.0.0
 *
 * @return bool TRUE if plugin is active, FALSE otherwise.
 */
function ddw_cpel_is_elementor_pro_active() {

	return defined( 'ELEMENTOR_PRO_VERSION' );

}


/**
 * Is Polylang (free) OR Polylang Pro (Premium) plugin active or not?
 *   Note: This is for checking the base Polylang functionality which is
 *         identical in free and Pro version.
 *
 * @since  1.0.0
 *
 * @return bool TRUE if plugin is active, FALSE otherwise.
 */
function ddw_cpel_is_polylang_active() {

	return defined( 'POLYLANG_BASENAME' );

}


/**
 * Is Polylang Pro (Premium) plugin active or not?
 *
 * @since  1.0.0
 *
 * @return bool TRUE if plugin is active, FALSE otherwise.
 */
function ddw_cpel_is_polylang_pro_active() {

	return defined( 'POLYLANG_PRO' );

}


/**
 * Is Polylang (free) plugin active or not?
 *
 * @since  1.0.0
 *
 * @return bool TRUE if plugin is active, FALSE otherwise.
 */
function ddw_cpel_is_polylang_free_active() {

	return ddw_cpel_is_polylang_active() && ! ddw_cpel_is_polylang_pro_active();

}


/**
 * Is post a translation in secondary language
 *
 * @since  1.0.3
 *
 * @return bool TRUE if is a translation, FALSE otherwise.
 */
function ddw_cpel_is_translation( $post_id ) {

	$default_lang = pll_default_language();

	return $default_lang !== pll_get_post_language( $post_id ) && pll_get_post( $post_id, $default_lang );

}
