<div id="secondary" class="widget-area aboutus" role="complementary" style="margin-top:80px;">
	<div class="newsletter_thumb">
		<h2>Newsletters</h2>
		<p>Click on an image below to<br>read about our residents</p>
	</div>
	<?php $newsletter_query = new WP_Query( array ('post_type' => 'newsletter') );
	while ( $newsletter_query->have_posts() ) : $newsletter_query->the_post(); ?>
		<div class="newsletter_thumb">
			<h4><?php the_title(); ?></h4>
			<?php the_content();?>
		</div>
	<?php endwhile; // end of the loop. ?>
</div>