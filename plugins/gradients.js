const flatMap = require('lodash/flatMap');

module.exports = function({ addUtilities, theme, variants, e }) {
    const utilities = flatMap(
        theme('gradients.colors'),
        ([start, end], name) => {
            return flatMap(theme('gradients.directions'), direction => {
                return {
                    [`.bg-gradient-${e(name)}-${e(direction)}`]: {
                        backgroundImage: `linear-gradient(${direction}, ${start}, ${end})`,
                    },
                };
            });
        }
    );

    addUtilities(utilities, variants('gradients'));
};
