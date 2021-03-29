<html>
	<head>
	<title><?php echo esc_html(get_bloginfo( 'name' )); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	</head>
	
	<body>
		<div id="musalie-site">
			<h1><?php echo esc_html(get_bloginfo( 'name' )); ?></h1>
			<nav><?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?></nav>
		</div>
		<div id="musalie-container">