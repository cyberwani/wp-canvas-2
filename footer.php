<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WP Canvas 2
 */
?>

		</div><!-- #content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="site-info">
				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'wp-canvas-2' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'wp-canvas-2' ), 'WordPress' ); ?></a>
				<span class="sep"> | </span>
				<?php printf( __( 'Theme: %1$s by %2$s.', 'wp-canvas-2' ), 'WP Canvas 2', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->
</div><!-- .right-background -->
</div><!-- .left-background -->
</div><!-- .bottom-background -->
</div><!-- .top-background -->

<?php wp_footer(); ?>

</body>
</html>
