//
// Navs
//

// Tabbed Navigation, nested
$('.__link').on('click touch', function(e) {
  $('.__child-link').removeClass('active')
  $(this).tab('show')
});

// On-screen nav toggle for small screens
$('.nav__toggler').on('click touch', function(e) {
  $('body').toggleClass('nav--open')
});