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
		'click .nav-bar__mobile-open': 'toggleMobileMenu',
		'click .nav-bar__main-menu-open-sub-menu': 'toggleMobileSubMenu'
	},

	initialize: function(options) {
		this.options = options || {};
		this.ui = {
			body: $('body'),
			subMenus: $('.nav-bar__sub-menu'),
			menuItems: $('.menu-item'),
			menuLinks: $('.nav-bar__main-menu > li'),
			openArrow: $('.nav-bar__main-menu-open-sub-menu')
		}
		this.render();
	},

	render: function() {
		var that = this;

		this.ui.menuLinks.each(function(index, el) {
			var link = $(el).children('a').attr('href');
			if (link !== undefined) {

				var splitLink = link.split('/')
				var dataLink = splitLink[splitLink.length - 2]
				
				var selectedSubMenu = that.ui.subMenus.filter(function(index, el) {
					return $(el).attr('data-name') === dataLink;
				});

				if (selectedSubMenu.length !== 0) {
					selectedSubMenu = selectedSubMenu[0];
					var listItem = '<li class="mobile-sub-menu hide-for-large-up">' + $(selectedSubMenu).html() + '</li>';
					$(el).after(listItem);
				} else {
					$(el).children('button').remove();
				}
			}
		});

		return this;
	},

	showSubMenu: function(e) {
		e.stopImmediatePropagation();
		$(e.target).addClass('is-shown');
		clearTimeout(this.options.hoverTimeout);
	},

	showSubMenuItem: function(e) {
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

	hideSubMenu: function(e) {
		this.ui.subMenus.removeClass('is-shown');
		this.ui.menuItems.removeClass('is-current-link');
	},

	hideHoverState: function(e) {
		var that = this;
		this.options.hoverTimeout = setTimeout(function () {
			that.ui.menuItems.removeClass('is-current-link');
		}, 200);
	},

	toggleMobileMenu: function(e) {
		if (this.ui.body.hasClass('is-mobile-menu-open')) {
			this.hideMobileMenu();
		} else {
			this.showMobileMenu();
		}
	},

	showMobileMenu: function(e) {
		this.ui.body.addClass('is-mobile-menu-open');
	},

	hideMobileMenu: function(e) {
		this.ui.body.removeClass('is-mobile-menu-open');
	},

	toggleMobileSubMenu: function(e) {
		var clickedItem = $(e.target).parent();
		clickedItem.siblings().removeClass('is-mobile-sub-menu-open');
		clickedItem.toggleClass('is-mobile-sub-menu-open');
	}
});
