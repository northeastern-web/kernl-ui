// Components
// Loader

import $ from 'jquery';

$('[data-load]').on('click touch', e => {
  e.preventDefault();
  $('.load').addClass('loader').removeClass('load');
});

// TODO: listen for loaded element and remove loader
