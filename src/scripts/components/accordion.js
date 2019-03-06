// Components
// Accordion


import $ from 'jquery';

let speed = 500;
let $accordion = $('.accordion [data-swap-target]');

// Initialize Formstone swap()
$accordion.swap();

// Trigger click/touch
$accordion.on('click touch', function() {
  let isVisible = $(this).closest('.accordion').find('.--visible')
  if(isVisible){
    $($(isVisible).attr('data-swap-target')).slideUp(speed)
    setTimeout(function() {
      $(isVisible).removeClass('--visible').removeClass('--active')
    }, speed)
  }
});

// Deactivate event
$accordion.on('deactivate.swap', function(e) {
  console.log(e);
  $(this).removeClass('--active')
  $($(this).attr('data-swap-target')).slideUp(speed)
});

// Activate event
$accordion.on('activate.swap', function() {
  $(this).addClass('--active')
  $($(this).attr('data-swap-target')).slideDown(speed)
});
