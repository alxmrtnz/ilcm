<div class="nav-bar__sub-menu sub-menu--events" data-name="events">
	<div class="row">
		<div class="small-12 small-offset-1 large-3 large-offset-0 columns">
			<div class="sub-menu__featured-img-left">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/menu-thumb-events.jpg" alt="Events" class="img-bordered-small">
			</div>
		</div>
		<div class="medium-12 large-9 columns">
			Events
			<ul class="sub-nav__ul ul--events">
				<?php

	            $menu = array(
	                'theme_location'  => '',
	                'menu'            => 'Events',
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

		</div>
	</div>
</div> <!-- end .sub-menu- -events -->