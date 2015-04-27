<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">
			<div id="site-generator">				
				<?php printf( __( 'Proudly powered by %s © 2011-2013 Zhen SHI All Rights Reserved', 'twentyeleven' ), 'Jason LVFei' ); ?>
			</div>
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>