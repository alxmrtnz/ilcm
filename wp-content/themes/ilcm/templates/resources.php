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
			<div class="page__heading-description small-12 columns">
				<h1 class="heading heading--large heading--centered-lines title--resources">
					<span>
						<?php the_title(); ?>
					</span> 
				</h1>
				<p class=" text--centered services-subtitle">
					<?php the_field('subtitle'); ?>
				</p>
			</div> <!-- end .columns -->
		</div> <!-- end .row -->
		<div class="row">

		<?php 
			// check for rows (parent repeater)
		if( have_rows('feature_blocks') ): ?>
		<?php 

		// loop through rows (parent repeater)
		while( have_rows('feature_blocks') ): the_row(); ?>
				
			<div class="small-12 medium-4 columns child-grid__feature">
				<div class="child-grid__image">
					<a href="
						<?php the_sub_field('feature_block_link'); ?>
					">
						

						<?php 

						$image = get_sub_field('feature_image');
						$size = 'thumbnail-medium'; // (thumbnail, medium, large, full or custom size)

						if( $image ) {

							echo wp_get_attachment_image( $image, $size );

						}

						?>
					</a>
				</div>
				<h3 class="child-grid__title heading--small">
					<a href="#" class="text-link text-link--black">
						<?php the_sub_field('feature_title'); ?>
					</a>
				</h3>
				<p class="child-grid__excerpt ">
					<?php the_sub_field('feature_subtitle'); ?>
				</p>
			</div>
			<?php endwhile; // while( has_sub_field('feature_blocks') ): ?>
			
		<?php endif; // if( get_field('feature_blocks') ): ?>




			
		</div> <!-- end .row -->
		<!-- <div class="row">
			<div class="small-12 medium-10 medium-offset-1 end columns">
				<div class="card">
					<p class="card__copy text--sans">
						ILCM believes a key part to providing effective legal service is education. We are one of the primary providers of immigration-related legal education services in Minnesota. ILCM's staff conducts low-cost educational and training sessions, including CLEs, on a variety of subjects regarding immigration-related matters. Presentations are tailored to meet the needs of each individual group and provide accurate and up-to-date written materials where appropriate.
					</p>
				</div>
			</div>	
		</div> -->
	</div> <!-- end .page-content -->
	
	
	


<?php get_footer(); ?>
