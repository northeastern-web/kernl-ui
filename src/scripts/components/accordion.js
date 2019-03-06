// Components
// Accordion


import $ from 'jquery';

let speed = 500;
let $accordion = $('.accordion [data-swap-target].__title');

// Initialize Formstone swap()
$accordion.swap();

// Trigger click/touch
<<<<<<< Updated upstream
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
=======
$accordion.on('click touch', function() {
  // let isVisible = $(this).closest('.accordion').find('.--visible')
  // if(isVisible){
  //   $($(isVisible).attr('data-swap-target')).slideUp(speed)
  //   setTimeout(function() {
  //     $(isVisible).removeClass('--visible').removeClass('--active')
  //   }, speed)
  // }
});

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
  console.log('deactivate', $(this));
  let $this = $(this);
  let id = $(this).attr('data-swap-target');

  $this.removeClass('--active')
  $(id).slideUp(speed);
>>>>>>> Stashed changes
});

// Activate event
$accordion.on('activate.swap', function() {
  // console.log('activate');
  $(this).addClass('--active')
  $($(this).attr('data-swap-target')).slideDown(speed)
});
