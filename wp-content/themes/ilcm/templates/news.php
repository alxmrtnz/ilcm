<?php
/**
 * Template Name: News Landing
 *
 * Displays default news page with featured articles and other article lists
 *
 * @package _mbbasetheme
 */

get_header(); ?>

	<div class="page-content">
		<div class="row">
			<div class="small-12 columns">
				<h1 class="heading--large heading--centered">
					<span>
						<?php the_title(); ?>
					</span>
				</h1>
			</div>
			
		</div>
		<div class="row">
			<div class="small-12 large-8 columns ">
				
				<div class="news-feed">
					<?php require('template-parts/news/news-feed.php'); ?>
				</div>
			</div> <!-- end .columns -->
			<div class="small-12 large-4 columns news-sidebar">
				<div class=" news-sidebar__content">
					<?php require('template-parts/news/articles-sidebar.php'); ?>
				</div> <!-- end .news-sidebar__content -->
			</div> <!-- end .columns -->
		</div> <!-- end .row -->


		
				






<?php get_footer(); ?>
