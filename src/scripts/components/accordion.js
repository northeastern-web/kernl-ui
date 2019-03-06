// Components
// Accordion


import $ from 'jquery';

let speed = 500;
let $accordion = $('.accordion [data-swap-target].__title');

// Initialize Formstone swap()
$accordion.swap();

// Trigger click/touch
$accordion.on('click touch', function(e) {
  let isVisible = $(this).closest('.accordion').find('.--visible')
  if(isVisible){
    $($(isVisible).attr('data-swap-target')).slideUp(speed)
    setTimeout(function() {
      $(isVisible).removeClass('--visible').removeClass('--active')
    }, speed)
  }
});

// Deactivate event
$accordion.on('deactivate.swap', function() {
  // console.log('deactivate');
  $(this).removeClass('--active')
  $($(this).attr('data-swap-target')).slideUp(speed)
});

// Activate event
$accordion.on('activate.swap', function() {
  // console.log('activate');
  $(this).addClass('--active')
  $($(this).attr('data-swap-target')).slideDown(speed)
});
