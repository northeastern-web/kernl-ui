// Components
// Masthead


import $ from 'jquery';

$(".masthead .nav").navigation({
  type: 'overlay',
  gravity: 'left',
  maxWidth: '991px',
  theme: ''
});

/* Reveal mobile submenus */
$('.\\+children > a')
.on('click touch', function(e) {
  if ($('body').hasClass('menu-open')) {
    e.preventDefault()
  }

  const $this = $(this)
  const $parent = $this.parent()
  const $submenu = $parent.find('.__submenu')
  const $siblings = $parent.siblings().find('.__submenu')

  // Condition block if menu has been opened
  if ($parent.hasClass('submenu-open')) {
    window.location.href = $this.attr('href')
  } else {
    $parent.siblings().removeClass('submenu-open')
  }

  if ($siblings.is(':visible')) {
    $siblings.hide(350)
  }

  // Add .__submenu--open when clicked
  $parent.addClass('submenu-open')
  $submenu.show(350)
});
