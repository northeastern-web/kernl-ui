const defaultTheme = require('tailwindcss/defaultTheme')

const spacing = {
  px: '1px',
  0: '0',
  0.5: '0.125rem',
  1: '0.25rem',
  1.5: '0.375rem',
  2: '0.5rem',
  2.5: '0.625rem',
  3: '0.75rem',
  3.5: '0.875rem',
  4: '1rem',
  5: '1.25rem',
  6: '1.5rem',
  7: '1.75rem',
  8: '2rem',
  9: '2.25rem',
  10: '2.5rem',
  11: '2.75rem',
  12: '3rem',
  13: '3.25rem',
  14: '3.5rem',
  15: '3.75rem',
  16: '4rem',
  20: '5rem',
  24: '6rem',
  28: '7rem',
  32: '8rem',
  36: '9rem',
  40: '10rem',
  44: '11rem',
  48: '12rem',
  52: '13rem',
  56: '14rem',
  60: '15rem',
  64: '16rem',
  72: '18rem',
  80: '20rem',
  96: '24rem',
  '1/2': '50%',
  '1/3': '33.333333%',
  '2/3': '66.666667%',
  '1/4': '25%',
  '2/4': '50%',
  '3/4': '75%',
  '1/5': '20%',
  '2/5': '40%',
  '3/5': '60%',
  '4/5': '80%',
  '1/6': '16.666667%',
  '2/6': '33.333333%',
  '3/6': '50%',
  '4/6': '66.666667%',
  '5/6': '83.333333%',
  '1/12': '8.333333%',
  '2/12': '16.666667%',
  '3/12': '25%',
  '4/12': '33.333333%',
  '5/12': '41.666667%',
  '6/12': '50%',
  '7/12': '58.333333%',
  '8/12': '66.666667%',
  '9/12': '75%',
  '10/12': '83.333333%',
  '11/12': '91.666667%',
  full: '100%',
}

