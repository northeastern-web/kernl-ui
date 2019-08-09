// Components
// Modal


import $ from 'jquery'

$('[data-toggle="modal"]').on('click touch', function (e) {
  e.preventDefault()
  const target = $(this).attr('data-target')
  $(target).addClass('-active')
  $('body').addClass('of-hidden')
  if (target === '#modal_search') {
    $('#modalSearch').focus()
  }
})

$('[data-dismiss="modal"]').on('click touch', function () {
  $(this).parents('.modal').removeClass('-active')
  $('body').removeClass('of-hidden')
})

$(document).on('keyup', (e) => {
  if (e.keyCode === 27) {
    $('.modal').removeClass('-active')
    $('body').removeClass('of-hidden')
  }
})
