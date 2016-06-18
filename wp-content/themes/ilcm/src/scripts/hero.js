"use strict";
/*jshint strict: true */

var slick = require('slick-carousel');

module.exports = function () {
    console.log('flexslider loaded');
    $('.flexslider').flexslider({
        animation: "slide"
      });


    $('.single-item').slick();
    // $('.slider').slick({
    //         prevArrow: $('.arrow--prev'),
    //         nextArrow: $('.arrow--next'),
    //         swipeToSlide: false,
    //         touchMove: false,
    //         swipe: false,
    //         infinite: true,
    //         fade: true,
    //         dots: true,
    //         arrows: true,
    //         appendDots: $('.slide__nav-content'),
    //         autoplay: true,
    //         autoplaySpeed: 5000

    //     })
    //     .on('beforeChange', function(event, slick, currentSlide, nextSlide) {
    //         // then let's do this before changing slides
    //         $('.slider[data-slick-index="' + currentSlide + '"]').fadeTo('100', 0);
    //     });
};