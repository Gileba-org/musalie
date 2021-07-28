<?php get_header(); ?>

<div id="musalie_main">
	<div id="musalie_content">
		<div class="row">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php if (!is_home()) { ?>
				<?php the_title('<h1 class="post-title">', '</h1>'); ?>
			<?php } ?>
			<div class="post">
				<p><?php the_content(__('(more...)')); ?></p>
			</div>
		<?php endwhile; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>
		</div>
	</div>
</div>
</div>

<?php
	get_footer();
?>
