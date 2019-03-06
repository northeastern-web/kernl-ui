// Components
// Accordion


import $ from 'jquery'

let speed = 500
let $accordion = $('.accordion [data-swap-target].__title')

// Initialize Formstone swap()
$accordion.swap()

// Activate event
$accordion.on('activate.swap', function() {
  let $this = $(this)
  let id = $(this).attr('data-swap-target')

  $this.addClass('--active')
  $(id).slideDown(speed)
});

// Deactivate event
$accordion.on('deactivate.swap', function() {
  let $this = $(this)
  let id = $(this).attr('data-swap-target')

  $this.removeClass('--active')
  $(id).slideUp(speed)
});

// Activate event
$accordion.on('activate.swap', function() {
  $(this).addClass('--active')
  $($(this).attr('data-swap-target')).slideDown(speed)
});
