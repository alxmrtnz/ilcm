<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package _mbbasetheme
 */
?>

	</div><!-- #content -->

	<footer id="" class="site-footer" role="contentinfo">

		<div class="row">
			<div class="footer__main-menus">
				<div class="footer__sub-menu columns small-12 medium-4 large-2">
					<?php

					    $aboutMenu = array(
					        'theme_location'  => 'immigration-help-menu',
					        'menu'            => 'immigrationHelpMenu',
					        'container'       => false,
					        'container_class' => '',
					        'container_id'    => '',
					        'menu_class'      => 'immigrationHelpMenuList',
					        'menu_id'         => 'immigrationHelpMenu',
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
					    	$menuName = get_menu_name('immigration-help-menu');
					    	echo '<h5 class="footer__menu-title">' . $menuName . '</h5>';

					    echo '<ul class="footer__sub-menu-list">';
					    wp_nav_menu($aboutMenu);
					    echo '</ul>';


					 ?>
				</div>
				<div class="footer__sub-menu columns small-12 medium-4 large-2">
					<?php

					    $resourcesMenu = array(
					        'theme_location'  => 'resources-menu',
					        'menu'            => 'resourcesMenu',
					        'container'       => false,
					        'container_class' => '',
					        'container_id'    => '',
					        'menu_class'      => 'resourcesMenuList',
					        'menu_id'         => 'resourcesMenu',
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
					    	$menuName = get_menu_name('resources-menu');
					    	echo '<h5 class="footer__menu-title">' . $menuName . '</h5>';

					    echo '<ul class="footer__sub-menu-list">';
					    wp_nav_menu($resourcesMenu);
					    echo '</ul>';

					 ?>
				</div>
				<div class="footer__sub-menu columns small-12 medium-4 large-2">
					<?php

					    $ourWorkMenu = array(
					        'theme_location'  => 'our-work-menu',
					        'menu'            => 'ourWorkMenu',
					        'container'       => false,
					        'container_class' => '',
					        'container_id'    => '',
					        'menu_class'      => 'ourWorkMenuList',
					        'menu_id'         => 'ourWorkMenu',
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
					    	$menuName = get_menu_name('our-work-menu');
					    	echo '<h5 class="footer__menu-title">' . $menuName . '</h5>';

					    echo '<ul class="footer__sub-menu-list">';
					    wp_nav_menu($ourWorkMenu);
					    echo '</ul>';

					 ?>
				</div>
				<div class="footer__sub-menu columns small-12 medium-4 large-2">
					<?php

					    $newsMenu = array(
					        'theme_location'  => 'news-menu',
					        'menu'            => 'newsMenu',
					        'container'       => false,
					        'container_class' => '',
					        'container_id'    => '',
					        'menu_class'      => 'newsMenuList',
					        'menu_id'         => 'newsMenu',
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
					    	$menuName = get_menu_name('news-menu');
					    	echo '<h5 class="footer__menu-title">' . $menuName . '</h5>';

					    echo '<ul class="footer__sub-menu-list">';
					    wp_nav_menu($newsMenu);
					    echo '</ul>';

					 ?>
				</div>
				<div class="footer__sub-menu columns small-12 medium-4 large-2">
					<?php

					    $eventsMenu = array(
					        'theme_location'  => 'events-menu',
					        'menu'            => 'eventsMenu',
					        'container'       => false,
					        'container_class' => '',
					        'container_id'    => '',
					        'menu_class'      => 'eventsMenuList',
					        'menu_id'         => 'eventsMenu',
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
					    	$menuName = get_menu_name('events-menu');
					    	echo '<h5 class="footer__menu-title">' . $menuName . '</h5>';

					    echo '<ul class="footer__sub-menu-list">';
					    wp_nav_menu($eventsMenu);
					    echo '</ul>';

					 ?>
				</div>
				<div class="footer__sub-menu columns small-12 medium-4 large-2">
					<?php

					    $aboutMenu = array(
					        'theme_location'  => 'about-menu',
					        'menu'            => 'aboutMenu',
					        'container'       => false,
					        'container_class' => '',
					        'container_id'    => '',
					        'menu_class'      => 'aboutMenuList',
					        'menu_id'         => 'aboutMenu',
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

				    	$menuName = get_menu_name('about-menu');
				    	echo '<h5 class="footer__menu-title">' . $menuName . '</h5>';

					    echo '<ul class="footer__sub-menu-list">';
					    wp_nav_menu($aboutMenu);
					    echo '</ul>';

					 ?>
				</div>
			</div>

		</div> <!-- .row -->

		<div class="row">
			<div class="footer__secondary-menu">
				<div class="secondary-menu__column column--left">
					<img class="footer__minnesota-icon" src="<?php bloginfo('template_url'); ?>/dist/assets/images/minnesota.png" alt="State of Minnesota">
				</div>
				<div class="secondary-menu__column column--center">
					<?php

					    $footerSecondaryMenu = array(
					        'theme_location'  => 'footer-secondary-menu',
					        'menu'            => 'secondaryMenu',
					        'container'       => false,
					        'container_class' => '',
					        'container_id'    => '',
					        'menu_class'      => 'aboutMenuList',
					        'menu_id'         => '',
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


					    echo '<ul class="footer__sub-menu-list secondary-menu__menu-list">';
					    wp_nav_menu($footerSecondaryMenu);
					    echo '</ul>';

					 ?>
				</div>

				<div class="secondary-menu__column column--right">
					<ul class="secondary-menu__social-list">
						<li>
							<a href="https://www.facebook.com/immigrantlawcenterMN/" target="_blank">
								<img src="<?php bloginfo('template_url'); ?>/dist/assets/images/social-icons/icon--facebook.png" alt="ILCM Facebook">
							</a>
						</li>
						<li>
							<a href="https://twitter.com/ILCM_MN" target="_blank">
								<img src="<?php bloginfo('template_url'); ?>/dist/assets/images/social-icons/icon--twitter.png" alt="ILCM Twitter">
							</a>
						</li>
						<li>
							<a href="https://www.youtube.com/user/ImmigrantLawCenterMN" target="_blank">
								<img src="<?php bloginfo('template_url'); ?>/dist/assets/images/social-icons/icon--youtube.png" alt="ILCM Youtube">
							</a>
						</li>
						<li>
							<a href="https://www.youtube.com/user/ImmigrantLawCenterMN" target="_blank">
								<img src="<?php bloginfo('template_url'); ?>/dist/assets/images/social-icons/icon--linkedin.png" alt="ILCM LinkedIn">
							</a>
						</li>
					</ul>
				</div>
			</div>

		</div><!-- .row -->
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/slick/slick.min.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/scripts/main.min.js"></script>

<div class="safe-browsing-modal-container ">
	<div class="safe-browsing ">
   		<a href="<?php the_field('safe_browsing_modal_link', 'option'); ?>" >
			<div class="safe-browsing__modal">
				<div class="modal__content">
					<?php the_field('safe_browsing_modal_content', 'option'); ?>
				</div>
			</div>
		</a>
   </div>
</div>

</body>
</html>
