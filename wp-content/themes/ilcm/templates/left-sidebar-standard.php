<?php
/**
 * Template Name: Left Sidebar Standard
 *
 * Displays summary blocks of content on the right with navigation in the form of a sidebar on the left
 *
 * @package _mbbasetheme
 */

get_header(); ?>

	<div class="page-content">
		<div class="row">
			<div class="small-12 medium-4 large-3 columns">
				<?php  require('template-parts/left-sidebar-template-sidebar.php');
				?>
			</div> <!-- end .columns -->
			<div class="small-12 medium-8 large-7 end columns">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<h2 class="heading--micro">
						<?php
						echo '<a class="text-link text-link--primary text-link--gray" href="';
						echo get_permalink( $post->post_parent );

						echo '">';
						echo empty( $post->post_parent ) ? get_the_title( $post->ID ) : get_the_title( $post->post_parent );
						echo '</a>';
						?>
					</h2>
					

					<h1 class="heading heading--large  heading--sidebar-parent">
						<?php the_title(); ?>
					</h1>
					<h3 class="heading--small heading--sub-gray">
						<?php the_field('subtitle'); ?>
					</h3>
					<p>
						<?php the_content(); ?>
					</p>



				

					<?php if ( have_rows('child_summaries') ) : while ( have_rows('child_summaries') ) : the_row(); ?>
						<div class="child-summary">
							<h2 class="">
								<?php the_sub_field("child_title"); ?>
							</h2>

							<p class="child__description">
								<?php the_sub_field("child_summary"); ?>
							</p>
							<a class="child__link text-link text-link--primary" href="<?php the_sub_field('link_to_child_page'); ?>">
								Learn More
							</a>
						</div>
					<?php endwhile; else: ?>

						

					<?php endif; ?>

				<?php 
					if (is_page('Cases Served')) {
						require('template-parts/case-highlights.php');
					} else if (is_page('Educational Presentations')) {
						require('template-parts/presentation-list.php');
					} else if (is_page('Internships & Volunteering')) {
						require('template-parts/volunteer-positions.php');
					} else if (is_page('Careers')) {
						require('template-parts/career-openings.php');
					}
					else if (is_page('Trainings and Registration')) {
						require('template-parts/training-registration-listings.php');
					}
				?>

				<?php endwhile; else: ?>

					<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

				<?php endif; ?>
				
				
			</div> <!-- end .columns -->
			
		</div> <!-- end .row -->
	</div> <!-- end .page-content -->


<?php get_footer(); ?>
