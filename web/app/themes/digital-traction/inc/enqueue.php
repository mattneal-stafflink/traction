<?php
/**
 * traction enqueue scripts
 *
 * @package traction
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'traction_scripts' ) ) {
	/**
	 * Load theme's JavaScript and CSS sources.
	 */
	function traction_scripts() {

		$the_theme     = wp_get_theme();
		$theme_version = $the_theme->get( 'Version' );
		$suffix        = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';
		$theme_styles  = "/css/theme{$suffix}.css";
		$theme_scripts = "/js/theme{$suffix}.js";
		$css_version   = $theme_version . '.' . filemtime( get_template_directory() . $theme_styles );
		$js_version    = $theme_version . '.' . filemtime( get_template_directory() . $theme_scripts );

		wp_enqueue_style( 'traction-styles', get_template_directory_uri() . $theme_styles, array(), $css_version );
		wp_enqueue_script( 'traction-scripts', get_template_directory_uri() . $theme_scripts, array(), $js_version, true );
		traction_offcanvas_admin_bar_inline_styles();
	}
} // End of if function_exists( 'traction_scripts' ).

add_action( 'wp_enqueue_scripts', 'traction_scripts' );

if ( ! function_exists( 'traction_offcanvas_admin_bar_inline_styles' ) ) {
	/**
	 * Add inline styles for the offcanvas component if the admin bar is visible.
	 *
	 * Fixes that the offcanvas close icon is hidden behind the admin bar.
	 *
	 * @since 1.2.0
	 */
	function traction_offcanvas_admin_bar_inline_styles() {
		$navbar_type = get_theme_mod( 'traction_navbar_type', 'collapse' );
		if ( 'offcanvas' !== $navbar_type ) {
			return;
		}

		$css = '
		body.admin-bar .offcanvas.show  {
			margin-top: 32px;
		}
		@media screen and ( max-width: 782px ) {
			body.admin-bar .offcanvas.show {
				margin-top: 46px;
			}
		}';
		wp_add_inline_style( 'traction-styles', $css );
	}
}
