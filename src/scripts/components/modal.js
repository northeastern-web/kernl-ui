/*
 * Modal show/hide
 */

$('[data-toggle="modal"]').on('click touch', function() {
  let target = $(this).attr('data-target');
  $(target).addClass('--active');
  $('body').addClass('of--hidden');
});

$('[data-dismiss="modal"]').on('click touch', function() {
  $(this).parents('.modal').removeClass('--active');
  $('body').removeClass('of--hidden');
});
