/**
 * Mastheads
 */

/* Reveal mobile navigation */
$('.masthead__toggler').on('click touch', () => {
  $('body').toggleClass('menu-open')
});

/* Reveal mobile submenus */
$('.menu-item-has-children > a')
.on('click touch', function(e) {
  if ($('body').hasClass('menu-open')) {
    e.preventDefault();
  }

  const $this = $(this);
  const $parent = $this.parent();
  const $submenu = $parent.find('.sub-menu');
  const $siblings = $parent.siblings().find('.sub-menu');

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
