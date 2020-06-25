const fs = require('fs')
const postcss = require('postcss')
const tailwind = require('tailwindcss')
const CleanCSS = require('clean-css')

console.log('Building kernl(ui) CSS...')

fs.readFile(`./src/css/main.css`, (err, css) => {
  if (err) throw err

  return postcss([tailwind('./cdn.config.js')])
    .process(css, {
      from: `./src/css/main.css`,
      to: `./dist/css/main.css`,
      map: { inline: false },
    })
    .then((result) => {
      fs.writeFileSync(`./dist/css/main.css`, result.css)
      if (result.map) {
        fs.writeFileSync(`./dist/css/main.css.map`, result.map)
      }
      return result
    })
    .then((result) => {
      const minified = new CleanCSS().minify(result.css)
      fs.writeFileSync(`./dist/css/main.css`, minified.styles)

      console.log('kernl(ui) CSS built successfully!')
    })
})
