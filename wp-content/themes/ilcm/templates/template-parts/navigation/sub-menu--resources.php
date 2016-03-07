<div class="nav-bar__sub-menu sub-menu--resources" data-name="resources">
	<div class="row">
		<div class="small-12 small-offset-1 large-3 large-offset-0 columns">
			<div class="sub-menu__featured-img-left">
				<img src="http://www.lorempixel.com/200/150" alt="" class="img-bordered-small">
			</div>
		</div>
		<div class="medium-12 large-3 columns">
			Immigration Resources

			<ul class="resources-sub-menu__immigration-resources sub-nav__ul">
				<?php

	            $menu = array(
	                'theme_location'  => '',
	                'menu'            => 'Resources',
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
		<div class="medium-12 large-3 columns">
			DACA Deferred Action
			<ul class="resources-sub-menu__immigration-resources sub-nav__ul">
				<?php

	            $menu = array(
	                'theme_location'  => '',
	                'menu'            => 'DACA Deferred Action',
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
		<div class="medium-12 large-3 columns">
			Educational Presentations
			<ul class="resources-sub-menu__immigration-resources sub-nav__ul">
				<?php

	            $menu = array(
	                'theme_location'  => '',
	                'menu'            => 'Educational Presentations Menu',
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
</div> <!-- end .sub-menu- -resources -->