const plugin = require('tailwindcss/plugin')
const defaultConfig = require('../defaultConfig')

module.exports = plugin(function({ addBase }) {
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
}, defaultConfig)
