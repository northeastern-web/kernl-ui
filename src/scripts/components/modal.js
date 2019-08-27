// Components
// Modal


import $ from 'jquery'

$('[data-toggle="modal"]').on('click touch', function (e) {
  e.preventDefault()
  const target = $(this).attr('data-target')
  $(target).attr( 'aria-hidden', 'false')
  $('body').addClass('of-hidden')
  if (target === '#modal_search') {
    $('#modalSearch').focus()
  }
})

$('[data-dismiss="modal"]').on('click touch', function () {
  $(this).parents('.modal').attr( 'aria-hidden', 'true')
  $('body').removeClass('of-hidden')
})

$(document).on('keyup', (e) => {
  if (e.keyCode === 27) {
    $('.modal').attr( 'aria-hidden', 'true')
    $('body').removeClass('of-hidden')
  }
})
