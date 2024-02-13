<?php
/**
 * Block styles.
 *
 * @package digital-traction
 * @since 1.0.0
 */

/**
 * Register block styles
 *
 * @since 1.0.0
 *
 * @return void
 */
function digital_traction_register_block_styles() {

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/button',
		array(
			'name'  => 'digital-traction-flat-button',
			'label' => __( 'Flat button', 'digital-traction' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/list',
		array(
			'name'  => 'digital-traction-list-underline',
			'label' => __( 'Underlined list items', 'digital-traction' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/group',
		array(
			'name'  => 'digital-traction-box-shadow',
			'label' => __( 'Box shadow', 'digital-traction' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/column',
		array(
			'name'  => 'digital-traction-box-shadow',
			'label' => __( 'Box shadow', 'digital-traction' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/columns',
		array(
			'name'  => 'digital-traction-box-shadow',
			'label' => __( 'Box shadow', 'digital-traction' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/details',
		array(
			'name'  => 'digital-traction-plus',
			'label' => __( 'Plus & minus', 'digital-traction' ),
		)
	);
}
add_action( 'init', 'digital_traction_register_block_styles' );

/**
 * This is an example of how to unregister a core block style.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-styles/
 * @see https://github.com/WordPress/gutenberg/pull/37580
 *
 * @since 1.0.0
 *
 * @return void
 */
function digital_traction_unregister_block_style() {
	wp_enqueue_script(
		'digital-traction-unregister',
		get_stylesheet_directory_uri() . '/assets/js/unregister.js',
		array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ),
		DIGITAL_TRACTION_VERSION,
		true
	);
}
add_action( 'enqueue_block_editor_assets', 'digital_traction_unregister_block_style' );
