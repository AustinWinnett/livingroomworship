<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Desk_Dog_Development
 */

?>

	</div><!-- #content -->

	<?php
		if ( is_front_page() ) {
			$footer_position = 'footer--home';
		} else {
			$footer_position = '';
		}
	?>

	<footer id="colophon" class="site-footer <?php echo $footer_position; ?>">
		<div class="container">
			<div class="footer__credits">
				<p>&copy; 2018 | Website by Desk Dog Development</p>
			</div> <!-- /.footer__credits -->
		</div> <!-- /.container -->
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
