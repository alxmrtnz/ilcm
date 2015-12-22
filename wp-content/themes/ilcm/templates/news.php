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
			<div class="small-12 medium-9 columns">
				<div class="featured-article">
					<?php require('template-parts/news/featured-story.php'); ?>
				</div> <!-- end .featured-article -->
				<div class="articles-block">
					<?php require('template-parts/news/articles-block/immigration-in-minnesota.php');?>
				</div> <!-- end .articles-block -->
				<div class="articles-block">
					<?php require('template-parts/news/articles-block/immigration-in-usa.php');?>
				</div> <!-- end .articles-block -->

				<div class="articles-block">
					<?php require('template-parts/news/articles-block/ilcm-in-the-news.php');?>
				</div> <!-- end .articles-block -->
				
			</div> <!-- end .columns -->
			<div class="small-12 medium-3 columns">
				<?php  require('template-parts/left-sidebar-template-sidebar.php');
				?>
			</div> <!-- end .columns -->
		</div> <!-- end .row -->






<?php get_footer(); ?>
