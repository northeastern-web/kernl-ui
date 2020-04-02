const mix = require('laravel-mix')
const tailwind = require('tailwindcss')

mix.postCss('./src/css/cdn.css', 'dist/css/main.css', [tailwind('./cdn.config.js')]).js('./index.js', 'dist/js/main.js')
