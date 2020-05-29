const plugin = require('tailwindcss/plugin')
const defaultConfig = require('../defaultConfig')

module.exports = plugin(function({ addBase }) {
  const baseStyles = {
    "@import url('https://fonts.googleapis.com/css?family=Lato:300,400,600,700,900')": {},
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
  }

  addBase(baseStyles)
}, defaultConfig)
