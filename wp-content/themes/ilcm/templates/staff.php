<?php
/**
 * Template Name: Staff
 *
 * Displays a left sidebar and a right content area with board and staff objects
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
					<!-- <h2 class="heading- -micro">
						<?php the_title(); ?>
					</h2> -->

					<h1 class="heading--large  heading--sidebar-parent">
						<?php the_title(); ?>
					</h1>
					
					
						
						<ul class="member-list member-list--staff">
							<?php 
								////////////////////////////////////////////////////////////////////////
								//CUSTOM POST QUERY - BOARD OF DIRECTORS
								// This is a query by custom fields. 
								// You can designate two or more field values and a relation between them (AND, OR). 
								// Each field value is put into its own array to compare against one another.
								//http://www.advancedcustomfields.com/resources/query-posts-custom-fields/
								/////////////////////////////////////////////////////////////////////////

								$args = array(
									'numberposts'	=> -1,
									'post_type'		=> 'staff-members',
					
								);

								// query
								$board_query = new WP_Query( $args );
							?>


							<?php if( $board_query->have_posts() ): ?>
								<?php while( $board_query->have_posts() ) : $board_query->the_post(); ?>
										

										

										<li class="row">
											<div class="staff-member__portrait small-12 large-2 columns">
												<div class="img-bordered-small">
													<?php the_post_thumbnail('staff-portrait'); ?>
												</div> 
											</div>
											<div class="small-12 large-10 columns">
												<?php the_title(); ?>
												<h3 class="heading--micro heading--sub-gray">
													<?php the_field('position'); ?>
												</h3>
												<h2 class="heading--medium heading--bold heading--featured-news">
													<?php the_field('job_title'); ?>
												</h2> 
												<p>
													<?php the_field('bio'); ?>
												</p> 
											</div>
											
										</li> <!-- end .columns for individual board menu -->
										
											
										
								<?php endwhile; ?>
							<?php endif; ?>

							<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>

						</ul> <!-- end .board-member-list -->

					
					
				<?php endwhile; else: ?>

					<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

				<?php endif; ?>


				
				
			</div> <!-- end .columns -->
			
		</div> <!-- end .row -->
	</div> <!-- end .page-content -->


<?php get_footer(); ?>
