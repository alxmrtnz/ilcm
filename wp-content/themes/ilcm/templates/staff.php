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
								// check for rows (parent repeater)
							if( have_rows('staff_members') ): ?>
								<?php 

								// loop through rows (parent repeater)
								while( have_rows('staff_members') ): the_row(); ?>
										<li class="small-12 columns">
												<h3 class="staff-member__name heading--serif heading--bold">
													<?php the_sub_field('name'); ?>
												</h3> 
												<h4 class="heading--micro heading--sub-gray">
													<?php the_sub_field('position'); ?>
												</h4>
												<h2 class="heading--medium heading--bold heading--featured-news">
													<?php the_field('job_title'); ?>
												</h2> 
												<p>
													<?php the_sub_field('bio'); ?>
												</p> 
										</li>
									<?php endwhile; // while( has_sub_field('staff_members') ): ?>
								
								<?php endif; // if( get_field('staff_members') ): ?>
						</ul> <!-- end .board-member-list -->

					
					
				<?php endwhile; else: ?>

					<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

				<?php endif; ?>


				
				
			</div> <!-- end .columns -->
			
		</div> <!-- end .row -->
	</div> <!-- end .page-content -->


<?php get_footer(); ?>
