<html class="musalie">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php wp_head(); ?>
	</head>

	<body>
		<div id="musalie-offcanvas" class="offcanvas">
			<nav><?php wp_nav_menu( array( 'theme_location' => 'mobile-menu' ) ); ?></nav>
		</div>
		<header id="musalie-header" class="site-header">
		<?php
			$custom_logo_id = get_theme_mod( 'custom_logo' );
			$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );

			if ( has_custom_logo() ) {
				echo '<div class="site-logo"><img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '" width="120" height="120"></div>';
			} else {
				echo '<h1>' . get_bloginfo('name') . '</h1>';
			}
		?>
			<nav><?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?></nav>
			<button class="hamburger hamburger--spin" type="button">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</button>
		</header>
		<div id="musalie-container" class="site-container">
