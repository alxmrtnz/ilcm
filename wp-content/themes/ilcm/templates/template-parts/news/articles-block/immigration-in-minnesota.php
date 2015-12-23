	<div class="articles-block__title-container">
		<h4 class=" heading--condensed heading--bold articles-block__title">
			Immigration In Minnesota
		</h4>
		<a href="#" class="articles-block__view-all">
			View All
		</a>
	</div>
	<?php 
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
			'meta_query'	=> array(
				'relation'		=> 'AND',
				array(
					'key'	 	=> 'news_section',
					'value'	  	=> 'Immigration In Minnesota',
					'compare' 	=> '=',
				),
				array(
					'key'	  	=> 'featured_news_article',
					'value'	  	=> 'Not Featured',
					'compare' 	=> '=',
				),
			),
		);

		// query
		$the_query = new WP_Query( $args );
	?>

	<ul class="articles-block-list">
		
	
	<?php if( $the_query->have_posts() ): ?>
		<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>

			<li class="articles-block__article">
				
				<h3 class="heading--extra-small heading--bold ">
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
	</ul>

	<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>