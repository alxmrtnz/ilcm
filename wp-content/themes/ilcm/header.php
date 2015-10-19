<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package _mbbasetheme
 */
?>
<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<!-- Load Favicon and Touch Icon -->
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/favicon.ico">
	<link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/apple-touch-icon.png">

	<!-- Load Web Fonts -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<link href='https://fonts.googleapis.com/css?family=Lora:400,400italic,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,400italic,700' rel='stylesheet' type='text/css'>

	<!-- Load Slick Slider -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/slick/slick-theme.css"/>
					

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="">
	<!--[if lt IE 9]>
	    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->

	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', '_mbbasetheme' ); ?></a>

	<header class="nav-bar 
		<?php
		if ( !is_home() ) {
		    // This is not the homepage
		    echo 'nav--not-home';
		}
		?>
	" role="banner">
		<div class="nav-bar__color-bar">
		</div>
		<nav class="nav-bar__top-menu-bg">
			<div class="row ">
					<ul class="nav-bar__top-menu columns small-12">
						<?php

				            $topMenu = array(
				                'theme_location'  => 'secondary-menu',
				                'menu'            => 'topMenu',
				                'container'       => false,
				                'container_class' => '',
				                'container_id'    => '',
				                'menu_class'      => 'topMenuList',
				                'menu_id'         => 'topMenu',
				                'echo'            => true,
				                'fallback_cb'     => 'wp_page_menu',
				                'before'          => '',
				                'after'           => '',
				                'link_before'     => '',
				                'link_after'      => '',
				                'items_wrap'      => '%3$s',
				                'depth'           => 0,
				                'walker'          => ''
				            );

				            wp_nav_menu($topMenu);

				         ?>
					</ul>
			</div>
				
		</nav>
		
		<nav class="nav-bar__main-menu-container row">
			<div class="nav-bar__org-logo-container columns small-12 medium-4">
				<div class="nav-bar__org-logo">
					<a href="/">
						<?php get_template_part( 'nav_logo' );  // Navigation and Logo (nav_logo.php) ?>
					</a>
				</div>
				
				
			</div>
			<ul class="nav-bar__main-menu columns small-12 medium-8">
				<?php

		            $menu = array(
		                'theme_location'  => 'main-menu',
		                'menu'            => 'mainMenu',
		                'container'       => false,
		                'container_class' => '',
		                'container_id'    => '',
		                'menu_class'      => 'mainMenuList',
		                'menu_id'         => 'nav',
		                'echo'            => true,
		                'fallback_cb'     => 'wp_page_menu',
		                'before'          => '',
		                'after'           => '',
		                'link_before'     => '',
		                'link_after'      => '',
		                'items_wrap'      => '%3$s',
		                'depth'           => 0,
		                'walker'          => ''
		            );

		            wp_nav_menu($menu);

		         ?>
		    </ul>
		</nav>


	</header><!-- #masthead -->

	<div id="content" class="site-content">
