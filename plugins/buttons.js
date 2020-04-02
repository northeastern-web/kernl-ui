module.exports = function({ addComponents, theme }) {
    const commonStyles = {
        display: 'inline-flex',
        alignItems: 'center',
        justifyContent: 'center',
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
    };

    const components = {
        '.btn': {
            padding: theme('spacing.3') + ' ' + theme('spacing.6'),
            fontSize: theme('fontSize.sm'),
            ...commonStyles,
        },
        '.btn-sm': {
            padding: theme('spacing.2') + ' ' + theme('spacing.3'),
            fontSize: theme('fontSize.xs'),
            ...commonStyles,
        },
    };

    addComponents(components);
};
