<?php
/**
 * Template Name: Board
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
					
					<div class="row">
						
						<ul class="member-list member-list--board">
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
									'post_type'		=> 'board-members',
									'orderby'			=> 'order',
									'order'				=> 'ASC'
					
								);

								// query
								$board_query = new WP_Query( $args );
							?>


							<?php if( $board_query->have_posts() ): ?>
								<?php while( $board_query->have_posts() ) : $board_query->the_post(); ?>
										

										

										<li class="small-12 columns">
											<p class="board-member__name heading--serif heading--bold">
												<?php the_title(); ?>, <?php the_field('board_position'); ?>
											</p>	
											<p class="board-member__job-title heading--micro heading--sub-gray">
												<?php the_field('job_title'); ?>
											</p>

											<?php if( get_field('organization') ): ?>
												<p class="board-member__organization heading--micro heading--sub-gray">
													
													<?php the_field('organization'); ?>
												</p>
											<?php endif; ?>
										</li> <!-- end .columns for individual board menu -->
										
											
										
								<?php endwhile; ?>
							<?php endif; ?>

							<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>

						</ul> <!-- end .board-member-list -->

					</div> <!-- end .row for board -->
					
				<?php endwhile; else: ?>

					<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

				<?php endif; ?>


				
				
			</div> <!-- end .columns -->
			
		</div> <!-- end .row -->
	</div> <!-- end .page-content -->


<?php get_footer(); ?>
