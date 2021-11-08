<?php

// modules/dynamic-tags/polylang-current-language-code

/**
 * Prevent direct access to this file.
 *
 * @since 1.0.0
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Sorry, you are not allowed to access this file directly.' );
}


class DDW_Polylang_Current_Language_Code_Elementor_Dynamic_Tag extends \Elementor\Core\DynamicTags\Tag {

	/**
	 * Get Name
	 *
	 * Returns the Name of the tag
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string
	 */
	public function get_name() {

		return 'current-language-code';

	}


	/**
	 * Get Title
	 *
	 * Returns the title of the Tag
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string
	 */
	public function get_title() {

		return _x( 'Current Language Code', 'Elementor Dynamic Tag title', 'connect-polylang-elementor' );

	}


	/**
	 * Get Group
	 *
	 * Returns the Group of the tag
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string
	 */
	public function get_group() {

		return 'polylang-languages';

	}


	/**
	 * Get Categories
	 *
	 * Returns an array of tag categories
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return array
	 */
	public function get_categories() {

		return array( \Elementor\Modules\DynamicTags\Module::TEXT_CATEGORY );

	}


	/**
	 * Render
	 *
	 * Prints out the value of the Dynamic tag
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @uses pll_current_language()
	 *
	 * @return void
	 */
	public function render() {

		echo wp_kses_post( pll_current_language( $field = 'slug' ) );

	}

}
