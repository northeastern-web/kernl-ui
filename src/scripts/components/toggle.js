// Components
// Toggle
// changes the appopriate aria attibutes for toggle effect


import $ from 'jquery'

const $toggle = $('[data-toggle]')
$toggle.swap({ collapse: false })

// Activate and deactivate event
$toggle.on('activate.swap', function () {
  $(this).attr('aria-selected', true)
  $($(this).attr('href')).attr('aria-hidden', false)
})

// Deactivate event
$toggle.on('deactivate.swap', function () {
  $(this).attr('aria-selected', false)
  $($(this).attr('href')).attr('aria-hidden', true)
})
