/**
 * Mastheads
 */

/* Reveal mobile navigation */
$('.masthead .__toggler').on('click touch', () => {
  $('body').toggleClass('menu-open')
});

/* Reveal mobile submenus */
$('.\\+children > a')
.on('click touch', function(e) {
  if ($('body').hasClass('menu-open')) {
    e.preventDefault();
  }

  const $this = $(this);
  const $parent = $this.parent();
  const $submenu = $parent.find('.__submenu');
  const $siblings = $parent.siblings().find('.__submenu');

  // Condition block if menu has been opened
  if ($parent.hasClass('submenu-open')) {
    window.location.href = $this.attr('href');
  } else {
    $parent.siblings().removeClass('submenu-open');
  }

  if ($siblings.is(':visible')) {
    $siblings.hide(350);
  }

  // Add .__submenu--open when clicked
  $parent.addClass('submenu-open');
  $submenu.show(350);
});


// animate megamenu reveal: almost there...
$('.\\--megamenu .\\+children').hover(
  function() {
    $(this).not('.open').find('.__submenu').slideDown(400);
    $(this).toggleClass('open');
  },
  function() {
    $(this).find('.__submenu').slideUp(400);
    $(this).toggleClass('open');
  }
);
