<?php
/**
 * Template Name: Homepage 
 *
 * Displays summary blocks of content on the right with navigation in the form of a sidebar on the left
 *
 * @package _mbbasetheme
 */

get_header(); ?>

<section class="hero ">
	<div class="hero-content-container">
		<div class=" slide__nav-container">
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
				<?php 
					// check for rows (parent repeater)
				if( have_rows('homepage_slider') ): ?>
					<?php 

					// loop through rows (parent repeater)
					while( have_rows('homepage_slider') ): the_row(); ?>
						<div class="slider__slide" style="background-image:url(
					<?php

						// first, get the image ID returned by ACF
						$image_id = get_sub_field('slide_background_image');

						// and the image size you want to return
						$image_size = 'featured-homepage';

						// use wp_get_attachment_image_src to return an array containing the image
						// we'll pass in the $image_id in the first parameter
						// and the image size registered using add_image_size() in the second
						$image_array = wp_get_attachment_image_src($image_id, $image_size);

						// finally, extract and store the URL from $image_array
						$image_url = $image_array[0];

						echo $image_url;
					?>">
							<div class=" slide__content-row">
								<div class="columns slide__content-columns">
									<div class="slide__content">
										<div class="slide__copy">
											<h2 class="slide__title">
												<?php the_sub_field('slide_title'); ?>
											</h2>
											<div class="slide__subtitle">
												<?php the_sub_field('slide_subtitle'); ?>
											</div>
											<div class="slide__link">
												<?php
													$value = get_sub_field( "slide_link" );

													if( $value ) {
													    
													    echo '<a class="text-link--white text-link--underline" href="';
													    the_sub_field('slide_link');
													    echo ';"> Learn More ></a>';

													}
												?>
											</div>

										</div>
									</div>
								</div>
							</div>
							<div class="slider__bg-overlay"></div>
						</div> <!-- end .slider__slide -->

					<?php endwhile; // while( has_sub_field('intake_hour_times') ): ?>
				
				<?php endif; // if( get_field('intake_hour_times') ): ?>

			<?php endwhile; else: ?>

				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

			<?php endif; ?>
		</div> <!-- end .slider.slider--homepage -->
	</div> <!-- end .hero-slider-container -->
	
</section> <!-- end .hero -->



<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<section class="intro">
	<div class="intro-row-1 row">
		<div class="intro-copy small-12 medium-12 large-7 columns">
				<div class="intro-header-block">
					<h3 class="heading--medium intro-header-block__heading ">
						<?php the_field('intro_paragraph_title'); ?>
					</h3>
				</div>
				<p>
					<?php the_field('intro_paragraph_text'); ?>
				</p>
		</div>
		<div class="intake-block-container small-12 medium-12 large-5 columns">
			<div class="intake-block">
				<div class="intake-block__header">
					<h4 class="heading--small heading--bold">
						<?php the_field('intake_hour_block_title'); ?>
					</h4>
				</div>
				<div class="intake-block__details">
					<?php 
						// check for rows (parent repeater)
					if( have_rows('intake_hour_times') ): ?>
						<?php 

						// loop through rows (parent repeater)
						while( have_rows('intake_hour_times') ): the_row(); ?>
								<p class="details__days">
									<?php the_sub_field('intake_hour_days'); ?>
								</p>
								<p class="details__times">
									<?php the_sub_field('intake_hour_times'); ?>
								</p>
							<?php endwhile; // while( has_sub_field('intake_hour_times') ): ?>
						
						<?php endif; // if( get_field('intake_hour_times') ): ?>
					
					
					<p class="details__contact">
						<?php the_field('intake_hour_block_detail_text'); ?>
					</p>
				</div>
				
			</div>
		</div>
	</div>
	<div class="row homepage__child-grid">



		<?php 
			// check for rows (parent repeater)
		if( have_rows('featured_sections') ): ?>
		<?php 

		// loop through rows (parent repeater)
		while( have_rows('featured_sections') ): the_row(); ?>
				
			<div class="small-12 medium-4 columns child-grid__feature">
				<div class="child-grid__image">
					<a href="
						<?php the_sub_field('featured_section_link'); ?>
					">
						

						<?php 

						$image = get_sub_field('featured_section_image');
						$size = 'thumbnail-medium'; // (thumbnail, medium, large, full or custom size)

						if( $image ) {

							echo wp_get_attachment_image( $image, $size );

						}

						?>
					</a>
				</div>
				<h3 class="child-grid__title heading--small">
					<a href="<?php the_sub_field('featured_section_link'); ?>" class="text-link text-link--black">
						<?php the_sub_field('featured_section_title'); ?>
					</a>
				</h3>
				<p class="child-grid__excerpt ">
					<?php the_sub_field('featured_section_description'); ?>
				</p>
			</div>
			<?php endwhile; // while( has_sub_field('featured_sections') ): ?>
			
		<?php endif; // if( get_field('featured_sections') ): ?>
	</div>
</section> <!-- end .intro -->

<section class="homepage-ctas">
	<div class="row">
		<?php 
			// check for rows (parent repeater)
		if( have_rows('cta_blocks') ): ?>
		<?php 
			 $count = 0;
		// loop through rows (parent repeater)
		while( have_rows('cta_blocks') ): the_row(); ?>
			
			
			<div class=" <?php if ($count == 0) {echo 'cta-right-border';} ?> small-12 medium-6 columns">
				<div class="text--centered">
					<h3 class="heading--medium heading--centered">
						<?php the_sub_field('cta_title'); ?>
					</h3>
					<p class="text--centered">
						<?php the_sub_field('cta_description'); ?>
					</p>
					<a href="<?php the_sub_field('cta_button_link'); ?>" class="button--standard button__link">
						<?php the_sub_field('cta_button_text'); ?>
					</a>
				</div>
			</div>

			<?php
				$count =+ 1;
			?>


			<?php endwhile; // while( has_sub_field('cta_blocks') ): ?>
			
		<?php endif; // if( get_field('cta_blocks') ): ?>

	</div>
</section>
<?php endwhile; else: ?>

	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

<?php endif; ?>


<?php get_footer(); ?>
