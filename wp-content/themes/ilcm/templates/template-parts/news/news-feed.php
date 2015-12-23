
	<?php 
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		// args
		$args = array(
			'numberposts'	=> '1',
			'post_type'		=> 'news-post',
			// 'meta_key'		=> 'featured_news_article',
			// 'meta_value'	=> 'Not Featured', //1 for "True". Checkbox is checked in Wordpress
			'posts_per_page' 	=> 2,
			'paged' 		=> $paged
		);

		// query
		$the_query = new WP_Query( $args );
	?>
	<?php if( $the_query->have_posts() ): ?>
		<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>

			<div class="featured-article">
				
			
				<?php if ( has_post_thumbnail() ) {
					echo '<div class="featured-article__img">';
					echo '<a href="<?php the_permalink(); ?>">';
						the_post_thumbnail('featured-news'); 
					echo '</a>';
				    echo '</div>';
				} ?>

				<div class="featured-article__meta">
					
						<h3 class="heading--micro heading--sub-gray">
							
							<?php the_field('news_section'); ?>&nbsp;&nbsp;|&nbsp;&nbsp;  <?php the_time('M n Y'); ?>
							
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
		<div class="navigation">
  <div class="alignleft"><?php previous_posts_link('&laquo; Previous') ?></div>
  <div class="alignright"><?php next_posts_link('More &raquo;') ?></div>
  </div>
	<?php endif; ?>

	

	<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>