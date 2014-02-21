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
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-44177603-1', 'eatonsenior.org');
  ga('send', 'pageview');

</script>
</body>
</html>