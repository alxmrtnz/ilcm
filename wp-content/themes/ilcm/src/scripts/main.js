/*jshint strict: true */

(function($) {
	"use strict";
	// all Javascript code goes here
    //test

    $('.slider').slick({
		prevArrow: $('.arrow--prev'),
		nextArrow: $('.arrow--next'),
		swipeToSlide: false,
		touchMove: false,
		swipe: false,
		infinite: true,
        fade: true,
        dots: true,
        arrows: true,
        appendDots: $('.slide__nav-content')

	})
	.on('beforeChange', function(event, slick, currentSlide, nextSlide){
        // then let's do this before changing slides
         $('.slider[data-slick-index="' + currentSlide + '"]').fadeTo('100',0);
    });



	// $('#menu-item-114').on('mouseover', function() {
	//     $('#sub-menu--client-services').show();
	// }).on('mouseout', function() {
	//     $('#sub-menu--client-services').hide();
	// });

         $("#menu-item-114").mouseenter(function(){
             clearTimeout($(this).data('timeoutId'));
             $("#sub-menu--client-services").show();
         }).mouseleave(function(){
             var someElement = $(this),
                 timeoutId = setTimeout(function(){
                     $("#sub-menu--client-services").hide();
                 }, 650);
             //set the timeoutId, allowing us to clear this trigger if the mouse comes back over
             someElement.data('timeoutId', timeoutId); 
         });




})(jQuery);
