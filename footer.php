<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package simpletheme
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer skip" role="contentinfo">
		<div class="site-info">
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'simpletheme' ), 'simpletheme', '<a href="http://frasaleksander.github.io" rel="designer">Aleksander Fras</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<?php SimplethemeCustomizer::show('custom_javascript'); ?>
</body>
</html>
