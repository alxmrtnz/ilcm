<?php
/**
 * Template Name: Resources Page
 *
 * Displays top level content with a hero block
 *
 * @package _mbbasetheme
 */

get_header(); ?>

	<!-- <div class="hero-block">
		<div class="hero-block__banner">
			<div class="banner__img" style="background-image:url(
				<?php
				$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
				echo $feat_image;
				
				?>
			">
			</div>
		</div>
	</div> -->
	<div class="page-content">

		<div class="row">
			<div class="small-12 columns">
				<h1 class="heading--micro text--centered">
					<?php the_title(); ?>
				</h1>
				<h2 class="heading--medium text--centered services-subtitle">
					<?php the_field('subtitle'); ?>
				</h2>
			</div> <!-- end .columns -->
		</div> <!-- end .row -->
		<div class="row">
			

			<div class="small-12 medium-10 medium-offset-1  columns">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<?php
					$pages = get_pages('child_of='.$post->ID.'&sort_column=menu_order&sort_order=asc');
					$count = 0;
					foreach($pages as $page)
					{
						$content = $page->post_content;
						$description = get_field('summary', $page->ID);

					?>
					
						<div class="small-12 medium-6 columns service-highlights__feature">
							<div class="service-highlights__image">
								<a href="<?php echo get_page_link($page->ID) ?>">
									<img src="http://lorempixel.com/524/360/" alt="image description HERE">
								</a>
							</div>
							<h3 class="service-highlights__title heading--small">
								<a href="legal-services" class="text-link text-link--black">
									<a class="child__title text-link text-link--black" href="<?php echo get_page_link($page->ID) ?>"><?php echo $page->post_title ?>
									</a>
								</a>
							</h3>
							<p class="service-highlights__subtitle text--sans">
								<?php echo $description ?>
							</p>
						</div>
						
					

						
					<?php
					}
				?>

			<?php endwhile; else: ?>

				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

			<?php endif; ?>

			</div> <!-- end .columns -->




























			
		</div> <!-- end .row -->
		<div class="row">
			<div class="small-12 medium-10 medium-offset-1 end columns">
				<div class="card">
					<p class="card__copy text--sans">
						ILCM believes a key part to providing effective legal service is education. We are one of the primary providers of immigration-related legal education services in Minnesota. ILCM's staff conducts low-cost educational and training sessions, including CLEs, on a variety of subjects regarding immigration-related matters. Presentations are tailored to meet the needs of each individual group and provide accurate and up-to-date written materials where appropriate.
					</p>
				</div>
			</div>	
		</div>
	</div> <!-- end .page-content -->
	
	
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
