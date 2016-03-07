<div class="nav-bar__sub-menu sub-menu--work" data-name="our-work">
	<div class="row">
		<div class="medium-3 medium-offset-1 large-3 large-offset-0 columns">
			<div class="sub-menu__featured-img-left">
				<img src="http://www.lorempixel.com/200/150" alt="" class="img-bordered-small">
			</div>
		</div>
		<div class="medium-12 large-9 columns">
			Our Work

			<ul class="sub-nav__ul">
				<?php

	            $menu = array(
	                'theme_location'  => '',
	                'menu'            => 'Our Work',
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
</div> <!-- end .sub-menu- -work -->