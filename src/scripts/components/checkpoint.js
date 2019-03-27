// Components
// Checkpoint

import $ from 'jquery';
import Gumshoe from 'gumshoejs';

// Initialize Formstone checkpoint()
$('.checkpoint').checkpoint();

let spy = new Gumshoe('.gs a',{
  navClass: '--active',
  contentClass: '--active',
  offset: '50'
});
