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
	</div> <!-- end .slider.slider--homepage -->
</section> <!-- end .hero -->


<section class="intro">
	<div class="row">
		<div class="small-12 large-7 columns">
			<div class="intro-header-block">
				<!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/stock/stock1.jpg" alt=""> -->
				<h3 class="heading--homepage-medium intro-header-block__heading heading--white">Supporting the pursuit<br>of the American Dream</h3>
			</div>
			<p>The Immigrant Law Center of Minnesota (ILCM) was founded in 1976 as Oficina Legal, a program of Southern Minnesota Regional Legal Services (SMRLS).</p>
			<p>The agency was later renamed to reflect the increasing diversity of the immigrant population it served. Over the last decade ILCM has established itself as Minnesota’s premier provider of comprehensive immigration legal services to low-income clients of all nationalities.</p>
		</div>
		<div class="small-12 large-4 columns">
			<div class="intake-block">
				<div class="intake-block__header">
					<h4 class="heading--small heading--white">Intake Hours</h4>
				</div>
				<div class="intake-block__details">
					<p>Mon, Tues, Wed</p>
					<p>from 12 pm - 1:30 pm</p>
					<p>Thursdays</p>
					<p>6 pm - 7:30 pm</p>
					<p>
						Please call our client line at
	1-800-223-1368 during intake hours to enter the appointment lottery system to speak to a legal staff member.
					</p>
				</div>
				
			</div>
		</div>
	</div>
</section> <!-- end .intro -->

<section class="what-we-do">
	<div class="row">
		<div class="small-12 columns">
			<h2 class="heading--centered heading--homepage-medium">What We Do</h2>
		</div>
		<div class="small-12 medium-4 columns child-grid__feature">
			<div class="child-grid__image">
				<a href="<?php echo get_page_link($page->ID) ?>">
					<img src="http://lorempixel.com/350/250/" alt="image description HERE">
				</a>
			</div>
			<h3 class="child-grid__title heading--small">
				<a href="#" class="text-link text-link--black">
					Services
				</a>
			</h3>
			<p class="child-grid__excerpt ">
				Link to the services section of the site. Most important for the primary user. 
			</p>
		</div>
		<div class="small-12 medium-4 columns child-grid__feature">
			<div class="child-grid__image">
				<a href="<?php echo get_page_link($page->ID) ?>">
					<img src="http://lorempixel.com/350/250/" alt="image description HERE">
				</a>
			</div>
			<h3 class="child-grid__title heading--small">
				<a href="#" class="text-link text-link--black">
					Our Work
				</a>
			</h3>
			<p class="child-grid__excerpt ">
				Important to not only show off the projects that ILCM is working on, but also to help educate any and all users on immigration by showing what is being done.
			</p>
		</div>
		<div class="small-12 medium-4 columns child-grid__feature">
			<div class="child-grid__image">
				<a href="<?php echo get_page_link($page->ID) ?>">
					<img src="http://lorempixel.com/350/250/" alt="image description HERE">
				</a>
			</div>
			<h3 class="child-grid__title heading--small">
				<a href="#" class="text-link text-link--black">
					News
				</a>
			</h3>
			<p class="child-grid__excerpt ">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit.
			</p>
		</div>


	</div>
</section>

<section class="our-projects">
	<div class="row">
		<div class="small-12 columns">
			<h2>Our Project</h2>
		</div>
	</div>
</section>

<section class="donate">
	<div class="row">
		<div class="small-12 columns">
			<h3>Support ILCM</h3>
		</div>
	</div>
</section>



<?php get_footer(); ?>
