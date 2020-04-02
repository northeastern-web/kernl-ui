const flatMap = require('lodash/flatMap');

module.exports = function({ addUtilities, theme, variants, e }) {
    const transitionProperties = flatMap(
        theme('transitionProperty'),
        (transitionProperty, className) => {
            if (className == 'default') {
                return {
                    '.transition': {
                        transitionProperty,
                    },
                };
            }

            return {
                [`.transition-${e(className)}`]: {
                    transitionProperty,
                },
            };
        }
    );

    addUtilities(
        transitionProperties,
        variants('transitionProperty', ['hover', 'focus'])
    );

    const transitionDurations = flatMap(
        theme('transitionDuration'),
        (transitionDuration, className) => {
            return {
                [`.duration-${e(className)}`]: {
                    transitionDuration,
                },
            };
        }
    );

    addUtilities(transitionDurations, variants('transitionDuration'));

    const transitionTimingFunctions = flatMap(
        theme('transitionTimingFunction'),
        (transitionTimingFunction, className) => {
            return {
                [`.ease-${e(className)}`]: {
                    transitionTimingFunction,
                },
            };
        }
    );

    addUtilities(
        transitionTimingFunctions,
        variants('transitionTimingFunction')
    );
};
