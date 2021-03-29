<?php

function add_theme_scripts() {
	  wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

function musalie_register_menus() {
	register_nav_menus(
		array(
			'header-menu' => __( 'Header Menu' )
		)
	);
}
add_action( 'init', 'musalie_register_menus' );

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

?>