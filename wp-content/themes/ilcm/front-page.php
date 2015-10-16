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
	<div class="slider slider--homepage">
		<div class="slider__slide" style="background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/graduation.jpg);">
			<div class="row">
				<div class="columns small-12">
					Hello
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
