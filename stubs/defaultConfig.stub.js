const defaultTheme = require('tailwindcss/defaultTheme')
const colors = require('../colors.js')

module.exports = {
  presets: [require('tailwindcss/defaultConfig')],
  purge: {
    content: [
      'vendor/northeastern-web/**/*.php',
      'vendor/northeastern-web/**/*.md',
      'vendor/northeastern-web/**/*.html',
    ],
    options: {
      safelist: {
        deep: [/body/, /body\s/],
      },
    },
  },
  theme: {
    extend: {
      borderWidth: {
        3: '3px',
      },
      screens: {
        '2xl': '1440px',
      },
      spacing: {
        128: '32rem',
        144: '36rem',
        160: '40rem',
        192: '48rem',
      },
      zIndex: {
        behind: -1,
        max: 1000,
      },
    },
    boxShadow: {
      DEFAULT: '0 0 4px rgba(0, 0, 0, 0.2)',
      none: '0 0 0 rgba(0, 0, 0, 0)',
      sm: '0 0 1px rgba(0, 0, 0, 0.5)',
      lg: '0 0 6px rgba(0, 0, 0, 0.2)',
      xl: '0 3px 20px rgba(0, 0, 0, 0.1)',
      inset: 'inset 0 0 1px rgba(0, 0, 0, 0.5)',
      'inset-lg': 'inset 0 0 1px rgba(0, 0, 0, 0.5), 0 0 6px rgba(0, 0, 0, 0.2)',
      'inset-xl': 'inset 0 0 1px rgba(0, 0, 0, 0.5), 0 3px 20px rgba(0, 0, 0, 0.1)',
    },
    colors: colors,
    fontFamily: {
      sans: ['Lato', ...defaultTheme.fontFamily.sans],
      serif: [...defaultTheme.fontFamily.serif],
      mono: ['Consolas', ...defaultTheme.fontFamily.mono],
    },
    maxHeight: {
      0: '0',
      ...defaultTheme.maxHeight,
    },
    minHeight: {
      0: '0',
      '10vh': '10vh',
      '20vh': '20vh',
      '30vh': '30vh',
      '40vh': '40vh',
      '50vh': '50vh',
      '60vh': '60vh',
      '70vh': '70vh',
      '80vh': '80vh',
      '90vh': '90vh',
      '100vh': '100vh',
      screen: '100vh',
      full: '100%',
    },
  },
  corePlugins: {
    container: false,
  },
  plugins: [require('../plugins/base.js')],
}
