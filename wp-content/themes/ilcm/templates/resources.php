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
			<div class="small-12 columns">
				<h1 class="heading--large text--centered title--resources">
					<?php the_title(); ?>
				</h1>
				<h2 class="heading--medium text--centered services-subtitle">
					<?php the_field('subtitle'); ?>
				</h2>
			</div> <!-- end .columns -->
		</div> <!-- end .row -->
		<div class="row">
			

			<div class="small-12 medium-10 medium-offset-1  columns">
				<?php $this_page_id=$wp_query->post->ID; $flag=1;?>

			    	<?php query_posts(array('orderby' => 'menu_order', 'order' => 'ASC', 'showposts' => 20, 'post_parent' => $this_page_id, 'post_type' => 'page')); while (have_posts()) { the_post(); ?>

			        		<?php $flagMarker = $flag % 3; ?>

			                <?php if ( $flagMarker == 1 ) { ?>

			                    <div class="row">
		

			                <?php }  ?>
			                    <div class="small-12 medium-4 columns child-grid__feature">
			                    	<div class="child-grid__image">
			                    		<a href="<?php echo get_page_link($page->ID) ?>">
			                    			<img src="http://lorempixel.com/524/300/" alt="image description HERE">
			                    		</a>
			                    	</div>
			                    	<h3 class="child-grid__title heading--small">
			                    		<a href="<?php echo get_page_link($page->ID) ?>" class="text-link text-link--black">
			                    			<?php the_title(); ?>
			                    		</a>
			                    	</h3>
			                    	<p class="child-grid__subtitle text--sans">
			                    		<?php echo get_field('summary', $page->ID); ?>
			                    	</p>
			                    </div>

			                <?php  ?>

			                <?php if ( $flagMarker == 0 ) { ?>

			                    </div>
			                
			                <?php }  ?>
							<?php $flag+=1; ?>


			    

			        <?php } ?>

				


			</div> <!-- end .columns -->



			
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
