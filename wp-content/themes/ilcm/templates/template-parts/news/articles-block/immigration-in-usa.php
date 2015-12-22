<div class="articles-block__title-container">
	<h4 class="heading--small articles-block__title">
		Immigration In The United States
	</h4>
	<a href="#" class="articles-block__view-all">
		View All
	</a>
</div>
<?php 
	////////////////////////////////////////////////////////////////////////
	//CUSTOM POST QUERY - IMMIGRATION IN THE UNITED STATES, NOT FEATURED
	// This is a query by custom fields. 
	// You can designate two or more field values and a relation between them (AND, OR). 
	// Each field value is put into its own array to compare against one another.
	//http://www.advancedcustomfields.com/resources/query-posts-custom-fields/
	/////////////////////////////////////////////////////////////////////////

	$args = array(
		'numberposts'	=> -1,
		'post_type'		=> 'news-post',
		'meta_query'	=> array(
			'relation'		=> 'AND',
			array(
				'key'	 	=> 'news_section',
				'value'	  	=> 'Immigration In The United States',
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


<?php if( $the_query->have_posts() ): ?>
	<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
			

			<a href="<?php the_permalink(); ?>">

			<div class="">
				<h3 class="heading--micro heading--sub-gray">
					<?php the_date('M n Y'); ?>
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