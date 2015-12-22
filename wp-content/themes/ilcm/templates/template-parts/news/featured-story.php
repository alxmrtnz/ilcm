<h3>Featured Story</h3>

	<?php 

		// args
		$args = array(
			'numberposts'	=> -1,
			'post_type'		=> 'news-post',
			'meta_key'		=> 'featured_news_article',
			'meta_value'	=> 'Featured' //1 for "True". Checkbox is checked in Wordpress
		);

		// query
		$the_query = new WP_Query( $args );
	?>
	<?php if( $the_query->have_posts() ): ?>
		<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
				

				<a href="<?php the_permalink(); ?>">
				<div class="featured-article__img">
					<? the_post_thumbnail('featured-news'); ?>
				</div>
				
				
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