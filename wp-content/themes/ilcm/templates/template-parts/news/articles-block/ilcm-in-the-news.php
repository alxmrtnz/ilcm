<div class="articles-block">
	<div class="articles-block__title-container">
		<h4 class=" heading--condensed heading--bold articles-block__title">
			<a href="/news-ilcm-in-the-news" class="text-link--black">ILCM In The News</a>
		</h4>
		<a href="/news-ilcm-in-the-news" class="articles-block__view-all">
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
			'meta_key'		=> 'news_section',
			'meta_value'	=> 'ILCM In The News',
		);

		// query
		$the_query = new WP_Query( $args );
	?>

	<ul class="articles-block-list">
		

	<?php if( $the_query->have_posts() ): ?>
		<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>

			<li class="articles-block__article">
				
				<h3 class="heading--extra-small heading--normal heading--non-condensed">
					<a href="<?php the_permalink(); ?>">
						<?php the_title(); ?>
					</a>
				</h3> 
				<p class="articles-block__article-date heading--micro heading heading--sub-gray">
					<?php echo get_the_date( 'M d Y' ); ?> 
				</p>

			</li>

		<?php endwhile; ?>
		
	<?php endif; ?>
	</ul>
</div> <!-- end .articles-block -->

<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>