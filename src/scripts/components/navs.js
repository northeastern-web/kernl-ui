/**
 * Navs
 */

//
// Tabbed Navigation, nested

$('.nav__link').on('shown.bs.tab', e => {
  $(e.relatedTarget).removeClass('active')
  $('.nav__item--haschildren a').removeClass('child--active')
});

$('.nav__child-link').on('click touch', function(e) {
   $(this).parent().parent().prev('a').addClass('child--active')
});
