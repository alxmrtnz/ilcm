// Dependencies
var $ = require('jquery');

// Application Imports
var hero = require('./hero.js');
var Header = require('./header.js');


// Here is where we'll launch our functionality.
(function($) {
    
    hero();
    
    var header = new Header();
})($);