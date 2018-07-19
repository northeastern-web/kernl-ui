import $ from 'jquery';

let $acc = $('.accordion [data-swap-target]');

$acc
  .swap()
  .on('activate.swap', function() {
    $(this).addClass('--active')
    $($(this).attr('data-swap-target')).slideDown(600)
  })
  .on('deactivate.swap', function() {
    $(this).removeClass('--active')
    $($(this).attr('data-swap-target')).slideUp(600)
  });
