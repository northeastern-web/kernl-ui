const mix = require('laravel-mix')
const tailwind = require('tailwindcss')

mix.postCss('./src/cdn.css', 'dist/css/kernl-ui.css', [tailwind('./cdn.config.js')])
