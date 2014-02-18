<div id="secondary" class="widget-area board" role="complementary">
	<h2>Board of Directors</h2>
	<?php $board_query = new WP_Query( array ('post_type' => 'board', 'posts_per_page' => -1) );
					while ( $board_query->have_posts() ) : $board_query->the_post(); ?>
						<div class="board_block">
							<div class="board_image">
								<?php the_post_thumbnail(array( 160, 200)); ?>
							</div>
							<?php the_content(); ?>
						</div>
					<?php endwhile; // end of the loop. ?>
</div>