<?php
// Add menu locations here.
add_action(
	'after_setup_theme',
	function () {
		register_nav_menus(
			array(
				'primary'    => __( 'Primary Menu', 'text_domain' ),
				'secondary'  => __( 'Secondary Menu', 'text_domain' ),
				'sub_footer' => __( 'Footer Menu', 'text_domain' ),
			)
		);
	},
	0
);
