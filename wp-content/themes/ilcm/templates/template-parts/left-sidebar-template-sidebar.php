<?php 
	//use this code to determine what category the current page is and then use that to determine which sidebar menu to display
	$category = get_the_category( $post->ID ); 
	$cat_name = $category[0]->cat_name; 
	if ($cat_name == 'Immigration Resource') {
		dynamic_sidebar( 'sidebar-immigration-resources' );
	} else if ($cat_name == 'Client Service') {
		dynamic_sidebar( 'sidebar-services' );
	}
?>