// Components
// Accordion


import $ from 'jquery';

let $accordion = $('.accordion [data-swap-target]');

// Initialize Formstone swap()
$accordion.swap();

// Trigger click/touch
$accordion.on('click touch', function() {
  let isVisible = $(this).closest('.accordion').find('.--visible')
  if(isVisible){
    $($(isVisible).attr('data-swap-target')).slideUp(600)
    setTimeout(function() {
      $(isVisible).removeClass('--visible').removeClass('--active')
    }, 600)
  }
});

// Activate event
$accordion.on('activate.swap', function() {
  $(this).addClass('--active')
  $($(this).attr('data-swap-target')).slideDown(600)
});

// Deactivate event
$accordion.on('deactivate.swap', function() {
  $(this).removeClass('--active')
  $($(this).attr('data-swap-target')).slideUp(600)
});
