<?php
/**
 * Template Name: Our Team Page
 *
 * Description: Twenty Twelve loves the no-sidebar look as much as
 * you do. Use this page template to remove the sidebar from any page.
 *
 * Tip: to remove the sidebar from all posts and pages simply remove
 * any active widgets from the Main Sidebar area, and the sidebar will
 * disappear everywhere.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="entry-content">
					<?php the_content(); ?>
					<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'twentytwelve' ), 'after' => '</div>' ) ); ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'content', 'page' ); ?>
					<?php endwhile; // end of the loop. ?>
					<?php $staff_query = new WP_Query( array ('post_type' => 'staff', 'posts_per_page' => -1) );
					while ( $staff_query->have_posts() ) : $staff_query->the_post(); ?>
						<div class="staff_block">
							<div class="staff_image">
								<?php the_post_thumbnail(array( 180, 225)); ?>
							</div>
							<strong><?php the_title(); ?></strong>
							<?php the_content(); ?>
						</div>
					<?php endwhile; // end of the loop. ?>
				</div><!-- .entry-content -->
			</article>
		</div><!-- #content -->
	</div><!-- #primary -->
<?php get_sidebar(board);?>
<?php get_footer(); ?>