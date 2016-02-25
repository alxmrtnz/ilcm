<?php
/**
 * _mbbasetheme functions and definitions
 *
 * @package _mbbasetheme
 */

/****************************************
Theme Setup
*****************************************/

/**
 * Theme initialization
 */
require get_template_directory() . '/lib/init.php';

/**
 * Custom theme functions definited in /lib/init.php
 */
require get_template_directory() . '/lib/theme-functions.php';

/**
 * Helper functions for use in other areas of the theme
 */
require get_template_directory() . '/lib/theme-helpers.php';

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/lib/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/lib/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/lib/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/lib/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/lib/inc/jetpack.php';


/****************************************
Require Plugins
*****************************************/

require get_template_directory() . '/lib/class-tgm-plugin-activation.php';
require get_template_directory() . '/lib/theme-require-plugins.php';

// add_action( 'tgmpa_register', 'mb_register_required_plugins' );


/****************************************
Misc Theme Functions
*****************************************/

/**
 * Define custom post type capabilities for use with Members
 */
add_action( 'admin_init', 'mb_add_post_type_caps' );
function mb_add_post_type_caps() {
	// mb_add_capabilities( 'portfolio' );
}

/**
 * Filter Yoast SEO Metabox Priority
 */
add_filter( 'wpseo_metabox_prio', 'mb_filter_yoast_seo_metabox' );
function mb_filter_yoast_seo_metabox() {
	return 'low';
}

//Making jQuery Google API
function modify_jquery() {
	if (!is_admin()) {
		// comment out the next two lines to load the local copy of jQuery
		wp_deregister_script('jquery');
		wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js', false, '1.8.1');
		wp_enqueue_script('jquery');
	}
}
add_action('init', 'modify_jquery');


