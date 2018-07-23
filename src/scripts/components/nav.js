// Components
// Nav


import $ from 'jquery';

// --
// Toggle interior nav

let $toggle = $('[data-toggle="nav"][data-swap-target]')

// Initialize Formstone swap()
$toggle.swap();

// Activate and deactivate event
$toggle.on('activate.swap deactivate.swap', function() {
  $(this).toggleClass('--active')
  $($(this).attr('data-swap-target')).slideToggle(600)
});


// --
// Tabs

let $tab = $('[data-toggle="tab"]')

// Initialize Formstone swap()
$tab.swap({ collapse: false });

// Activate and deactivate event
$tab.on('activate.swap', function() {
  $(this).addClass('--active')
  $( $(this).attr('href') ).addClass('--active')
});

// Deactivate event
$tab.on('deactivate.swap', function() {
  $(this).removeClass('--active')
  $($(this).attr('href')).removeClass('--active')
});
