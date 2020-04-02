module.exports = function({ addUtilities, addComponents, config, variants }) {
    const utilities = {
        '.col-none': {
            columnCount: 'initial',
        },
        '.col-2': {
            columnCount: '2',
        },
        '.col-3': {
            columnCount: '3',
        },
        '.col-4': {
            columnCount: '4',
        },
    };

    addUtilities(utilities, variants('columns', ['responsive']));

    const components = {
        '.row': {
            margin: '-' + config('theme.margin.4'),
            display: 'flex',
            flexWrap: 'wrap',
        },
        '.row + .row': {
            marginTop: config('theme.margin.4'),
        },
        '.column': {
            width: '100%',
            display: 'inline-block',
            padding: config('theme.padding.4'),
        },
    };

    addComponents(components);
};
