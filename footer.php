<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Off_Brains
 */

?>

	<footer class="site-footer clearfix">
		<div class="width-container">
			<div id="copyright">&copy; <?php echo date("Y"); ?> Off Brains LLC</div>
			<a href="" id="footer-logo">
			<?php echo file_get_contents( get_stylesheet_directory_uri() . '/assets/svg/logo.svg' ); ?>
			</a>
		</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
