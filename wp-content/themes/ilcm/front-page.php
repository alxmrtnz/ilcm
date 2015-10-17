<?php
/**
 * The template for displaying the front page.
 *
 * This is the template that displays on the front page only.
 *
 * @package _mbbasetheme
 */

get_header(); ?>

<section class="hero">
	<div class="row slide__nav-container">
		<div class="slide__nav">
			<div class="slide__nav-content">
				<div class="slide__arrows-container">
					<div class="slide__arrow arrow--prev">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/arrow-left.svg" onerror="">
						<span class="off-screen">previous slide</span>
					</div>
					<div class="slide__arrow arrow--next">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/arrow-right.svg" onerror="">
						<span class="off-screen">next slide</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="slider slider--homepage">
		<div class="slider__slide" style="background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/graduation.jpg);">
			<div class="row slide__content-row">
				<div class="columns small-12 slide__content-columns">
					<div class="slide__content">
						<div class="slide__copy">
							<h2 class="slide__title">
								<a href="#">
									Find Out if You Qualify for Original 2012 DACA
								</a>
							</h2>
							<div class="slide__subtitle">
								ILCM believes a key part to providing effective legal service is education. 
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="slider__bg-overlay">
				
			</div>
			
		</div>
		<div class="slider__slide" style="background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/mountains.jpg);">
			<div class="row slide__content-row">
				<div class="columns small-12 slide__content-columns">
					<div class="slide__content">
						<div class="slide__copy">
							<h2 class="slide__title">
								<a href="#">
									Slide 2
								</a>
							</h2>
							<div class="slide__subtitle">
								ILCM believes a key part to providing effective legal service is education. 
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="slider__bg-overlay">
				
			</div>
			
		</div>
		<div class="slider__slide">
			<div class="row">
				<div class="columns small-12">
					Hello
				</div>
			</div>
		</div>
	</div>
</section>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<p>hellooooasdfihaosdifhaoisdhfosih</p>
		<div class="row">
			<div class="small-12 columns">
				this is a column test
			</div>
		</div>

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

<?php get_sidebar(); ?>
<?php get_footer(); ?>
