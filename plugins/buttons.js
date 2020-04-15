module.exports = function({ addComponents, theme }) {
  const commonStyles = {
    display: 'inline-flex',
    alignItems: 'center',
    justifyContent: 'center',
    padding: theme('spacing.3') + ' ' + theme('spacing.6'),
    textAlign: 'center',
    whiteSpace: 'nowrap',
    lineHeight: '1em',
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
      ...commonStyles,
    },
    '.btn-sm': {
      fontSize: theme('fontSize.xs'),
      ...commonStyles,
    },
    '.btn-lg': {
      fontSize: theme('fontSize.default'),
      ...commonStyles,
    },
  }

  addComponents(components)
}
