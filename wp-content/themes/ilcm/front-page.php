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
		<?php 
			$args = array(
				'numberposts'	=> '1',
				'post_type'		=> 'news-post',
				'posts_per_page' 	=> 2,
				'paged' 		=> $paged
			); 

			$the_query = new WP_Query( $args );
		?>

		<?php if( $the_query->have_posts() ): ?>
		<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<div class="slider__slide" style="background-image:url(
				<?php
				$thumb_id = get_post_thumbnail_id();
				$thumb_url = wp_get_attachment_image_src($thumb_id,'featured-homepage', true);
				echo $thumb_url[0];
				?>
			">
				<div class="row slide__content-row">
					<div class="columns small-12 slide__content-columns">
						<div class="slide__content">
							<div class="slide__copy">
								<h2 class="slide__title">
									<a class="text-link--white" href="<?php the_permalink(); ?>">
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
	<div class="intro-row-1 row">
		<div class="intro-copy small-12 medium-12 large-7 columns">
			<div class="intro-header-block">
				<!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/stock/stock1.jpg" alt=""> -->
				<h3 class="heading--medium intro-header-block__heading heading--white">Supporting the pursuit<br>of the American Dream</h3>
			</div>
			<p>The Immigrant Law Center of Minnesota (ILCM) was founded in 1976 as Oficina Legal, a program of Southern Minnesota Regional Legal Services (SMRLS).</p>
			<p>The agency was later renamed to reflect the increasing diversity of the immigrant population it served. Over the last decade ILCM has established itself as Minnesota’s premier provider of comprehensive immigration legal services to low-income clients of all nationalities.</p>
		</div>
		<div class="intake-block-container small-12 medium-12 large-5 columns">
			<div class="intake-block">
				<div class="intake-block__header">
					<h4 class="heading--small heading--white">Intake Hours</h4>
				</div>
				<div class="intake-block__details">
					<p class="details__days">
						Mon, Tues, Wed
					</p>
					<p class="details__times">
						12 pm - 1:30 pm
					</p>
					<p class="details__days">
						Thursdays
					</p>
					<p class="details__times">
						6 pm - 7:30 pm
					</p>
					<p class="details__contact">
						Please call our client line at <br>
	1-800-223-1368 during intake hours to enter the appointment lottery system to speak to a legal staff member.
					</p>
				</div>
				
			</div>
		</div>
	</div>
	<div class="row homepage__child-grid">
		<div class="small-12 medium-4 columns child-grid__feature">
			<div class="child-grid__image">
				<a href="<?php echo get_page_link($page->ID) ?>">
					<img src="http://lorempixel.com/350/250/" alt="image description HERE">
				</a>
			</div>
			<h3 class="child-grid__title heading--small">
				<a href="#" class="text-link text-link--white">
					Immigration Help
				</a>
			</h3>
			<p class="child-grid__excerpt ">
				A short sentence detailing immigration help.
			</p>
		</div>
		<div class="small-12 medium-4 columns child-grid__feature">
			<div class="child-grid__image">
				<a href="<?php echo get_page_link($page->ID) ?>">
					<img src="http://lorempixel.com/350/250/" alt="image description HERE">
				</a>
			</div>
			<h3 class="child-grid__title heading--small">
				<a href="#" class="text-link text-link--white">
					Our Work
				</a>
			</h3>
			<p class="child-grid__excerpt ">
				A short sentence detailing work.
			</p>
		</div>
		<div class="small-12 medium-4 columns child-grid__feature">
			<div class="child-grid__image">
				<a href="<?php echo get_page_link($page->ID) ?>">
					<img src="http://lorempixel.com/350/250/" alt="image description HERE">
				</a>
			</div>
			<h3 class="child-grid__title heading--small">
				<a href="#" class="text-link text-link--white">
					News
				</a>
			</h3>
			<p class="child-grid__excerpt ">
				A short sentence about news.
			</p>
		</div>
	</div>
</section> <!-- end .intro -->

<section class="donate">
	<div class="row">
		<div class="donate-right-border small-12 medium-6 columns">
			<div class="text--centered">
				<h3 class="heading--medium heading--centered">Support ILCM</h3>
				<p class="text--centered">Paragraph talking about supporting ILCM</p>
				<button class="button--standard">
					<a href="/get-involved/donate" class="button__link">
						Donate to ILCM
					</a>
				</button>
			</div>
		</div>
		<div class="small-12 medium-6 columns">
			<div class="text--centered">
				<h3 class="heading--medium heading--centered">Subscribe to Our Newsletter</h3>
				<p class="text--centered">Paragraph talking about signing up for the newsletter</p>
				<button class="button--standard">
					<a href="/subscribe" class="button__link">
						Subscribe Now
					</a>
				</button>
			</div>
		</div>
	</div>
</section>



<?php get_footer(); ?>
