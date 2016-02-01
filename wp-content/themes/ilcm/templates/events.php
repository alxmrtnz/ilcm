<?php
/**
 * Template Name: Single Column Centered - Events
 *
 * A single column, centered layout for simple pages. 
 *
 * @package _mbbasetheme
 */

get_header(); ?>

	<div class="page-content">
		<div class="row ">
			<div class="small-12 medium-12  end columns">
				<div class="content-left__intro-content">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			
						<?php the_content(); ?>

					<?php endwhile; else: ?>

						<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

					<?php endif; ?>
					<!-- <hr class="hr--margin-large"> -->
				</div>
				
			</div> <!-- end .columns -->

		
			
		</div> <!-- end .row -->
	</div> <!-- end .page-content -->


<?php get_footer(); ?>