module.exports = {
  future: {
    removeDeprecatedGapUtilities: true,
  },
  target: [
    'ie11',
    {
      objectFit: 'relaxed',
      objectPosition: 'relaxed',
      position: 'relaxed',
    },
  ],
  purge: {
    content: [
      'vendor/northeastern-web/**/*.blade.php',
      'vendor/northeastern-web/**/*.md',
      'vendor/northeastern-web/**/*.html',
    ],
  },
  theme: {
    borderRadius: {
      none: '0',
      sm: '0.125rem',
      default: '0.25rem',
      md: '0.375rem',
      lg: '0.5rem',
      full: '9999px',
    },
    borderWidth: {
      0: '0px',
      default: '1px',
      2: '2px',
      3: '3px',
      4: '4px',
      6: '6px',
      8: '8px',
    },
    boxShadow: {
      outline: defaultTheme.boxShadow.outline,
      default: '0 0 4px rgba(0, 0, 0, 0.2)',
      none: '0 0 0 rgba(0, 0, 0, 0)',
      sm: '0 0 1px rgba(0, 0, 0, 0.5)',
      lg: '0 0 6px rgba(0, 0, 0, 0.2)',
      xl: '0 3px 20px rgba(0, 0, 0, 0.1)',
      inset: 'inset 0 0 1px rgba(0, 0, 0, 0.5)',
      'inset-lg': 'inset 0 0 1px rgba(0, 0, 0, 0.5), 0 0 6px rgba(0, 0, 0, 0.2)',
      'inset-xl': 'inset 0 0 1px rgba(0, 0, 0, 0.5), 0 3px 20px rgba(0, 0, 0, 0.1)',
    },
    colors: {
      transparent: 'transparent',
      white: '#ffffff',
      'white-semi-9': 'rgba(255, 255, 255, 0.9)',
      'white-semi-8': 'rgba(255, 255, 255, 0.8)',
      'white-semi-7': 'rgba(255, 255, 255, 0.7)',
      'white-semi-6': 'rgba(255, 255, 255, 0.6)',
      'white-semi-5': 'rgba(255, 255, 255, 0.5)',
      'white-semi-4': 'rgba(255, 255, 255, 0.4)',
      'white-semi-3': 'rgba(255, 255, 255, 0.3)',
      'white-semi-2': 'rgba(255, 255, 255, 0.2)',
      'white-semi-1': 'rgba(255, 255, 255, 0.1)',
      black: '#000',
      'black-semi-9': 'rgba(0, 0, 0, 0.9)',
      'black-semi-8': 'rgba(0, 0, 0, 0.8)',
      'black-semi-7': 'rgba(0, 0, 0, 0.7)',
      'black-semi-6': 'rgba(0, 0, 0, 0.6)',
      'black-semi-5': 'rgba(0, 0, 0, 0.5)',
      'black-semi-4': 'rgba(0, 0, 0, 0.4)',
      'black-semi-3': 'rgba(0, 0, 0, 0.3)',
      'black-semi-2': 'rgba(0, 0, 0, 0.2)',
      'black-semi-1': 'rgba(0, 0, 0, 0.1)',
      gray: {
        100: '#f7f7f7',
        200: '#ebebeb',
        300: '#d0d0d0',
        400: '#b8b8b8',
        500: '#9e9e9e',
        600: '#666666',
        700: '#525252',
        800: '#333333',
        900: '#1f1f1f',
      },
      'gray-warm': {
        100: '#f4f2f0',
        200: '#e9e6e2',
        300: '#dfdad4',
        400: '#cfc7bf',
        500: '#c2bab3',
        600: '#b3aca8',
        700: '#a19994',
        800: '#63544b',
        900: '#3f3731',
      },
      'gray-cool': {
        100: '#f3f4f7',
        200: '#e9edf1',
        300: '#d5dde6',
        400: '#bcc5d2',
        500: '#99a3b0',
        600: '#8d95a0',
        700: '#7e848b',
        800: '#686d73',
        900: '#50565e',
      },
      red: {
        100: '#fff5f5',
        200: '#fed7d7',
        300: '#feb2b2',
        400: '#fc8181',
        500: '#f56565',
        600: '#e21d2f',
        700: '#d41b2c',
        800: '#c61929',
        900: '#873138',
      },
      orange: {
        100: '#fff4f0',
        200: '#fed8c8',
        300: '#fcb99c',
        400: '#fd9568',
        500: '#ff854f',
        600: '#e66833',
        700: '#c05621',
        800: '#9c4221',
        900: '#7b341e',
      },
      yellow: {
        100: '#fdf6e7',
        200: '#fee9bf',
        300: '#fbd893',
        400: '#fcc85f',
        500: '#ffbf3d',
        600: '#e7a41d',
        700: '#b7841f',
        800: '#976c16',
        900: '#745310',
      },
      green: {
        100: '#f9fce9',
        200: '#e5f396',
        300: '#d0e656',
        400: '#badb00',
        500: '#acca07',
        600: '#99b305',
        700: '#869e00',
        800: '#546727',
        900: '#394a12',
      },
      teal: {
        100: '#e6fffa',
        200: '#b2f5ea',
        300: '#7beadc',
        400: '#00cfb5',
        500: '#3cbbaa',
        600: '#319789',
        700: '#2c7b70',
        800: '#286159',
        900: '#23524c',
      },
      aqua: {
        100: '#ebfcff',
        200: '#beeff8',
        300: '#90e5f4',
        400: '#71dcef',
        500: '#52cfe5',
        600: '#2bb2ca',
        700: '#2097ac',
        800: '#1c7382',
        900: '#155460',
      },
      blue: {
        100: '#ebf8ff',
        200: '#bee3f8',
        300: '#90cdf4',
        400: '#63b3ed',
        500: '#4299e1',
        600: '#3182ce',
        700: '#006eb5',
        800: '#22547c',
        900: '#2b435a',
      },
      purple: {
        100: '#fcf5ff',
        200: '#f1d8fd',
        300: '#dbbcfa',
        400: '#cd82f2',
        500: '#b26dd5',
        600: '#904eb1',
        700: '#824091',
        800: '#743582',
        900: '#4a2353',
      },
      tan: {
        100: '#f6f2e9',
        200: '#eee7d8',
        300: '#e7ddc5',
        400: '#e5d4ab',
        500: '#dec891',
        600: '#c3ac74',
        700: '#9a8451',
        800: '#685936',
        900: '#574c33',
      },
      gold: {
        500: '#a4804a',
      },
      silver: {
        500: '#8a8d8f',
      },
    },
    fontFamily: {
      sans: ['Lato', ...defaultTheme.fontFamily.sans],
      serif: [...defaultTheme.fontFamily.serif],
      mono: ['Consolas', ...defaultTheme.fontFamily.mono],
      tech: ['Barlow', 'Lato', ...defaultTheme.fontFamily.sans],
    },
    fontSize: {
      xs: '0.75rem',
      sm: '0.875rem',
      base: '1rem',
      lg: '1.25rem',
      xl: '1.375rem',
      '2xl': '1.875rem',
      '3xl': '2.25rem',
      '4xl': '2.625rem',
      '5xl': '3.00rem',
      '6xl': '3.75rem',
      '7xl': '4.50rem',
      '8xl': '5.50rem',
      '9xl': '6.50rem',
    },
    fontWeight: {
      light: '300',
      normal: '400',
      semibold: '600',
      bold: '700',
      black: '900',
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
    maxHeight: {
      0: '0',
      ...defaultTheme.maxHeight,
    },
    opacity: {
      0: 0,
      '025': 0.025,
      '05': 0.05,
      10: 0.1,
      20: 0.2,
      30: 0.3,
      40: 0.4,
      50: 0.5,
      60: 0.6,
      70: 0.7,
      80: 0.8,
      90: 0.9,
      100: 1,
    },
    rotate: {
      45: '45deg',
      90: '90deg',
      135: '135deg',
      180: '180deg',
      225: '225deg',
      270: '270deg',
      315: '315deg',
    },
    screens: {
      sm: '640px',
      md: '768px',
      lg: '1024px',
      xl: '1280px',
      '2xl': '1440px',
    },
    spacing: {
      ...spacing,
      128: '32rem',
    },
    zIndex: {
      auto: 'auto',
      behind: -1,
      0: '0',
      10: '10',
      20: '20',
      30: '30',
      40: '40',
      50: '50',
      max: 1000,
    },
    aspectRatios: ['21x9', '16x9', '4x3', '4x5', '3x2', '8x5', '5x8', '1x1'],
    gradients: (theme) => ({
      directions: ['90deg', '135deg'],
      colors: {
        'red-orange': [theme('colors.red.700'), theme('colors.orange.500')],
        'orange-tan': [theme('colors.orange.500'), theme('colors.tan.400')],
        'tan-red': [theme('colors.tan.400'), theme('colors.red.700')],
        'red-yellow': [theme('colors.red.700'), theme('colors.yellow.500')],
        'yellow-orange': [theme('colors.yellow.500'), theme('colors.orange.500')],
        'green-yellow': [theme('colors.green.500'), theme('colors.yellow.500')],
        'blue-teal': [theme('colors.blue.700'), theme('colors.teal.400')],
        'aqua-blue-dark': [theme('colors.aqua.500'), theme('colors.blue.900')],
        'blue-dark-teal': [theme('colors.blue.900'), theme('colors.teal.400')],
        'teal-green': [theme('colors.teal.400'), theme('colors.green.500')],
        'blue-green': [theme('colors.blue.700'), theme('colors.green.500')],
        'blue-gray-cool': [theme('colors.blue.700'), theme('colors.gray-cool.500')],
        'blue-dark-gray-warm': [theme('colors.blue.900'), theme('colors.gray-warm.700')],
        'blue-gray-warm': [theme('colors.blue.700'), theme('colors.gray-warm.700')],
        'gray-cool-blue-dark': [theme('colors.gray-cool.500'), theme('colors.blue.900')],
        'gold-tan': [theme('colors.gold.500'), theme('colors.tan.400')],
        'red-blue': [theme('colors.red.700'), theme('colors.blue.700')],
        'blue-orange': [theme('colors.blue.700'), theme('colors.orange.500')],
        'aqua-yellow': [theme('colors.aqua.500'), theme('colors.yellow.500')],
        'yellow-blue': [theme('colors.yellow.500'), theme('colors.blue.700')],
      },
    }),
    transformOrigin: {
      center: 'center',
      top: 'top',
      'top-right': 'top right',
      right: 'right',
      'bottom-right': 'bottom right',
      bottom: 'bottom',
      'bottom-left': 'bottom left',
      left: 'left',
      'top-left': 'top left',
    },
    scale: {
      0: '0',
      50: '.5',
      75: '.75',
      90: '.9',
      95: '.95',
      100: '1',
      105: '1.05',
      110: '1.1',
      125: '1.25',
      150: '1.5',
    },
    rotate: {
      '-180': '-180deg',
      '-90': '-90deg',
      '-45': '-45deg',
      0: '0',
      45: '45deg',
      90: '90deg',
      180: '180deg',
    },
    translate: (theme, { negative }) => ({
      ...theme('spacing'),
      ...negative(theme('spacing')),
      '-full': '-100%',
      '-1/2': '-50%',
      '1/2': '50%',
      full: '100%',
    }),
    skew: {
      '-12': '-12deg',
      '-6': '-6deg',
      '-3': '-3deg',
      0: '0',
      3: '3deg',
      6: '6deg',
      12: '12deg',
    },
    transitionProperty: {
      none: 'none',
      all: 'all',
      default: 'background-color, border-color, color, fill, stroke, opacity, box-shadow, transform',
      colors: 'background-color, border-color, color, fill, stroke',
      opacity: 'opacity',
      shadow: 'box-shadow',
      transform: 'transform',
    },
    transitionTimingFunction: {
      linear: 'linear',
      in: 'cubic-bezier(0.4, 0, 1, 1)',
      out: 'cubic-bezier(0, 0, 0.2, 1)',
      'in-out': 'cubic-bezier(0.4, 0, 0.2, 1)',
    },
    transitionDuration: {
      75: '75ms',
      100: '100ms',
      150: '150ms',
      200: '200ms',
      300: '300ms',
      500: '500ms',
      700: '700ms',
      1000: '1000ms',
    },
    customForms: (theme) => ({
      default: {
        'input, textarea, multiselect, select, checkbox': {
          borderRadius: 0,
        },
        'input, textarea, multiselect, select': {
          color: theme('colors.gray.600'),
          borderColor: theme('colors.gray.600'),
          display: 'block',
          lineHeight: theme('lineHeight.tight'),
          width: '100%',
          '&::placeholder': {
            color: theme('colors.gray.400'),
          },
          '&:disabled': {
            backgroundColor: theme('colors.gray.200'),
            opacity: theme('opacity.75'),
            cursor: theme('cursor.not-allowed'),
          },
        },
        'checkbox, radio': {
          color: theme('colors.gray.500'),
          borderColor: theme('colors.gray.600'),
          '&:disabled': {
            backgroundColor: theme('colors.gray.200'),
            opacity: theme('opacity.75'),
            cursor: theme('cursor.not-allowed'),
          },
        },
      },
    }),
  },
  variants: {
    accessibility: ['responsive', 'focus'],
    alignContent: ['responsive'],
    alignItems: ['responsive'],
    alignSelf: ['responsive'],
    appearance: [],
    backgroundAttachment: ['responsive'],
    backgroundColor: ['responsive', 'hover', 'focus', 'disabled'],
    backgroundPosition: ['responsive'],
    backgroundRepeat: [],
    backgroundSize: ['responsive'],
    borderCollapse: ['responsive'],
    borderColor: ['responsive', 'hover', 'focus'],
    borderRadius: ['responsive'],
    borderStyle: ['responsive'],
    borderWidth: ['responsive'],
    boxShadow: ['responsive', 'hover', 'focus'],
    boxSizing: [],
    clear: ['responsive'],
    cursor: ['disabled'],
    display: ['responsive'],
    fill: [],
    flex: ['responsive'],
    flexDirection: ['responsive'],
    flexGrow: ['responsive'],
    flexShrink: ['responsive'],
    flexWrap: ['responsive'],
    float: ['responsive'],
    fontFamily: [],
    fontSize: ['responsive'],
    fontSmoothing: [],
    fontStyle: [],
    fontWeight: ['responsive', 'hover', 'focus'],
    gap: ['responsive'],
    gridAutoFlow: ['responsive'],
    gridColumn: ['responsive'],
    gridColumnEnd: ['responsive'],
    gridColumnStart: ['responsive'],
    gridRow: ['responsive'],
    gridRowEnd: ['responsive'],
    gridRowStart: ['responsive'],
    gridTemplateColumns: ['responsive'],
    gridTemplateRows: ['responsive'],
    height: ['responsive'],
    inset: ['responsive'],
    justifyContent: ['responsive'],
    letterSpacing: [],
    lineHeight: ['responsive'],
    listStylePosition: [],
    listStyleType: [],
    margin: ['responsive'],
    maxHeight: ['responsive'],
    maxWidth: ['responsive'],
    minHeight: ['responsive'],
    minWidth: ['responsive'],
    objectFit: ['responsive'],
    objectPosition: ['responsive'],
    opacity: ['responsive', 'hover', 'focus', 'disabled'],
    order: ['responsive'],
    outline: ['responsive', 'focus'],
    overflow: ['responsive'],
    padding: ['responsive'],
    placeholderColor: ['focus'],
    pointerEvents: [],
    position: ['responsive'],
    resize: [],
    rotate: ['responsive', 'hover', 'focus'],
    scale: ['hover', 'focus'],
    skew: ['responsive', 'hover', 'focus'],
    stroke: [],
    strokeWidth: [],
    tableLayout: ['responsive'],
    textAlign: ['responsive'],
    textColor: ['responsive', 'hover', 'focus'],
    textDecoration: ['hover', 'focus'],
    textTransform: [],
    transform: ['responsive'],
    transformOrigin: ['responsive'],
    transitionDuration: ['responsive'],
    transitionProperty: ['responsive'],
    transitionTimingFunction: ['responsive'],
    translate: ['responsive', 'hover', 'focus'],
    userSelect: [],
    verticalAlign: [],
    visibility: [],
    whitespace: [],
    width: ['responsive'],
    wordBreak: [],
    zIndex: ['responsive'],
  },
  corePlugins: {
    container: false,
  },
  plugins: [],
}
