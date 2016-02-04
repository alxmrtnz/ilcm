<?php
			// 'posts_per_page' => 3,
	// Start WP_Query for only the ID's from above
	


	$args = array(
		'post_type' => 'presentation',
		
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