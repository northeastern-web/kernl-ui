//
// Navs
//

// On-screen nav toggle for small screens
import $ from 'jquery';

let $navToggle = $('[data-toggle="nav"][data-swap-target]');

$navToggle
  .swap()
  .on('activate.swap deactivate.swap', function() {
    // $(this).toggleClass('--active')
    $($(this).attr('data-swap-target')).slideToggle(600)
  });
