<?php
/**
 * Template Name: News Landing
 *
 * Displays default news page with featured articles and other article lists
 *
 * @package _mbbasetheme
 */

get_header(); ?>

	<div class="page-content">
		<div class="row">
			<div class="small-12 columns">
				<h1 class="heading--large heading--centered">
				<span>
					<?php the_title(); ?>
				</span>
			</h1>
			</div>
			
		</div>
		<div class="row">
			<div class="small-12 medium-8 columns">
				<div class="featured-article">
					<?php 
						

						// args
						$args = array(
							'numberposts'	=> -1,
							'post_type'		=> 'news-post',
							'meta_key'		=> 'featured_news_article',
							'meta_value'	=> 'Featured'
						);


						// query
						$the_query = new WP_Query( $args );
					?>
					<?php if( $the_query->have_posts() ): ?>
						<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
								

								<a href="<?php the_permalink(); ?>">
								<? the_post_thumbnail('featured-news'); ?>
								
								<div class="featured-article__meta">
									<h3 class="heading--micro heading--sub-gray">
										<?php the_field('news_section'); ?>&nbsp;&nbsp;|&nbsp;&nbsp;  <?php the_date('M n Y'); ?>
									</h3>
									<h2 class="heading--medium heading--bold heading--featured-news">
										<?php the_title(); ?>
									</h2> 
									<p>
										<?php the_field('byline'); ?>
									</p> 
								</div>
								
									
								</a>
						<?php endwhile; ?>
					<?php endif; ?>

					<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>
				</div>
			</div> <!-- end .columns -->
		</div> <!-- end .row -->


		<?php
					// 'posts_per_page' => 3,
			// Start WP_Query for only the ID's from above
			


			$args = array(
				'post_type' => 'news-post',
				
			);
			$query = new WP_Query( $args );
		?>
			 
		

		<?php if ( $query->have_posts() ) : ?>

		<div class="row">
			<!-- the loop -->
			<?php while ( $query->have_posts() ) : $query->the_post(); ?>
				<!-- <div class="small-12 medium-3  columns">
					<div class="presentation-thumbnail">
						<?php echo get_the_post_thumbnail( $page->ID, 'thumbnail-medium' ); ?>
					</div>
				</div> -->
				<div class="small-12 columns">
					<div class="presentation-summary">
						<h2 class="heading--medium heading--bold"><?php the_title(); ?></h2>
						<h3 class="heading--small heading--sub-gray"><?php the_field('subtitle');?>
						</h3>
						<div class="presentation-description paragraph--standard">
							<?php the_content() ?>
						</div>
					</div>
				</div>
				
				
			<?php endwhile; ?>
			<!-- end of the loop -->


			<?php wp_reset_postdata(); ?>
		</div>

			

		<?php else : ?>
			<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>


		
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
