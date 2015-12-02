<?php
/**
 * Template Name: Contact Page
 *
 * 
 *
 * @package _mbbasetheme
 */

get_header(); ?>

	<div class="page-content">
		<div class="row ">
			<div class="small-12 medium-9 columns">
				<div class="sidebar-right-content-left">
					<div class="content-left__intro-content">
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<h2 class="heading--micro">
							<?php
							echo '<a class="text-link text-link--primary" href="';
							echo get_permalink( $post->post_parent );

							echo '">';
							echo empty( $post->post_parent ) ? get_the_title( $post->ID ) : get_the_title( $post->post_parent );
							echo '</a>';
							?>
						</h2>
						<h1 class="heading--large ">
							<?php the_title(); ?>
						</h1>
						
						<p>
							<?php the_content(); ?>
						</p>

						<?php endwhile; else: ?>

							<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

						<?php endif; ?>
						<!-- <hr class="hr--margin-large"> -->
					</div>
				
				</div> <!-- end .sidebar-right-content-left -->
			</div> <!-- end .columns -->

			<div class="medium-3 columns">
				Social Media Icons Call to Actions will go here
			</div>
			
		</div> <!-- end .row -->
	</div> <!-- end .page-content -->


<?php get_footer(); ?>