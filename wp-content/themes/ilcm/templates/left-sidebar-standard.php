<?php
/**
 * Template Name: Left Sidebar Standard
 *
 * Displays a left sidebar and a right content area
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
			<div class="small-12 medium-8 end columns">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<!-- <h2 class="heading--micro">
						<?php the_title(); ?>
					</h2> -->

					<h1 class="heading--large  heading--sidebar-parent">
						<?php the_title(); ?>
					</h1>
					<h3 class="heading--small heading--sub-gray">
						<?php the_field('subtitle'); ?>
					</h3>
					<p>
						<?php the_content(); ?>
					</p>



				<?php endwhile; else: ?>

					<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

				<?php endif; ?>
				
				
			</div> <!-- end .columns -->
			
		</div> <!-- end .row -->
	</div> <!-- end .page-content -->


<?php get_footer(); ?>