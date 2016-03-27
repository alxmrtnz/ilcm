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
    		// $('.safe-browsing').removeClass('hide');
    		$('body').prepend('<a href="http://www.google.com"><div class="safe-browsing "> <div class="safe-browsing__modal"> <div class="modal__content"> <h2 class="heading--large heading--centered heading--bold"> Safety Notice! </h2> <p>If your computer is being monitored and you are concerned for your safety, <b>CLICK ANYWHERE ON THIS WINDOW AND EXIT THIS SITE NOW</b>!</p><p><strong>Clear your browser history</strong> and use a different computer that untrusted people cannot access.</p><p>You can also call the Immigrant Law Center of Minnesota at <b>1-800-223-1368</b> to speak to a representative directly.</p><p><b>If you are already at a safe computer, please wait 10 seconds, and you will be automatically be directed to the ILCM web site.</b></p><hr/><h2 class="heading--large heading--centered heading--bold">Aviso de seguridad!</h2><p>Si su ordenador está siendo monitoreado y usted está preocupado por su seguridad, <b>haga clic en cualquier ESTA VENTANA Y SALIR DE ESTE SITIO YA</b> !</p><p><strong>Borrar el historial del navegador y utilice</strong> un equipo diferente que las personas no son de confianza no pueden tener acceso.</p><p>También puede llamar al Centro de Ley de Inmigrantes de Minnesota al <b>1-800-223-1368</b> para hablar directamente con un representante.</p><p><b>Si usted ya está en un equipo seguro, por favor, espere 10 segundos y automáticamente se le dirigirá a la página web ILCM.</b></p><hr/><h2 class="heading--large heading--centered heading--bold">Kev Ruaj Ntseg Ntawv Ceeb Toom!</h2><p>Yog hais tias koj lub computer yog saib xyuas thiab koj muaj kev txhawj xeeb rau koj muaj kev ruaj ntseg, <b>NYEM nyob qhov twg RAU NO THIAB qhov rais Exit NO SITE TAM SIM NO</b> !</p><p>Clear koj tus browser keeb kwm thiab siv ib tug txawv computer tias untrusted neeg tsis muaj peev xwm nkag tau.</p><p>Koj tseem yuav hu rau neeg txawv teb chaws Law Center of Minnesota nyob rau ntawm <b>1-800-223-1368</b> mus hais lus rau ib tug neeg sawv cev ncaj qha.</p><p><b>Yog hais tias koj twb yeej nyob rau hauv ib tug muaj kev ruaj ntseg lub computer, thov tos 10 vib nas this, thiab koj yuav tsis raug raws kev coj kom lub ILCM web site.</b></p><hr/><h2 class="heading--large heading--centered heading--bold">Ogeysiiska Safety!</h2><p>Haddii aad computer la kormeera iyo aad uga walaacsan dib caafimaadkiinna aawadiis, <b>meel kasta oo daaqadan CLICK Farjac goobtan NOW</b> !</p><p>Cad taariikhda Ilkaha lagaa Siibane! Iyo sida loo isticmaalo computer ka duwan ma in dadka ku riixday ma ka heli karaan.</p><p>Waxaad kaloo wici kartaa Law Center Immigrant ee Minnesota at <b>1-800-223-1368</b> si aad ula hadashid wakiilka ah si toos ah.</p><p><b>Haddii aad horay uga at computer ammaan ah, fadlan sug 10 seconds, iyo in laguu si toos ah lagu hagaajin doonaa in web ILCM goobta.</b></p></div></div></div></a>');
    		$('body').addClass('overflow-hidden');
    	}, 5000);
    	
    	setTimeout(function() {
    		$('.safe-browsing').remove();
    		$('body').removeClass('overflow-hidden');
    	}, 15000);
    }

    function popUp() {
    	checkCookie('leaveSiteFlag');
    }

    popUp();
    
    var header = new Header();
})($);