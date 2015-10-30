<?php
/**
 * Template Name: No Sidebar Parent
 *
 * Displays all content centered with summary blocks of child pages beneath the parent page description
 *
 * @package _mbbasetheme
 */

get_header(); ?>

	<div class="page-content">
		<div class="row">
			<div class="small-12 medium-8 medium-offset-2 end columns">
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
					<h1 class="heading--large heading--bold heading--legal-services">
						<?php the_title(); ?>
					</h1>
					
					<p>
						<?php the_content(); ?>
					</p>

				<?php endwhile; else: ?>

					<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

				<?php endif; ?>

				<?php
							// 'posts_per_page' => 3,
					// Start WP_Query for only the ID's from above
					


					$args = array(
						'post_type' => 'presentation',
						
					);
					$query = new WP_Query( $args );
				?>
					 
				

				<?php if ( $query->have_posts() ) : ?>

					<!-- pagination here -->

					<!-- the loop -->
					<?php while ( $query->have_posts() ) : $query->the_post(); ?>
						<h2><?php the_title(); ?></h2>
					<?php endwhile; ?>
					<!-- end of the loop -->

					<!-- pagination here -->

					<?php wp_reset_postdata(); ?>

				<?php else : ?>
					<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php endif; ?>
				
				
			</div> <!-- end .columns -->
			
		</div> <!-- end .row -->
	</div> <!-- end .page-content -->


<?php get_footer(); ?>
