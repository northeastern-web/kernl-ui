// Components
// Loader

import $ from 'jquery';

$('[data-load]').on('click touch', e => {
  e.preventDefault();
  $('.load').addClass('spinner').removeClass('load');
});

// TODO: listen for loaded element and remove loader
