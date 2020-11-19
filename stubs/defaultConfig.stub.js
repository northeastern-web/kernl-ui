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
    fontSize: {
      xs: ['0.75rem', { lineHeight: '1rem' }],
      sm: ['0.875rem', { lineHeight: '1.25rem' }],
      base: ['1rem', { lineHeight: '1.5rem' }],
      lg: ['1.25rem', { lineHeight: '1.75rem' }],
      xl: ['1.375rem', { lineHeight: '2rem' }],
      '2xl': ['1.875rem', { lineHeight: '2.25rem' }],
      '3xl': ['2.25rem', { lineHeight: '2.5rem' }],
      '4xl': ['2.625rem', { lineHeight: '1' }],
      '5xl': ['3.00rem', { lineHeight: '1' }],
      '6xl': ['3.75rem', { lineHeight: '1' }],
      '7xl': ['4.50rem', { lineHeight: '1' }],
      '8xl': ['5.50rem', { lineHeight: '1' }],
      '9xl': ['6.50rem', { lineHeight: '1' }],
      '10xl': ['7.5rem', { lineHeight: '1' }],
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
