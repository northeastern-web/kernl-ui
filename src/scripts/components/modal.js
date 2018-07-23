// Components
// Modal


import $ from 'jquery';

$('[data-toggle="modal"]').on('click touch', function() {
  let target = $(this).attr('data-target');
  $(target).addClass('--active');
  $('body').addClass('of--hidden');
});

$('[data-dismiss="modal"]').on('click touch', function() {
  $(this).parents('.modal').removeClass('--active');
  $('body').removeClass('of--hidden');
});

$(document).on('keyup', function(e) {
  if (e.keyCode == 27) {
    $('.modal').removeClass('--active');
    $('body').removeClass('of--hidden');
  }
});
