module.exports = function ({ addComponents, theme }) {
  const commonStyles = {
    display: 'inline-flex',
    alignItems: 'center',
    justifyContent: 'center',
    padding: theme('spacing.3') + ' ' + theme('spacing.6'),
    textAlign: 'center',
    whiteSpace: 'nowrap',
    borderWidth: '1px',
    borderColor: 'transparent',
    transitionProperty: theme('transitions.colors'),
    transitionDuration: theme('transitionDuration.100'),
    '&:focus': {
      outline: 'none',
      '--ring-inset': 'var(--tailwind-empty,/*!*/ /*!*/)',
      '--ring-offset-width': '2px',
      '--ring-offset-color': '#fff',
      '--ring-color': theme('colors.blue.500'),
      '--ring-offset-shadow': 'var(--ring-inset) 0 0 0 var(--ring-offset-width) var(--ring-offset-color)',
      '--ring-shadow': 'var(--ring-inset) 0 0 0 calc(3px + var(--ring-offset-width)) var(--ring-color)',
      boxShadow: 'var(--ring-offset-shadow), var(--ring-shadow), var(--box-shadow, 0 0 #0000)',
    },
    '&:disabled': {
      cursor: 'not-allowed',
      opacity: '0.75',
      pointerEvents: 'none',
    },
    '&[disabled]': {
      cursor: 'not-allowed',
      opacity: '0.75',
      pointerEvents: 'none',
    },
  }

  const components = {
    '.btn': {
      fontSize: theme('fontSize.sm'),
      lineHeight: theme('lineHeight.5'),
      ...commonStyles,
    },
    '.btn-sm': {
      fontSize: theme('fontSize.xs'),
      lineHeight: theme('lineHeight.4'),
      ...commonStyles,
    },
    '.btn-lg': {
      fontSize: theme('fontSize.base'),
      lineHeight: theme('lineHeight.6'),
      ...commonStyles,
    },
    '.btn-xl': {
      fontSize: theme('fontSize.lg'),
      lineHeight: theme('lineHeight.8'),
      ...commonStyles,
    },
  }

  addComponents(components)
}
