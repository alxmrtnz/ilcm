<?php 
   // Get the page's title to determine which type of articles to query
   $pageTitle = get_the_title( $ID );


   //Use the page title to determine which article blocks should show in the sidebar
   if ($pageTitle != 'Immigration In Minnesota') {
      require('articles-block/immigration-in-minnesota.php');
   }

   if ($pageTitle != 'Immigration In The United States') {
      require('articles-block/immigration-in-usa.php');
   }

   if ($pageTitle != 'ILCM In The News') {
      require('articles-block/ilcm-in-the-news.php');
   }
?>