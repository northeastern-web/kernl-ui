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
      boxShadow: theme('boxShadow.outline'),
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
  }

  addComponents(components)
}
