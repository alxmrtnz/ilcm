/*jshint strict: true */

var Backbone = require('backbone');

module.exports = Backbone.View.extend({
	el: 'header.nav-bar',

	events: {
		'mouseover .nav-bar__main-menu-container': 'hideSubMenu',
		'mouseover .nav-bar__sub-menu': 'showSubMenu',
		'mouseover .nav-bar__main-menu .menu-item > a': 'showSubMenuItem',
		'mouseleave .nav-bar__sub-menu': 'hideSubMenu'
	},

	showSubMenu(e) {
		e.stopImmediatePropagation();
		$(e.target).addClass('is-shown');
	},

	showSubMenuItem(e) {
		e.stopImmediatePropagation();
		var link = $(e.target).attr('href').match(/([\w-]+)\/$/)[1];
		var $submenus = $('.nav-bar__sub-menu');
		$submenus.removeClass('is-shown');
		for (var i = 0; i < $submenus.length; i++) {
			if ($($submenus[i]).attr('data-name') === link) {
				$($submenus[i]).addClass('is-shown');
			}
		};
	},

	hideSubMenu(e) {
		var $submenus = $('.nav-bar__sub-menu');
		$submenus.removeClass('is-shown');
	}
});
