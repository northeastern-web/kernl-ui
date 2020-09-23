const plugin = require('tailwindcss/plugin')
const defaultConfig = require('../defaultConfig')

module.exports = plugin(function ({ addBase, addComponents, theme }) {
  const baseStyles = {
    '[x-cloak]': {
      display: 'none !important',
    },
  }

  addBase(baseStyles)

  // Container
  addComponents({
    '.container': {
      'max-width': '1440px',
      'margin-left': 'auto',
      'margin-right': 'auto',
      'padding-left': '1rem',
      'padding-right': '1rem',
    },
    [`@screen lg`]: {
      '.container': {
        'padding-left': '4rem',
        'padding-right': '4rem',
      },
    },
  })

  addComponents({
    '.loading': {
      position: 'absolute',
      display: 'block',
      animation: 'spin 750ms infinite linear',
      borderRadius: theme('borderRadius.full'),
      borderWidth: '0.125em',
      borderTopColor: 'currentColor',
      borderRightColor: 'currentColor',
      borderLeftColor: 'transparent',
      borderBottomColor: 'transparent',
      height: '1em',
      width: '1em',
      left: 'calc(50% - (1em / 2))',
      top: 'calc(50% - (1em / 2))',
    },
  })
}, defaultConfig)
