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
	</div> <!-- end .slide__nav-container -->
	<div class="slider slider--homepage">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="slider__slide" style="background-image:url(
				<?php
				$thumb_id = get_post_thumbnail_id();
				$thumb_url = wp_get_attachment_image_src($thumb_id,'homepage-featured', true);
				echo $thumb_url[0];
				?>
			">
				<div class="row slide__content-row">
					<div class="columns small-12 slide__content-columns">
						<div class="slide__content">
							<div class="slide__copy">
								<h2 class="slide__title">
									<a href="#">
										<?php the_title(); ?>
									</a>
								</h2>
								<div class="slide__subtitle">
									<?php the_field( "byline" ); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="slider__bg-overlay"></div>
			</div> <!-- end .slider__slide -->

		<?php endwhile; else: ?>

			<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

		<?php endif; ?>
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
