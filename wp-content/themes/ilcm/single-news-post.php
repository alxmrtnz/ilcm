<?php
/**
 * The Template for displaying all single posts.
 *
 * @package _mbbasetheme
 */

get_header(); ?>

	<div class="row">
		<div class="small-12 large-8 columns">
			<?php while ( have_posts() ) : the_post(); ?>
				
				<h1 class="heading--medium heading--bold heading--featured-news">
					<?php the_title(); ?>
				</h1>	
				<?php get_template_part( 'content', 'single' ); ?>

				<?php _mbbasetheme_post_nav(); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // end of the loop. ?>
		</div>
		<div class="small-12 large-4 columns">
			<?php get_sidebar(); ?>
		</div>
	</div><!-- .row -->


<?php get_footer(); ?>
