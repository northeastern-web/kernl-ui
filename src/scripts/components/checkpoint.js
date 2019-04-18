// Components
// Checkpoint

import $ from 'jquery';
import Gumshoe from 'gumshoejs';

// Initialize Formstone checkpoint()
$('.cp').checkpoint();

let spy = new Gumshoe('.gs a', {
  navClass: 'bg--black',
  contentClass: '--active',
  offset: '50'
});
