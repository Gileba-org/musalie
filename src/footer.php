<?php 	wp_footer();
?>
<footer>
<?php if ( is_active_sidebar( 'footer' ) ) : ?>
<div id="footer" class="footer">
<?php dynamic_sidebar( 'footer' ); ?>
</div>
<?php endif; ?></footer>
</body>
</html>
