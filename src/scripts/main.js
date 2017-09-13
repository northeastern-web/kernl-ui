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


//
// Tabbed Navigation
$('.nav--tabbed .nav__item a').on('shown.bs.tab', function (e) {
  $(e.relatedTarget).removeClass('active');
});

$('.nav--tabbed .nav__link').on('click touch', function (e) {
  var $this = $(this);
  if ($this.siblings().hasClass('nav__child-list')) {
    $($this.siblings().find('.active').removeClass('active').attr('aria-expanded', false));
    $('.tab-pane').parent().siblings().find('.active').removeClass('active').attr('aria-expanded', false);
  }
});


/**
 * PODShare method
 * @param {string} service   name of service
 * @param {string} url       sharing url
 * @param {number} winWidth  width of window
 * @param {number} winHeight height of window
 */
function PODShare(service, url, winWidth, winHeight) {
    var serviceUrl;
    var extraParam;
    var winTop = (screen.height / 2) - (winHeight / 2);
    var winLeft = (screen.width / 2) - (winWidth / 2);

    switch(service) {
        case 'facebook':
            serviceUrl = 'https://www.facebook.com/sharer.php?u=';
            break;
        case 'twitter':
            serviceUrl = 'https://twitter.com/intent/tweet?url=';
            break;
        case 'linkedin':
            serviceUrl = 'https://www.linkedin.com/shareArticle?mini=true&url=';
            break;
        case 'email':
            serviceUrl = 'mailto:%20?subject=' + document.title + '&body=I%20wanted%20to%20share%20this%20Northeastern%20web%20page%20with%20you:%20%0D%0A%0D%0A';
            break;
        default:
            serviceUrl = '#';
    }

    if(service === 'email') {
      window.location.href = serviceUrl + url;
    } else {
      window.open(serviceUrl + url, 'sharer', 'top=' + winTop + ',left=' + winLeft + ',toolbar=0,status=0,width=' + winWidth + ',height=' + winHeight);
    }
}
