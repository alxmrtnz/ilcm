// Dependencies
var $ = require('jquery');

// Application Imports
var safe = require('./safe-browsing.js');
var hero = require('./hero.js');
var Header = require('./header.js');



// Here is where we'll launch our functionality.
(function($) {

    hero();

    function setCookie(cname, cvalue, exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays*24*60*60*1000));
        var expires = 'expires='+d.toUTCString();
        document.cookie = cname + '=' + cvalue + '; ' + expires;
    }

    function getCookie(cname) {
        var name = cname + '=';
        var ca = document.cookie.split(';');
        for(var i=0; i<ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0)==' ') c = c.substring(1);
            if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
        }
        return '';
    }

    function checkCookie(cname) {
        var cookie = getCookie(cname);
        if (cookie != 'true') {
            showPopUpWarning();
            setCookie('leaveSiteFlag', 'true', 7);
        } else {

        }
    }


    function showPopUpWarning() {
    	setTimeout(function(){
    		$('.safe-browsing-modal-container').removeClass('hidden');
    		$('body').addClass('overflow-hidden');
    	}, 5000);

    	setTimeout(function() {
    		$('.safe-browsing-modal-container').addClass('hidden');
    		$('body').removeClass('overflow-hidden');
    	}, 15000);
    }

    function popUp() {
    	checkCookie('leaveSiteFlag');
    }

    popUp();

    var header = new Header();
})($);
