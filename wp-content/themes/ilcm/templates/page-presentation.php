<?php
/**
 * Template Name:page presentation
 *
 * Displays summary blocks of content on the right with navigation in the form of a sidebar on the left
 *
 * @package _mbbasetheme
 */

get_header(); ?>

	<div class="page-content">
		<div class="row">
			<div class="small-12 medium-3 columns">
				<?php dynamic_sidebar( 'sidebar-services' ); ?>
			</div> <!-- end .columns -->
			<div class="small-12 medium-8 end columns">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<h2 class="heading--micro">
						<?php
						echo empty( $post->post_parent ) ? get_the_title( $post->ID ) : get_the_title( $post->post_parent );
						?>
					</h2>

					<h1 class="heading--large heading--legal-services">
						<?php the_title(); ?>
					</h1>
					<h3 class="heading--small heading--sub-gray">
						<?php the_field('subtitle'); ?>
					</h3>
					<p>
						<?php the_field('summary_paragraph'); ?>
					</p>
					<?php the_content(); ?>

					<?php 

						if (is_page('Cases Served')) {
							require('template-parts/case-highlights.php');
						} else if (is_page('Referrals')) {
							require('template-parts/referral-list.php');
						}
					?>
					

				<?php endwhile; else: ?>

					<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

				<?php endif; ?>

				
			
		</div> <!-- end .row -->


	</div> <!-- end .page-content -->

<?php get_footer(); ?>
