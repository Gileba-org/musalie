<?php
function add_theme_scripts() {
	  wp_enqueue_style( 'style', get_stylesheet_uri() );
	  wp_enqueue_style( 'hamburgers', get_template_directory_uri() . '/assets/css/hamburgers.min.css' );
	  wp_enqueue_script( 'hamburger', get_template_directory_uri() . '/assets/js/hamburger.js');
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

function musalie_register_menus() {
	register_nav_menus(
		array(
			'header-menu' => __( 'Header Menu' ),
			'mobile-menu' => __( 'Mobile Menu' )
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

// Change shipping cost label
add_filter( 'woocommerce_cart_shipping_method_full_label', 'change_shipping_label', 10, 2 );

function change_shipping_label ( $label, $method ) { 
	if ( $method->cost > 0 ) { 
		if ( WC()->cart->get_tax_price_display_mode()  == 'excl' ) { 
			$label = wc_price( $method->cost ) . ' <span class="shipping-method">(' . $method->label . ')</span>'; 
			if ( $method->get_shipping_tax() > 0 && WC()->cart->prices_include_tax ) { 
				$label .= ' <small class="tax_label">' . WC()->countries->ex_tax_or_vat() . '</small>'; 
			}
		} else { 
			$label = wc_price( $method->cost + $method->get_shipping_tax() ) . ' <span class="shipping-method">(' . $method->label . ')</span>'; 
			if ( $method->get_shipping_tax() > 0 && ! WC()->cart->prices_include_tax ) { 
				$label .= ' <small class="tax_label">' . WC()->countries->inc_tax_or_vat() . '</small>'; 
			} 
		} 
	}
	 
	return $label; 
}

add_filter( 'woocommerce_gateway_icon', 'custom_payment_gateway_icons', 10, 2 );

function custom_payment_gateway_icons( $icon, $gateway_id ){

	foreach( WC()->payment_gateways->get_available_payment_gateways() as $gateway )
		if( $gateway->id == $gateway_id ){
			$title = $gateway->get_title();
			break;
		}

	// Setting (or not) a custom icon to the payment IDs
	if($gateway_id == 'bacs')
		$icon = '<img src="' . WC_HTTPS::force_https_url( "/wp-content/plugins/mollie-payments-for-woocommerce/public/images/banktransfer.svg" ) . '" alt="' . esc_attr( $title ) . '" class="mollie-gateway-icon"/>';

	return $icon;
}

?>