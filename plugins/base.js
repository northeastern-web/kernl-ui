const plugin = require('tailwindcss/plugin')

module.exports = plugin(function ({ addBase, addComponents, theme }) {
  const baseStyles = {
    '[x-cloak], [v-cloak]': {
      display: 'none !important',
    },
    'body .buorg': {
      borderBottom: 'none',
      color: theme('colors.black'),
      backgroundColor: theme('colors.yellow.400'),
      fontSize: '1rem',
      fontFamily: theme('fontFamily.sans'),
      boxShadow: theme('boxShadow.default'),
      animation: 'none',
    },
    'body .buorg-pad': {
      padding: '0.75rem 1rem',
      lineHeight: '1.5rem',
    },
    'body #buorgig, body #buorgul, body #buorgpermanent': {
      fontSize: '1rem',
      color: theme('colors.black'),
      background: 'none',
      boxShadow: 'none',
      padding: 0,
      borderRadius: 0,
      textDecoration: 'underline',
      transition: 'color 0.2s',
    },
    'body #buorgig:hover, body #buorgul:hover, body #buorgpermanent:hover': {
      color: theme('colors.yellow.900'),
    },
    'body .buorg-fadeout': {
      transition: 'visibility 0s 0.5s, opacity 0.5s ease-out 0.5s',
    },
    'body .buorg-icon': {
      width: '16px',
      height: '16px',
      top: '-0.05em',
      'margin-right': '0.5rem',
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
})
