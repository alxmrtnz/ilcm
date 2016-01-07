<?php
/**
 * Template Name: News Archive - Immigration (MN)
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package _mbbasetheme
 */

get_header(); ?>

	<div class="page-content">
		
	
		<div class="row">
			<div class="small-12 columns">
				<h1 class="heading--large heading--centered">
					<span>
						<?php $permalink = get_permalink($post->post_parent); ?>
						<a class="" href="<?php echo $permalink; ?>">
							News > 
						</a>
						<?php the_title(); ?>
					</span>
				</h1>
			</div>
		</div>

		<div class="row">
			<section class="news-left-column small-12 large-8 columns">

				<div class="news-feed">
					<?php require('template-parts/news/news-feed.php'); ?>
				</div>

				

			</section><!-- end .news-column-left -->
			<section class="news-column-right small-12 large-4 columns">
				<?php require('template-parts/news/articles-block/immigration-in-minnesota.php');?>
			</section>
		</div>
	</div> <!-- end .page-content -->
	
<?php get_footer(); ?>
