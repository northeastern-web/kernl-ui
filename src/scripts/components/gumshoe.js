// Components
// Checkpoint

import Gumshoe from 'gumshoejs';

if (document && document.querySelectorAll('.gumshoe a').length > 0) {
  new Gumshoe('.gumshoe a', {
    navClass: '--active',
    contentClass: '--active',
    offset: '50',
  });
}
