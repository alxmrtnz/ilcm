<?php
/**
 * Template Name: Left Sidebar Parent
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
			<div class="small-12 medium-8 end columns">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<!-- <h2 class="heading--micro">
						<?php the_title(); ?>
					</h2> -->

					<h1 class=" heading--large  heading--sidebar-parent">
						<?php the_title(); ?>
					</h1>
					<h3 class="heading--small heading--sub-gray">
						<?php the_field('subtitle'); ?>
					</h3>
					<p>
						<?php the_content(); ?>
					</p>


					<?php
						$pages = get_pages('child_of='.$post->ID.'&sort_column=menu_order&sort_order=asc');
						$count = 0;
						foreach($pages as $page)
						{
							$content = $page->post_content;
							$description = get_field('summary', $page->ID);

						?>
						<div class="child-summary">
							<h2 class="heading--medium heading--bold">
								<?php echo $page->post_title ?>
							</h2>

							<p class="child__description">
								<?php echo $description ?>
							</p>
							<a class="child__link text-link text-link--primary" href="<?php echo get_page_link($page->ID) ?>">
								Learn More
							</a>
						</div>
							
						<?php
						}
					?>

				<?php endwhile; else: ?>

					<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

				<?php endif; ?>
				
				
			</div> <!-- end .columns -->
			
		</div> <!-- end .row -->
	</div> <!-- end .page-content -->


<?php get_footer(); ?>
