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




//Defining Custom Post Types
// Website

function revcon_change_post_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'News Posts';
    $submenu['edit.php'][5][0] = 'News Posts';
    $submenu['edit.php'][10][0] = 'Add News Post';
    $submenu['edit.php'][16][0] = 'News Post Tags';
    echo '';
}
function revcon_change_post_object() {
    global $wp_post_types;
    $labels = &$wp_post_types['post']->labels;
    $labels->name = 'News Posts';
    $labels->singular_name = 'News Post';
    $labels->add_new = 'Add News';
    $labels->add_new_item = 'Add News';
    $labels->edit_item = 'Edit News';
    $labels->new_item = 'News';
    $labels->view_item = 'View News';
    $labels->search_items = 'Search News';
    $labels->not_found = 'No News found';
    $labels->not_found_in_trash = 'No News found in Trash';
    $labels->all_items = 'All News';
    $labels->menu_name = 'News';
    $labels->name_admin_bar = 'News';
}
 
add_action( 'admin_menu', 'revcon_change_post_label' );
add_action( 'init', 'revcon_change_post_object' );



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

    /* Repeat register_sidebar() code for additional sidebars. */
}
add_action( 'widgets_init', 'ilcm_register_sidebars' );




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


// function custom_post_type_news() {
// 	$labels = array(
// 		'name'               => _x( 'News Posts', 'post type general name' ),
// 		'singular_name'      => _x( 'News Post', 'post type singular name' ),
// 		'add_new'            => _x( 'Add New', 'book' ),
// 		'add_new_item'       => __( 'Add New News Post' ),
// 		'edit_item'          => __( 'Edit News Post' ),
// 		'new_item'           => __( 'New News Post' ),
// 		'all_items'          => __( 'All News Posts' ),
// 		'view_item'          => __( 'View News Post' ),
// 		'search_items'       => __( 'Search News Posts' ),
// 		'not_found'          => __( 'No news posts found' ),
// 		'not_found_in_trash' => __( 'No news posts found in the Trash' ), 
// 		'parent_item_colon'  => '',
// 		'menu_name'          => 'News Post'
// 	);
// 	$args = array(
// 		'labels'        => $labels,
// 		'description'   => 'All of my news posts',
// 		'public'        => true,
// 		'menu_position' => 6,
// 		'supports'      => array( 'title', 'editor', 'thumbnail' ),
// 		'has_archive'   => true,
// 	);
// 	register_post_type( 'news-post', $args );	
// }
// add_action( 'init', 'custom_post_type_news' );














