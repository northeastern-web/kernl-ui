import $ from 'jquery';

let $acc = $('.accordion [data-swap-target]');

$acc
  .swap()
  .on('deactivate.swap', function() {
    $(this).removeClass('--active')
    $($(this).attr('data-swap-target')).slideUp(600)
  })
  .on('activate.swap', function() {
    $(this).addClass('--active')
    $($(this).attr('data-swap-target')).slideDown(600)
  })
  .on('click touch', function() {
    let isVisible = $(this).closest('.accordion').find('.--visible')
    if(isVisible){
      $($(isVisible).attr('data-swap-target')).slideUp(600)
      setTimeout(function() {
        $(isVisible).removeClass('--visible').removeClass('--active')
      }, 600)
    }
  });
