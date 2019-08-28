// Components
// Masthead


import $ from 'jquery'

const $masthead = $(".masthead .nav")
$masthead
  .navigation({
    type: 'overlay',
    gravity: 'left',
    maxWidth: '991px',
    theme: '',
    labels: {
      closed: '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>',
      open: '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>',
    },
  })
  .on("close.navigation", function() {
    // Close all open sublists when Navigation closed
    $('[aria-expanded="true"]').attr('aria-expanded', false)
  })

// Escape key listener
$(document).on('keyup', (e) => {
  if (e.keyCode === 27) {
    $masthead.navigation("close")
  }
})

// --
// Sublist opened

$('[aria-haspopup="true"]', $masthead).click(function() {
  let $this = $(this)
  let $sublist = $this.siblings('.nav_sublist')

  // expand list
  $this.attr('aria-expanded', true)
  $sublist.attr('aria-expanded', true)

  // set focus on back link within sublist
  $('.nav_back > a', $sublist).focus()
})

// --
// Sublist closed

$('.nav_back > a', $masthead).click(function() {
  let $this = $(this)
  let $sublist = $this.parent().closest('.nav_sublist')
  let $sublink = $sublist.siblings('.nav_sublink')

  // close list
  $sublist.attr('aria-expanded', false)
  $sublink.attr('aria-expanded', false)

  // focus set to link clicked to enter sublist
  $sublink.focus()
})
