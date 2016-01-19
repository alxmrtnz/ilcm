<?php
/**
 * Template Name: News Archive 
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package _mbbasetheme
 */

get_header(); ?>

	<div class="page-content">
		
	
		<div class="row">
			<div class="small-12 columns">
				<h1 class="heading--medium heading--serif heading--centered">
					<span>
						
						<a class="" href="/news">
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
				<?php 
					// Get the page's title to determine which type of articles to query
	   				$pageTitle = get_the_title( $ID );


	   				//Use the page title to determine which article blocks should show in the sidebar

   					if ($pageTitle != 'Immigration In Minnesota') {
   						require('template-parts/news/articles-block/immigration-in-minnesota.php');
   					}

   					if ($pageTitle != 'Immigration In The United States') {
   						require('template-parts/news/articles-block/immigration-in-usa.php');
   					}

   					if ($pageTitle != 'ILCM In The News') {
   						require('template-parts/news/articles-block/ilcm-in-the-news.php');
   					}
	   			?>
			</section>
		</div>
	</div> <!-- end .page-content -->
	
<?php get_footer(); ?>
