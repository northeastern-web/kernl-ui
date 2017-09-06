window._ = require('lodash');

try {
    window.$ = window.jQuery = require('jquery');
} catch (e) {}

require('./bootstrap/alert.js');
require('./bootstrap/button.js');
require('./bootstrap/carousel.js');
require('./bootstrap/collapse.js');
require('./bootstrap/dropdown.js');
require('./bootstrap/modal.js');
require('./bootstrap/scrollspy.js');
require('./bootstrap/tab.js');
require('./bootstrap/util.js');


require('feather-icons/dist/feather.min.js');
var feather = require('feather-icons');
feather.replace();







/* Reveal mobile navigation */
$('.masthead__toggler').on('click touch', function() {
  $('body').toggleClass('menu-open');
});



// SAVE THIS and FIX IT
/* swap accordion +/- action icon */
/*$('.txt-title').on('click touch', function() {
  if ($(this).hasClass('collapsed')) {
    $(this).find('.toggle-action').attr('data-feather','plus');
  } else {
    $(this).find('.toggle-action').attr('data-feather','minus');
  }
});*/

/* Reveal mobile submenus */
$('.menu-item-has-children > a')
.on('click touch', function(e) {

  if ($('body').hasClass('menu-open')) {
    e.preventDefault();
  }

  var $this = $(this),
  $parent = $this.parent(),
  $submenu = $parent.find('.sub-menu'),
  $siblings = $parent.siblings().find('.sub-menu');

  // Condition block if menu has been opened
  if ($parent.hasClass('sub-menu--open')) {
    window.location.href = $this.attr('href');
  } else {
    $parent.siblings().removeClass('sub-menu--open');
  }

  if ($siblings.is(':visible')) {
    $siblings.hide(350);
  }

  // Add .sub-menu--open when clicked
  $parent.addClass('sub-menu--open');
  $submenu.show(350);
});
