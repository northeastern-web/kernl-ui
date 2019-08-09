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

mix.js('src/scripts/main.js', 'dist/scripts')
  .sass('src/styles/main.scss', 'dist/styles')
  .copy('src/fonts/*', 'dist/fonts')
  .copy('src/images/*', 'dist/images')
  .js('docs/docs.js', 'docs/dist/scripts')
  .sass('docs/docs.scss', 'docs/dist/styles')
  .copy('src/fonts/*', 'docs/dist/fonts')
  .options({
    processCssUrls: false
  });

mix.browserSync({
  proxy: 'https://kernl-ui.test/',
  host: 'kernl-ui.test',
  open: 'external',
  https: true,
  notify: {
    styles: {
      top: 'auto',
      right: '16px',
      left: 'auto',
      bottom: '16px',
      backgroundColor: '#1a1a1a',
      border: '1px solid #eee',
      opacity: '0.75',
      fontSize: '12px',
      padding: '8px 20px 6px',
      borderRadius: '3px'
    }
  }
});
