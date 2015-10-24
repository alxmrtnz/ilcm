<?php
/**
 * Template Name: Left Sidebar Nav
 *
 * Displays summary blocks of content on the right with navigation in the form of a sidebar on the left
 *
 * @package _mbbasetheme
 */

get_header(); ?>

	<div class="page-content">
		<div class="row">
			<div class="small-12 medium-3 columns sidebar-nav">
				<h4 class="heading--small">		
					Legal Services
				</h4>
				<ul class="sidebar-nav__list">
					<li class="sidebar-nav__list-item">
						Overview
					</li>
					<li class="sidebar-nav__list-item">
						Eligibility &amp; Intake
					</li>
					<li class="sidebar-nav__list-item">
						Cases Served
					</li>
					<li class="sidebar-nav__list-item">
						Privacy Policy
					</li>
					<li class="sidebar-nav__list-item">
						Referrals
					</li>
				</ul>
			</div>
			<div class="small-12 medium-9 columns">
				asdf
			</div>
			<div class="small-12 columns">
				<div class="hero-block">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<!-- <div class="bg-image-block hero- - services" style="background-image:url(
							http://localhost:8888/wp-content/uploads/2015/10/32139_mountains.jpg)
						">
							
						</div> end .slider__slide -->	

					<?php endwhile; else: ?>

					

						<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

					<?php endif; ?>
					<h1 class="heading--micro text--centered">
						Services
					</h1>
					<h2 class="heading--medium text--centered services-subtitle">
						Representing immigrants, educating communities, advocating for change
					</h2>
				</div> <!-- end .hero-block -->
			</div> <!-- end .columns -->
		</div> <!-- end .row -->
		<div class="row">
			<div class="small-12 medium-5 medium-offset-1 columns service-highlights__feature">
				<div class="service-highlights__image">
					<a href="#">
						<img src="http://lorempixel.com/524/360/" alt="image description HERE">
					</a>
				</div>
				<h3 class="service-highlights__title heading--small">
					<a href="#" class="text-link text-link--black">
						Legal Services
					</a>
				</h3>
				<p class="service-highlights__subtitle text--sans">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.
				</p>
			</div>
			<div class="small-12 medium-5 end columns service-highlights__feature">
				<div class="service-highlights__image">
					<a href="#">
						<img src="http://lorempixel.com/524/360/" alt="image description HERE">
					</a>
				</div> <!-- end .service-highlights__image -->
				<h3 class="service-highlights__title heading--small">
					Educational Presentations
				</h3>
				<p class="service-highlights__subtitle text--sans">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.
				</p>
			</div>
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
