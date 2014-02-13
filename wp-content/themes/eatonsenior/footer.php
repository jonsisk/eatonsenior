<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->
	<div id="footer">
		<div class="widget-area one_third_foot" role="complementary">
			<?php dynamic_sidebar( 'footer-left' ); ?>
		</div>
		<div class="widget-area one_third_foot" role="complementary">
			<?php dynamic_sidebar( 'footer-middle' ); ?>
		</div>
		<div class="widget-area one_third_foot" role="complementary">
			<?php dynamic_sidebar( 'footer-right' ); ?>
		</div>
		<div class=clear></div>
	</div>
	<div id="footer_attrib">
		<div id="footer_menu">
			<?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_class' => 'nav-menu' ) ); ?>
		</div>
		&copy; <?php echo date('Y')?> Eaton Senior Communities
	</div>	
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>