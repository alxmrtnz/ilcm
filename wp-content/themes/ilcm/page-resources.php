<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package _mbbasetheme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php> $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>
				<div class="hero">
					<?php echo get_the_title(); ?>
					<div class="hero__image-overlay">
						
					</div>
					<img class="hero__featured-image" src="<?php echo $url; ?>" longdesc="URL_2" alt="Text_2" />
				</div>

					
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
	