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
					<h1 class="heading--large  heading--sidebar-parent">
						<?php the_title(); ?>
					</h1>
					
						
						<ul class="member-list member-list--board">
							<?php 
								// check for rows (parent repeater)
							if( have_rows('board_members') ): ?>
								<?php 

								// loop through rows (parent repeater)
								while( have_rows('board_members') ): the_row(); ?>
										

										

										<li class="small-12 columns">
											<p class="board-member__name heading--serif heading--bold">
												<?php the_sub_field('name'); ?>
												<?php if( get_sub_field('board_position') ): ?>, <?php the_sub_field('board_position'); ?>
												<?php endif; ?>
											</p>
											<?php if( get_sub_field('job_title') ): ?>	
												<p class="board-member__job-title heading--micro heading--sub-gray">
													<?php the_sub_field('job_title'); ?>
												</p>
											<?php endif; ?>

											<?php if( get_sub_field('organization') ): ?>
												<p class="board-member__organization heading--micro heading--sub-gray">
													
													<?php the_sub_field('organization'); ?>
												</p>
											<?php endif; ?>
										</li> <!-- end .columns for individual board menu -->
									<?php endwhile; // while( has_sub_field('board_members') ): ?>
								
								<?php endif; // if( get_field('board_members') ): ?>

						</ul> <!-- end .board-member-list -->
					
				<?php endwhile; else: ?>

					<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

				<?php endif; ?>


				
				
			</div> <!-- end .columns -->
			
		</div> <!-- end .row -->
	</div> <!-- end .page-content -->


<?php get_footer(); ?>
