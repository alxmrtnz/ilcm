<?php
/**
 * The Template for displaying all single posts.
 *
 * @package _mbbasetheme
 */

get_header(); ?>
	<div class="page-content">
		<div class="row">
			<div class="news-post__content small-12 medium-10 medium-offset-1 large-8 large-offset-0 columns">
				<?php while ( have_posts() ) : the_post(); ?>
					
					
					<h3 class="heading--micro heading--sub-gray">
						<a class="" href="/news">
							News > 
						</a>
						<?php the_field('news_section'); ?>
					</h3>
					<h1 class="heading--medium heading--bold heading--featured-news">
							<?php the_title(); ?>
					</h1> 


					<?php
						// If a news post has a featured image, show it.

						if ( has_post_thumbnail() ) {
							echo '<div class="news-post__thumbnail-container">';
							the_post_thumbnail('featured-news');
							echo '</div>';
						}
					?>
					<p class="heading--micro heading--sub-gray">
						Posted on <?php the_time('M n Y'); ?>
					</p>
					<?php the_content(); ?>

					

					<?php
						// If comments are open or we have at least one comment, load up the comment template
						if ( comments_open() || '0' != get_comments_number() ) :
							comments_template();
						endif;
					?>

				<?php endwhile; // end of the loop. ?>
			</div>
		<div class="small-12 large-4 columns news-sidebar">
			<div class=" news-sidebar__content">
				<?php require('templates/template-parts/news/articles-sidebar.php'); ?>
			</div> <!-- end .news-sidebar__content -->
		</div>
	</div><!-- .row -->
	</div>
	


<?php get_footer(); ?>
