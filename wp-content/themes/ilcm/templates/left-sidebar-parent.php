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
				<?php dynamic_sidebar( 'sidebar-services' ); ?>
			</div> <!-- end .columns -->
			<div class="small-12 medium-8 end columns">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<h2 class="heading--micro">
						<?php the_title(); ?>
					</h2>

					<h1 class="heading--large heading--bold heading--legal-services">
						<?php the_field('title'); ?>
					</h1>
					<h3 class="heading--small heading--sub-gray">
						<?php the_field('subtitle'); ?>
					</h3>
					<p>
						<?php the_field('summary_paragraph'); ?>
					</p>


					<?php
						$pages = get_pages('child_of='.$post->ID.'&sort_column=menu_order&sort_order=asc');
						$count = 0;
						foreach($pages as $page)
						{
							$content = $page->post_content;
							$description = get_field('summary', $page->ID);

						?>
							<h2 class="heading--medium">
								<a class="text-link text-link--black" href="<?php echo get_page_link($page->ID) ?>"><?php echo $page->post_title ?>
								</a>
							</h2>

							<p class="">
								<?php echo $description ?>
							</p>

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
