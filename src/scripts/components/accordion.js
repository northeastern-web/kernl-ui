// Components
// Accordion

import $ from 'jquery';

let speed = 500;
let $accordion = $('.accordion .__title');

// Initialize Formstone swap()
$accordion.swap();

// Activate event
$accordion.on('activate.swap', function() {
  console.log('activate');
  let $this = $(this);
  let id = $(this).attr('data-swap-target');

  $this.addClass('--active');
  $(id).slideDown(speed);
});

// Deactivate event
$accordion.on('deactivate.swap', function() {
  console.log('deactivate');
  let $this = $(this);
  let id = $(this).attr('data-swap-target');

  $this.removeClass('--active')
  $(id).slideUp(speed);
});
