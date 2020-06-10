const plugin = require('tailwindcss/plugin')
const defaultConfig = require('../defaultConfig')

module.exports = plugin(function({ addBase, addComponents, theme }) {
  const baseStyles = {
    "@import url('https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900');": {},
    'html, body': {
      fontSize: '15px',
    },
    '@screen md': {
      'html, body': {
        fontSize: '16px',
      },
    },
    '@screen lg': {
      'html, body': {
        fontSize: '17px',
      },
    },
    '[x-cloak]': {
      display: 'none',
    },
  }

  addBase(baseStyles)

  // Loader component
  addBase({
    '@keyframes spin': {
      from: { transform: 'rotate(0deg)' },
      to: { transform: 'rotate(359deg)' },
    },
  })

  addComponents({
    '.loading': {
      position: 'absolute',
      display: 'block',
      animation: 'spin 500ms infinite linear',
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
