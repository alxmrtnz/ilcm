<?php
/**
 * Template Name: News Archive - Immigration (MN)
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package _mbbasetheme
 */

get_header(); ?>

	<div class="row">
		<section id="primary" class="content-area small-12 large-8 columns">
			<main id="main" class="site-main" role="main">

			<?php 

				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

				////////////////////////////////////////////////////////////////////////
				//CUSTOM POST QUERY - IMMIGRATION IN MINNESOTA, NOT FEATURED
				// This is a query by custom fields. 
				// You can designate two or more field values and a relation between them (AND, OR). 
				// Each field value is put into its own array to compare against one another.
				//http://www.advancedcustomfields.com/resources/query-posts-custom-fields/
				/////////////////////////////////////////////////////////////////////////

				$args = array(
					'numberposts'	=> -1,
					'post_type'		=> 'news-post',
					'showposts' 	=> '3',
					'posts_per_page' 	=> 2,
					'paged' 		=> $paged,
					'meta_query'	=> array(
						array(
							'key'	 	=> 'news_section',
							'value'	  	=> 'Immigration In Minnesota',
							'compare' 	=> '=',
						),
					)
					
				);


				// query
				$the_query = new WP_Query( $args );

				
			?>

			<ul class="articles-block-list">
				
			
			<?php if( $the_query->have_posts() ): ?>
				<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>

					<li class="articles-block__article">
						
						<h3 class="heading--extra-small heading--bold heading--non-condensed">
							<a href="<?php the_permalink(); ?>">
								<?php the_title(); ?>
							</a>
						</h3> 
						<p class="articles-block__article-date heading--micro heading heading--sub-gray">
							<?php the_time('M n Y'); ?>
						</p>

					</li>

				<?php endwhile; ?>

				

			<?php endif; ?>
			</ul> <!-- end .articles-block-list -->

			<div class="pagination pagination--immigration-in-mn">
				<?php

					//Here we get the total number of news pages by checking the query we made initially ($the_query)
					$total_pages = $the_query->max_num_pages;

					//If the total pages is greater than one, we check and see what page we're on ($current_page) and then echo out 
					if ($total_pages > 1){
				        $current_page = max(1, get_query_var('paged'));
				 
				        echo paginate_links(array(
				            'base' => get_pagenum_link(1) . '%_%',
				            'format' => '/page/%#%',
				            'current' => $current_page,
				            'total' => $total_pages,
				        ));
				    }


				?>
			</div> <!-- end .pagination--immigration-in-mn -->

			<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>

			</main><!-- #main -->
		</section><!-- #primary -->
	</div>
	

<?php get_sidebar(); ?>
<?php get_footer(); ?>
