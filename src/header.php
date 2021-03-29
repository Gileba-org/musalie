<html>
	<head>
	<title><?php echo esc_html(get_bloginfo( 'name' )); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	</head>
	
	<body>
		<div id="musalie-header">
		<?php
			$custom_logo_id = get_theme_mod( 'custom_logo' );
			$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );

			if ( has_custom_logo() ) {
				echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
			} else {
				echo '<h1>' . get_bloginfo('name') . '</h1>';
			}
		?>
			<nav><?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?></nav>
		</div>
		<div id="musalie-container">