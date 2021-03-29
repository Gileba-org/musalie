<?php

function musalie_register_menus() {
	register_nav_menus(
		array(
			'header-menu' => __( 'Header Menu' )
		)
	);
}
 
/**
 * Add support for core custom logo.
 *
 * @link https://codex.wordpress.org/Theme_Logo
 */
add_theme_support(
	'custom-logo',
	array(
		'height'               	=> 300,
		'width'                	=> 100,
		'flex-width'           	=> true,
		'flex-height'          	=> true,
		'header-text'			=> array( 'site-title', 'site-description' ),
		'unlink-homepage-logo' 	=> true,
	)
);

// Add support for Block Styles.
add_theme_support( 'wp-block-styles' );

add_action( 'init', 'musalie_register_menus' );

?>