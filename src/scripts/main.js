window._ = require('lodash');

try {
  window.$ = window.jQuery = require('jquery');
} catch (e) {}

require('./bootstrap/alert.js');
require('./bootstrap/button.js');
require('./bootstrap/carousel.js');
require('./bootstrap/collapse.js');
require('./bootstrap/dropdown.js');
require('./bootstrap/modal.js');
require('./bootstrap/scrollspy.js');
require('./bootstrap/tab.js');
require('./bootstrap/util.js');

require('feather-icons/dist/feather.min.js');
var feather = require('feather-icons');
feather.replace();

require('./components/accordions.js');
require('./components/mastheads.js');
require('./components/navs.js');
require('./components/sharing.js');
