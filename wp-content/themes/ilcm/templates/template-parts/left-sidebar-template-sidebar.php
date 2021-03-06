<?php 
	//use this code to determine what category the current page is and then use that to determine which sidebar menu to display
	$category = get_the_category( $post->ID ); 
	$cat_name = $category[0]->cat_name; 
	
	if ($cat_name == 'Immigration Resource') {
		dynamic_sidebar( 'sidebar-immigration-resources' );
	} else if ($cat_name == 'Immigration Help') {
		dynamic_sidebar( 'sidebar-services' );
	}
	else if ($cat_name == 'DACA') {
		dynamic_sidebar( 'sidebar-daca' );
	}
	else if ($cat_name == 'About ILCM') {
		dynamic_sidebar( 'sidebar-about-us' );
	}
	else if ($cat_name == 'Get Involved') {
		dynamic_sidebar( 'sidebar-get-involved' );
	}
	else if ($cat_name == 'Our Work') {
		dynamic_sidebar( 'sidebar-our-work' );
	}
	else if ($cat_name == 'Educational Presentations') {
		dynamic_sidebar( 'sidebar-educational-presentations' );
	}
	else if ($cat_name == 'Contact') {
		dynamic_sidebar( 'sidebar-contact' );
	}
	else if ($cat_name == 'Events') {
		dynamic_sidebar( 'sidebar-events' );
	}
	else if ($cat_name == 'Subscribe') {
		dynamic_sidebar( 'sidebar-subscribe' );
	}
?>