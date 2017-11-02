//
// Navs
//


// On-screen nav toggle for small screens
$('.nav__toggler').on('click touch', function(e) {
  $('body').toggleClass('nav--open')
});