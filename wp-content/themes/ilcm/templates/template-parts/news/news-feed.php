
	<?php 
		// Get the page's title to determine which type of articles to query
	    $pageTitle = get_the_title( $ID );

	    // Get page variable for pagination function
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		
		// Get all news posts if on the 'News' landing page
		if ($pageTitle == 'News'){
			$args = array(
				'numberposts'	=> '1',
				'post_type'		=> 'news-post',
				'posts_per_page' 	=> 2,
				'paged' 		=> $paged
			);
		} else { 
		//if the page is not the main 'News' page, use the following switch statement to determine which page it is, then query news posts with that news type

			$newsType = 'default';

			switch ($pageTitle) {
				case 'Immigration In Minnesota':
					$newsType = 'Immigration In Minnesota';
					break;
				case 'Immigration In The United States':
					$newsType = 'Immigration In The United States';
					break;
				case 'ILCM In The News':
					$newsType = 'ILCM In The News';
					break;
				default:
					return false;
			}

			$args = array(
				'numberposts'	=> '1',
				'post_type'		=> 'news-post',
				'meta_key'		=> 'news_section',
				'meta_value'	=> $newsType, //1 for "True". Checkbox is checked in Wordpress
				'posts_per_page' 	=> 2,
				'paged' 		=> $paged
			);

		}//end else

		// query all news posts in array $args
		$the_query = new WP_Query( $args );
	?>
	<?php if( $the_query->have_posts() ): ?>
		<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>

			<div class="featured-article">
				
			
				<?php if ( has_post_thumbnail() ) {
					echo '<div class="featured-article__img">';
					echo '<a href="';
						the_permalink();
					echo '">';
						the_post_thumbnail('featured-news'); 
					echo '</a>';
				    echo '</div>';
				} ?>

				<div class="featured-article__meta">
					
						<h3 class="heading--micro heading--sub-gray">
							
							<?php the_time('M n Y'); ?>&nbsp;&nbsp;|&nbsp;&nbsp;<?php the_field('news_section'); ?>
							
						</h3>
					<h2 class="heading--medium heading--bold heading--featured-news">
						<a href="<?php the_permalink(); ?>" class="text-link--black">
							<?php the_title(); ?>
						</a>
					</h2> 
					<p class="featured-article__byline">
						<?php the_field('byline'); ?>
					</p> 
					<a href="<?php the_permalink(); ?>" class="">
						Read More...
					</a>
				</div>

			</div><!--  end .featured-article -->
				
		<?php endwhile; ?>

		<div class="news-feed__pagination">
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
		</div>
		
	<?php endif; ?>

	

	<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>