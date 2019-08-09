// Components
// Checkpoint

import Gumshoe from 'gumshoejs'

if (document && document.querySelectorAll('.gumshoe a').length > 0) {
  const gum = new Gumshoe()

  gum('.gumshoe a', {
    navClass: '-active',
    contentClass: '-active',
    offset: '50',
  })
}
