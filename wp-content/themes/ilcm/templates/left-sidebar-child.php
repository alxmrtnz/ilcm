<?php
/**
 * Template Name: Left Sidebar Child 
 *
 * Displays summary blocks of content on the right with navigation in the form of a sidebar on the left
 *
 * @package _mbbasetheme
 */

get_header(); ?>

	<div class="page-content">
		<div class="row">
			<div class="small-12 medium-3 columns">
				<?php  require('template-parts/left-sidebar-template-sidebar.php');
				?>
			</div> <!-- end .columns -->
			<div class="small-12 medium-9 end columns">
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

					<h1 class="heading--large heading--legal-services">
						<?php the_title(); ?>
					</h1>
					<h3 class="heading--small heading--sub-gray">
						<?php the_field('subtitle'); ?>
					</h3>
					
					<?php the_content(); ?>

					<?php 
						if (is_page('Cases Served')) {
							require('template-parts/case-highlights.php');
						} else if (is_page('Referrals')) {
							require('template-parts/referral-list.php');
						} else if (is_page('Volunteer')) {
							require('template-parts/volunteer-positions.php');
						} else if (is_page('Trainings and Registration')) {
							require('template-parts/training-registration-listings.php');
						}
					?>
					

				<?php endwhile; else: ?>

					<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

				<?php endif; ?>

				
			
		</div> <!-- end .row -->


	</div> <!-- end .page-content -->

<?php get_footer(); ?>
