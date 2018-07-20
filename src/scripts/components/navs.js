//
// Navs
//

import $ from 'jquery';

//
// On-screen nav toggle for small screens
let $navToggle = $('[data-toggle="nav"][data-swap-target]')

$navToggle
  .swap()
  .on('activate.swap deactivate.swap', function() {
    $(this).toggleClass('--active')
    $( $(this).attr('data-swap-target') ).slideToggle(600)
  })


//
// Tabs
let $tab = $('[data-toggle="tab"]')

$tab
  .swap({
    collapse: false
  })
  .on('activate.swap', function() {
    $(this).addClass('--active')
    $( $(this).attr('href') ).addClass('--active')
  })
  .on('deactivate.swap', function() {
    $(this).removeClass('--active')
    $( $(this).attr('href') ).removeClass('--active')
  })
