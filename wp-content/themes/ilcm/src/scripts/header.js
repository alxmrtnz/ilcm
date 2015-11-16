/*jshint strict: true */

var Backbone = require('backbone');

var ILCM = ILCM || {};

module.exports = Backbone.View.extend({
	el: 'header.nav-bar',

	events: {
		'mouseover .menu-item > a': 'showSubMenuItem'
	},

	showSubMenuItem(e) {
		console.log('Hello');
	}
});
