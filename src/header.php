<html>
	<head>
	<?php wp_head(); ?>	
	</head>
	
	<body>
		<div id="musalie-header">
		<?php
			$custom_logo_id = get_theme_mod( 'custom_logo' );
			$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );

			if ( has_custom_logo() ) {
				echo '<div class="site-logo"><img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '"></div>';
			} else {
				echo '<h1>' . get_bloginfo('name') . '</h1>';
			}
		?>
			<nav><?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?></nav>
		</div>
		<div id="musalie-container">