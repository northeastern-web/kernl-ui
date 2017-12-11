$('.accordion .__title').each(function() {
  const toggle = $(this).attr('data-toggle');
  const parent = $(this).attr('data-parent');
  const target = $(this).attr('data-target');
  console.log(`getAccordion ( ${toggle}, ${parent}, ${target} )`)
});

import './bootstrap/index'
import './components/mastheads.js'
import './components/navs.js'
import './components/sharing.js'

import Feather from 'feather-icons'

Feather.replace()