function register_my_menus() {
  register_nav_menus(
    array(
      'main-menu' => __( 'Main Menu' ),
      'secondary-menu' => __( 'Secondary Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );



//Add Post Thumbnail Theme Support
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 150, 150, true ); // default Post Thumbnail dimensions (cropped)

// additional image sizes
// delete the next line if you do not need additional image sizes
add_image_size( 'featured-homepage', 1440, 800 ); //1440 pixels wide, 800 pixels tall
add_image_size( 'thumbnail-medium', 300, 300 ); //1440 pixels wide, 800 pixels tall
add_image_size( 'featured-news', 720, 300 ); //750 pixels wide, 450 pixels tall
add_image_size( 'staff-portrait', 260, 260 ); //750 pixels wide, 450 pixels tall





//////////////////////////////////////////////////////////////////////////////
//Defining Sidebars for the Site

function ilcm_register_sidebars() {

    /* Register the Immigration Help sidebar. */
    register_sidebar(
        array(
            'id' => 'sidebar-services',
            'name' => __( 'Immigration Help Sidebar', 'ilcm' ),
            'description' => __( 'Widgets placed here will go in the left sidebar of the "Immigration Services" pages.', 'ilcm' ),
            'before_widget' => '<aside class="sidebar-nav"">',
            'after_widget' => '</aside>',
            'before_title' => '<h4 class="sidebar-nav__title">',
            'after_title' => '</h4>'
        )
    );

    /* Register the services sidebar. */
    register_sidebar(
        array(
            'id' => 'sidebar-immigration-resources',
            'name' => __( 'Immigration Resources Sidebar', 'ilcm' ),
            'description' => __( 'Widgets placed here will go in the left sidebar of the "Services" pages.', 'ilcm' ),
            'before_widget' => '<aside class="sidebar-nav"">',
            'after_widget' => '</aside>',
            'before_title' => '<h4 class="sidebar-nav__title">',
            'after_title' => '</h4>'
        )
    );

    /* Register the DACA sidebar. */
    register_sidebar(
        array(
            'id' => 'sidebar-daca',
            'name' => __( 'DACA Deferred Action Sidebar', 'ilcm' ),
            'description' => __( 'Widgets placed here will go in the left sidebar of the "DACA Deferred Action" pages.', 'ilcm' ),
            'before_widget' => '<aside class="sidebar-nav"">',
            'after_widget' => '</aside>',
            'before_title' => '<h4 class="sidebar-nav__title">',
            'after_title' => '</h4>'
        )
    );

    /* Register the About Us sidebar. */
    register_sidebar(
        array(
            'id' => 'sidebar-about-us',
            'name' => __( 'About Us Sidebar', 'ilcm' ),
            'description' => __( 'Widgets placed here will go in the left sidebar of the "About" pages.', 'ilcm' ),
            'before_widget' => '<aside class="sidebar-nav"">',
            'after_widget' => '</aside>',
            'before_title' => '<h4 class="sidebar-nav__title">',
            'after_title' => '</h4>'
        )
    );

    /* Register the Get Involved sidebar. */
    register_sidebar(
        array(
            'id' => 'sidebar-get-involved',
            'name' => __( 'Get Involved Sidebar', 'ilcm' ),
            'description' => __( 'Widgets placed here will go in the left sidebar of the "About" pages.', 'ilcm' ),
            'before_widget' => '<aside class="sidebar-nav"">',
            'after_widget' => '</aside>',
            'before_title' => '<h4 class="sidebar-nav__title">',
            'after_title' => '</h4>'
        )
    );

    /* Register the Our Work sidebar. */
    register_sidebar(
        array(
            'id' => 'sidebar-our-work',
            'name' => __( 'Our Work Sidebar', 'ilcm' ),
            'description' => __( 'Widgets placed here will go in the left sidebar of the "About" pages.', 'ilcm' ),
            'before_widget' => '<aside class="sidebar-nav"">',
            'after_widget' => '</aside>',
            'before_title' => '<h4 class="sidebar-nav__title">',
            'after_title' => '</h4>'
        )
    );

    /* Register the Educational Presentations sidebar. */
    register_sidebar(
        array(
            'id' => 'sidebar-educational-presentations',
            'name' => __( 'Educational Presentations', 'ilcm' ),
            'description' => __( 'Widgets placed here will go in the left sidebar of the "Educational Presentations" pages.', 'ilcm' ),
            'before_widget' => '<aside class="sidebar-nav"">',
            'after_widget' => '</aside>',
            'before_title' => '<h4 class="sidebar-nav__title">',
            'after_title' => '</h4>'
        )
    );

    /* Repeat register_sidebar() code for additional sidebars. */
}
add_action( 'widgets_init', 'ilcm_register_sidebars' );

//end sidebars
////////////////////////////////////////////////////////////////////////


////////////////////////////////////////////////////////////////////////
//Defining Custom Post Types


// Remove default "Posts" from the wordpress menu

// function remove_menus () {
// global $menu;
//     $restricted = array(__('Posts'));
//     end ($menu);
//     while (prev($menu)){
//         $value = explode(' ',$menu[key($menu)][0]);
//         if(in_array($value[0] != NULL?$value[0]:"" , $restricted)){unset($menu[key($menu)]);}
//     }
// }
// add_action('admin_menu', 'remove_menus');


function custom_post_presentation() {
    $labels = array(
        'name'               => _x( 'Presentations', 'post type general name' ),
        'singular_name'      => _x( 'Presentation', 'post type singular name' ),
        'add_new'            => _x( 'Add New', 'book' ),
        'add_new_item'       => __( 'Add New Presentation' ),
        'edit_item'          => __( 'Edit Presentation' ),
        'new_item'           => __( 'New Presentation' ),
        'all_items'          => __( 'All Presentations' ),
        'view_item'          => __( 'View Presentation' ),
        'search_items'       => __( 'Search Presentations' ),
        'not_found'          => __( 'No presentations found' ),
        'not_found_in_trash' => __( 'No presentations found in the Trash' ), 
        'parent_item_colon'  => '',
        'menu_name'          => 'Presentations'
    );
    $args = array(
        'labels'        => $labels,
        'description'   => 'All of my educational presentations',
        'public'        => true,
        'menu_position' => 5,
        'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
        'has_archive'   => false,
        'rewrite' => array( 'slug' => 'services/educational-presentations')
    );
    register_post_type( 'presentation', $args ); 
}
add_action( 'init', 'custom_post_presentation' );


function custom_post_type_news() {
	$labels = array(
		'name'               => _x( 'News Posts', 'post type general name' ),
		'singular_name'      => _x( 'News Post', 'post type singular name' ),
		'add_new'            => _x( 'Add New', 'book' ),
		'add_new_item'       => __( 'Add New News Post' ),
		'edit_item'          => __( 'Edit News Post' ),
		'new_item'           => __( 'New News Post' ),
		'all_items'          => __( 'All News Posts' ),
		'view_item'          => __( 'View News Post' ),
		'search_items'       => __( 'Search News Posts' ),
		'not_found'          => __( 'No news posts found' ),
		'not_found_in_trash' => __( 'No news posts found in the Trash' ), 
		'parent_item_colon'  => '',
		'menu_name'          => 'News Post'
	);
	$args = array(
		'labels'        => $labels,
		'description'   => 'All of my news posts',
		'public'        => true,
		'menu_position' => 6,
		'supports'      => array( 'title', 'editor', 'thumbnail' ),
        'rewrite' => array( 'slug' => 'news'),
		'has_archive'   => false
	);
	register_post_type( 'news-post', $args );	
}
add_action( 'init', 'custom_post_type_news' );







//hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'create_topics_hierarchical_taxonomy', 0 );

//create a custom taxonomy name it topics for your posts

function create_topics_hierarchical_taxonomy() {

// Add new taxonomy, make it hierarchical like categories
//first do the translations part for GUI

  $labels = array(
    'name' => _x( 'News Topics', 'taxonomy general name' ),
    'singular_name' => _x( 'News Topic', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search News Topics' ),
    'all_items' => __( 'All News Topics' ),
    'parent_item' => __( 'Parent News Topic' ),
    'parent_item_colon' => __( 'Parent News Topic:' ),
    'edit_item' => __( 'Edit News Topic' ), 
    'update_item' => __( 'Update News Topic' ),
    'add_new_item' => __( 'Add New News Topic' ),
    'new_item_name' => __( 'New News Topic Name' ),
    'menu_name' => __( 'Topics' ),
  );    

// Now register the taxonomy

  register_taxonomy(
    'topics', //this line registers the taxonomy name
    'news-post', //this line determines what kind of post type (or custom post type) to display the taxonomy's meta box on the wordpress backend 

    array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'topic' ),
    )
    );

}
///////////////////////////////////////////
// Function to delete and reset the categories for news posts. 
//Uncomment this, save, and reload a page on the site to run. 
// After running, make sure your categories have been deleted and 
// then comment this out again or it will delete and clear any new 
// categories added any time a page is reloaded.
/////////////////////////////////////////////
// function sjc_delete_terms() {
//      if ( is_admin() ) {
//           $terms = get_terms( 'topics', array( 'fields' => 'ids', 'hide_empty' => false ) );
//           foreach ( $terms as $value ) {
//                wp_delete_term( $value, 'topics' );
//           }
//      }
// }
// add_action( 'init', 'sjc_delete_terms' );

add_action( 'admin_head', 'hide_editor' );

function hide_editor() {
    global $pagenow;
    if( !( 'post.php' == $pagenow ) ) return;

    global $post;
    // Get the Post ID.
    $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
    if( !isset( $post_id ) ) return;

    // Hide the editor on the page titled 'Homepage'
      $boardpgname = get_the_title($post_id);
      if($boardpgname == 'Board of Directors'){ 
        remove_post_type_support('page', 'editor');
      }

      $staffpgname = get_the_title($post_id);
      if($staffpgname == 'Staff'){ 
        remove_post_type_support('page', 'editor');
      }
      // Hide the editor on a page with a specific page template
      // Get the name of the Page Template file.
      $template_file = get_post_meta($post_id, '_wp_page_template', true);
      if($template_file == 'my-page-template.php'){ // the filename of the page template
        remove_post_type_support('page', 'editor');
      }
}






