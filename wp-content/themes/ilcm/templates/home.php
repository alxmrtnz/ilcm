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
		<div class="slider single-item">
			<div><h3>1</h3></div>
			<div><h3>2</h3></div>
			<div><h3>3</h3></div>
			<div><h3>4</h3></div>
			<div><h3>5</h3></div>
			<div><h3>6</h3></div>
		</div>

		<div class="flexslider">
		  <ul class="slides">
		    <li>
		      <img src="https://placekitten.com/g/300/200" />
		    </li>
		    <li>
		      <img src="https://placekitten.com/g/300/250" />
		    </li>
		    <li>
		      <img src="https://placekitten.com/g/300/225" />
		    </li>
		    <li>
		      <img src="https://placekitten.com/g/300/300" />
		    </li>
		  </ul>
		</div>
	</div> <!-- end .hero-content-container -->
	

	
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
