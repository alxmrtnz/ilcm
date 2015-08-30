/*jshint strict: true */

(function($) {
	"use strict";
	// all Javascript code goes here

})(jQuery);

// Avoid `console` errors in browsers that lack a console.
/*jshint strict: true */

(function() {
    "use strict";
    var method;
    var noop = function noop() {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());

// Place any jQuery/helper plugins in here.

/**
 * navigation.js
 *
 * Handles toggling the navigation menu for small screens.
 */
( function() {
	"use strict";
	var container, button, menu;

	container = document.getElementById( 'site-navigation' );
	if ( ! container ){
		return;
	}
		

	button = container.getElementsByTagName( 'button' )[0];
	if ( 'undefined' === typeof button ) {
		return;
	}
		

	menu = container.getElementsByTagName( 'ul' )[0];

	// Hide menu toggle button if menu is empty and return early.
	if ( 'undefined' === typeof menu ) {
		button.style.display = 'none';
		return;
	}

	if ( -1 === menu.className.indexOf( 'nav-menu' ) ){
		menu.className += ' nav-menu';
	}
		
	button.onclick = function() {
		if ( -1 !== container.className.indexOf( 'toggled' ) ){
			container.className = container.className.replace( ' toggled', '' );
		}
		else {
			container.className += ' toggled';
		}
			
	};
} )();

( function() {
	"use strict";
	var is_webkit = navigator.userAgent.toLowerCase().indexOf( 'webkit' ) > -1,
	    is_opera  = navigator.userAgent.toLowerCase().indexOf( 'opera' )  > -1,
	    is_ie     = navigator.userAgent.toLowerCase().indexOf( 'msie' )   > -1;

	if ( ( is_webkit || is_opera || is_ie ) && document.getElementById && window.addEventListener ) {
		window.addEventListener( 'hashchange', function() {
			var element = document.getElementById( location.hash.substring( 1 ) );

			if ( element ) {
				if ( ! /^(?:a|select|input|button|textarea)$/i.test( element.tagName ) ){
					element.tabIndex = -1;
				}
					

				element.focus();
			}
		}, false );
	}
})();
