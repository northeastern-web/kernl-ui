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
      closed: '<svg xmlns="http://www.w3.org/2000/svg" width="29.41" height="16" fill="currentColor"><path d="M29.41 14.05L28 15.47s-4.12-4.45-4.23-4.36a6 6 0 0 1-3.68 1.2 6.15 6.15 0 0 1-4.34-10.49A5.81 5.81 0 0 1 20 0a5.87 5.87 0 0 1 4.34 1.82 5.94 5.94 0 0 1 1.79 4.36A6 6 0 0 1 25 9.78c-.08.14 4.41 4.27 4.41 4.27zM17.08 9.18a4.08 4.08 0 0 0 3 1.23 4.16 4.16 0 0 0 3-1.23 4.06 4.06 0 0 0 1.25-3 4.27 4.27 0 0 0-4.27-4.28 4.06 4.06 0 0 0-3 1.25 4.18 4.18 0 0 0-1.23 3 4.08 4.08 0 0 0 1.25 3.03zM0 7.26h9.72V9.2H0zM0 .45h10.69v1.94H0zM0 14.06h15.55V16H0z"/></svg>',
      open: '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><path d="M18 6L6 18M6 6l12 12"/></svg>',
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
