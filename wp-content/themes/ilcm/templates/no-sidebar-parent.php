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
				
			

					
					<?php
								// 'posts_per_page' => 3,
						// Start WP_Query for only the ID's from above
						


						$args = array(
							'post_type' => 'presentation',
							
						);
						$query = new WP_Query( $args );
					?>
						 
					

					<?php if ( $query->have_posts() ) : ?>

					<div class="row">
						<!-- the loop -->
						<?php while ( $query->have_posts() ) : $query->the_post(); ?>
							<!-- <div class="small-12 medium-3  columns">
								<div class="presentation-thumbnail">
									<?php echo get_the_post_thumbnail( $page->ID, 'thumbnail-medium' ); ?>
								</div>
							</div> -->
							<div class="small-12 columns ">
								<div class="presentation-summary">
									<h2 class="heading--medium heading--bold"><?php the_title(); ?></h2>
									<h3 class="heading--small heading--sub-gray"><?php the_field('subtitle');?>
									</h3>
									<div class="presentation-description paragraph--standard">
										<?php the_content() ?>
									</div>
								</div>
							</div>
							
							
						<?php endwhile; ?>
						<!-- end of the loop -->


						<?php wp_reset_postdata(); ?>
					</div>

						

					<?php else : ?>
						<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
					<?php endif; ?>
				
				</div> <!-- end .sidebar-right-content-left -->
			</div> <!-- end .columns -->

			<div class="medium-3 columns">
				Request a Presentation
			</div>
			
		</div> <!-- end .row -->
	</div> <!-- end .page-content -->


<?php get_footer(); ?>
