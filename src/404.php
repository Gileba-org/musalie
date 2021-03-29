<?php get_header(); ?>

<div id="musalie_main">
	<div id="musalie_content">
		<header class="page-header">
			<h1 class="page-title"><?php _e( 'Not Found', 'twentythirteen' ); ?></h1>
		</header>

		<div class="page-wrapper">
			<div class="page-content">
				<h2><?php _e( 'This is somewhat embarrassing, isn’t it?', 'twentythirteen' ); ?></h2>
				<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentythirteen' ); ?></p>

				<?php get_search_form(); ?>
			</div><!-- .page-content -->
		</div><!-- .page-wrapper -->
	</div>
</div>