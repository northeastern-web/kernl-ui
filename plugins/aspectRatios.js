const flatMap = require('lodash/flatMap');

module.exports = function({ addUtilities, theme, variants, e }) {
    const utilities = flatMap(theme('aspectRatios'), ratio => {
        const [a, b] = ratio.split('x');
        const percent = b / a;

        return {
            [`.ar-${e(ratio)}`]: {
                width: '100%',
                paddingBottom: `${(percent * 100).toFixed(2)}%`,
            },
        };
    });

    addUtilities(utilities, variants('aspectRatios', ['responsive']));
};
