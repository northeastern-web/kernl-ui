let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('docs/main.js', 'dist/scripts')
   .sass('docs/main.scss', 'dist/styles')
   .copy('src/fonts/*', 'dist/fonts');

mix.browserSync({
  proxy: 'https://kernl-ui.dev/',
  host: 'kernl-ui.dev',
  open: 'external',
  https: true
});
