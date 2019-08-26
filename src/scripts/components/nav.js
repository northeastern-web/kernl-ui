// Components
// Nav


import $ from 'jquery'

// --
// Toggle interior nav

const $toggle = $('[data-toggle="nav"][data-swap-target]')

// Initialize Formstone swap()
$toggle.swap()

// Activate and deactivate event
$toggle.on('activate.swap deactivate.swap', function () {
  $(this).toggleClass('-active')
  $($(this).attr('data-swap-target')).slideToggle(600)
})


// --
// Tabs

const $tab = $('[data-toggle="tab"]')
$tab.swap({ collapse: false })

// Activate and deactivate event
$tab.on('activate.swap', function () {
  $(this).attr('aria-selected', true)
  $($(this).attr('href')).attr('aria-hidden', false)
})

// Deactivate event
$tab.on('deactivate.swap', function () {
  $(this).attr('aria-selected', false)
  $($(this).attr('href')).attr('aria-hidden', true)
})
