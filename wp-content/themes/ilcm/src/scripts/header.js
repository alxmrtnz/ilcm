/*jshint strict: true */

var Backbone = require('backbone');

module.exports = Backbone.View.extend({
	el: 'header.nav-bar',

	events: {
		'mouseover .nav-bar': 'hideSubMenu',
		'mouseover .nav-bar__sub-menu': 'showSubMenu',
		'mouseover .nav-bar__main-menu .menu-item > a': 'showSubMenuItem',
		'mouseleave .nav-bar__sub-menu': 'hideSubMenu',
		'mouseleave .nav-bar__main-menu > li': 'hideHoverState',
		'mouseover .nav-bar__top-menu': 'hideSubMenu',
		'click .nav-bar__mobile-open': 'toggleMobileMenu'
	},

	initialize(options) {
		this.options = options || {};
		this.ui = {
			body: $('body'),
			subMenus: $('.nav-bar__sub-menu'),
			menuItems: $('.menu-item'),
			menuLinks: $('.nav-bar__main-menu > li')
		}
		this.render();
	},

	render() {
		var subMenuItems = [];

		this.ui.subMenus.each(function(index, el) {
			subMenuItems.push($(el).attr('data-name'));
		});

		this.ui.menuLinks.each(function(index, el) {
			var link = $(el).children('a').attr('href').match(/([\w-]+)\/$/)[1];
		});

		console.log(subMenuItems);

		return this;
	},

	showSubMenu(e) {
		e.stopImmediatePropagation();
		$(e.target).addClass('is-shown');
		clearTimeout(this.options.hoverTimeout);
	},

	showSubMenuItem(e) {
		e.stopImmediatePropagation();
		var link = $(e.target).attr('href').match(/([\w-]+)\/$/)[1];
		this.ui.subMenus.removeClass('is-shown');
		this.ui.menuItems.removeClass('is-current-link');
		clearTimeout(this.options.hoverTimeout);
		
		for (var i = 0; i < this.ui.subMenus.length; i++) {
			if ($(this.ui.subMenus[i]).attr('data-name') === link) {
				$(this.ui.subMenus[i]).addClass('is-shown');
				$(e.target).parent().addClass('is-current-link');
			}
		};
	},

	hideSubMenu(e) {
		this.ui.subMenus.removeClass('is-shown');
		this.ui.menuItems.removeClass('is-current-link');
	},

	hideHoverState(e) {
		var that = this;
		this.options.hoverTimeout = setTimeout(function () {
			that.ui.menuItems.removeClass('is-current-link');
		}, 200);
	},

	toggleMobileMenu(e) {
		if (this.ui.body.hasClass('is-mobile-menu-open')) {
			this.hideMobileMenu();
		} else {
			this.showMobileMenu();
		}
	},

	showMobileMenu(e) {
		this.ui.body.addClass('is-mobile-menu-open');
	},

	hideMobileMenu(e) {
		this.ui.body.removeClass('is-mobile-menu-open');
	}
});
