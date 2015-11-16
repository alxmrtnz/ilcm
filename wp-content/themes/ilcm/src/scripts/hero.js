"use strict";
/*jshint strict: true */

var slick = require('slick-carousel');

module.exports = function () {

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
        .on('beforeChange', function(event, slick, currentSlide, nextSlide) {
            // then let's do this before changing slides
            $('.slider[data-slick-index="' + currentSlide + '"]').fadeTo('100', 0);
        });
};