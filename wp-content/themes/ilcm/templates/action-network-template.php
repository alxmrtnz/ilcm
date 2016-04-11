<?php
/**
 * Template Name: Action Network Template
 *
 * Displays summary blocks of content on the right with navigation in the form of a sidebar on the left
 *
 * @package _mbbasetheme
 */

get_header(); ?>

	<div class="page-content">
		<div class="row">
			<div class="small-12 medium-4 large-3 columns">
				<?php  require('template-parts/left-sidebar-template-sidebar.php');
				?>
			</div> <!-- end .columns -->
			<div class="small-12 medium-8 large-7 end columns">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<h2 class="heading--micro">
						<?php
						echo '<a class="text-link text-link--primary text-link--gray" href="';
						echo get_permalink( $post->post_parent );

						echo '">';
						echo empty( $post->post_parent ) ? get_the_title( $post->ID ) : get_the_title( $post->post_parent );
						echo '</a>';
						?>
					</h2>

					<h1 class="heading heading--large heading--legal-services">
						<?php the_title(); ?>
					</h1>
					<h3 class="heading--small heading--sub-gray">
						<?php the_field('subtitle'); ?>
					</h3>
					
					<?php the_content(); ?>

					<noscript><iframe src="//www.congressweb.com/ILCM" width="800" height="600" /></noscript>
					<script type="text/javascript" language="javascript" src="//www.congressweb.com/cweb/js/jquery.congressweb.iframe.js"></script>
					<script type="text/javascript" language="javascript">
					$cweb(function () {
					   //-----------------------------------------------------------------
					   var sBaseUrl = "//www.congressweb.com/ILCM";
					   var ifrInitialWidth = 800;
					   var ifrInitialHeight = 600;
					   //-----------------------------------------------------------------
					 
					   // Look for URL to load in the querystring.
					   var sLoadUrl = "";
					   var sQString = document.location.search;
					   var sQString = sQString.substring(1, sQString.length);  // Remove initial question mark
					   var raPairs = sQString.split("&");
					   var raPair;
					   for (var idx = 0; idx < raPairs.length; idx++) {
					      raPair = raPairs[idx].split("=");
					      if (raPair[0] && raPair[0].toLowerCase() == "tdburl") {
					         if (raPair[1]) sLoadUrl = raPair[1];
					       }
					      if (sLoadUrl > "") break;
					   }
					 
					   if (sLoadUrl > "") {
					      sLoadUrl = unescape(sLoadUrl);
					      var sLCUrl = sLoadUrl.toLowerCase();
					      if (sLCUrl.substring(0, sBaseUrl.length + 5) != "http:" + sBaseUrl.toLowerCase()
					         && sLCUrl.substring(0, sBaseUrl.length + 6) != "https:" + sBaseUrl.toLowerCase())
					      {
					         sLoadUrl = "";
					      }
					   }
					   if (sLoadUrl > "") {
					      $cweb('#iframe').congressweb({
					         url: sLoadUrl,
					         width: ifrInitialWidth,
					         height: ifrInitialHeight,
					         forceScrollTop: true,
					         responsive: true
					      });
					   } else {
					      $cweb('#iframe').congressweb({
					         url: sBaseUrl,
					         width: ifrInitialWidth,
					         height: ifrInitialHeight,
					         forceScrollTop: true,
					         responsive: true
					      });
					   }
					});
					</script>
					<div id="iframe"></div>
					

				<?php endwhile; else: ?>

					<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

				<?php endif; ?>

				
			
		</div> <!-- end .row -->


	</div> <!-- end .page-content -->

<?php get_footer(); ?>
