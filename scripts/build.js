const fs = require('fs')
const postcss = require('postcss')
const tailwind = require('tailwindcss')
const CleanCSS = require('clean-css')

console.log('Building kernl(ui) CSS...')

fs.readFile(`./src/css/index.css`, (err, css) => {
  if (err) throw err

  return postcss([tailwind('./cdn.config.js'), require('autoprefixer')])
    .process(css, {
      from: `./src/css/index.css`,
      to: `./dist/css/index.css`,
      map: { inline: false },
    })
    .then((result) => {
      fs.writeFileSync(`./dist/css/index.css`, result.css)
      if (result.map) {
        fs.writeFileSync(`./dist/css/index.css.map`, String(result.map))
      }
      return result
    })
    .then((result) => {
      const minified = new CleanCSS().minify(result.css)
      fs.writeFileSync(`./dist/css/index.css`, minified.styles)

      console.log('kernl(ui) CSS built successfully!')
    })
})
