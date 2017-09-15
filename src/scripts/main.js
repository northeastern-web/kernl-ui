import $ from 'jquery'
import Alert from './bootstrap/alert'
import Button from './bootstrap/button'
import Carousel from './bootstrap/carousel'
import Collapse from './bootstrap/collapse'
import Dropdown from './bootstrap/dropdown'
import Modal from './bootstrap/modal'
import Popover from './bootstrap/popover'
import Scrollspy from './bootstrap/scrollspy'
import Tab from './bootstrap/tab'
import Tooltip from './bootstrap/tooltip'
import Util from './bootstrap/util'

/**
 * --------------------------------------------------------------------------
 * Bootstrap (v4.0.0-alpha.6): index.js
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * --------------------------------------------------------------------------
 */

(() => {
  if (typeof jQuery === 'undefined') {
    throw new Error('Bootstrap\'s JavaScript requires jQuery. jQuery must be included before Bootstrap\'s JavaScript.')
  }

  const version = $.fn.jquery.split(' ')[0].split('.')
  const min = 3
  const max = 4
  if (version[0] < min || version[0] >= max) {
    throw new Error('Bootstrap\'s JavaScript requires at least jQuery v3.0.0 but less than v4.0.0')
  }
})(jQuery)

export {
  Util,
  Alert,
  Button,
  Carousel,
  Collapse,
  Dropdown,
  Modal,
  Popover,
  Scrollspy,
  Tab,
  Tooltip
}
