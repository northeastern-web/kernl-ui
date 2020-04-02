const flatMap = require('lodash/flatMap');

module.exports = function({ addUtilities, theme, variants, e }) {
    addUtilities(
        {
            '.transform-none': {
                transform: 'none',
            },
        },
        ['responsive']
    );

    const transformOrigins = flatMap(
        theme('transformOrigin'),
        (transformOrigin, className) => {
            return {
                [`.origin-${e(className)}`]: {
                    transformOrigin,
                },
            };
        }
    );

    addUtilities(
        transformOrigins,
        variants('transformOrigin', ['responsive', 'hover', 'focus'])
    );

    const rotates = flatMap(theme('rotate'), (rotate, className) => {
        let prefix = className.substring(0, 1);

        if (prefix == '-') {
            className = className.substring(1, className.length);
        } else {
            prefix = '';
        }

        return {
            [`.${prefix}rotate-${e(className)}`]: {
                transform: `rotate(${rotate})`,
            },
        };
    });

    addUtilities(rotates, variants('rotate', ['responsive', 'hover', 'focus']));

    const scales = flatMap(theme('scale'), (scale, className) => {
        return {
            [`.scale-${e(className)}`]: {
                transform: `scale(${scale})`,
            },
        };
    });

    addUtilities(scales, variants('scale', ['responsive', 'hover', 'focus']));

    const skews = flatMap(theme('skew'), (skew, className) => {
        let prefix = className.substring(0, 1);

        if (prefix == '-') {
            className = className.substring(1, className.length);
        } else {
            prefix = '';
        }

        return {
            [`.${prefix}skew-x-${e(className)}`]: {
                transform: `skewX(${skew})`,
            },
            [`.${prefix}skew-y-${e(className)}`]: {
                transform: `skewY(${skew})`,
            },
        };
    });

    addUtilities(skews, variants('skew', ['responsive', 'hover', 'focus']));

    const translates = flatMap(theme('translate'), (translate, className) => {
        let prefix = className.substring(0, 1);

        if (prefix == '-') {
            className = className.substring(1, className.length);
        } else {
            prefix = '';
        }

        return {
            [`.${prefix}translate-x-${e(className)}`]: {
                transform: `translateX(${translate})`,
            },
            [`.${prefix}translate-y-${e(className)}`]: {
                transform: `translateY(${translate})`,
            },
        };
    });

    addUtilities(
        translates,
        variants('translate', ['responsive', 'hover', 'focus'])
    );
};
