const defaultConfig = require('./defaultConfig')

module.exports = {
  ...defaultConfig,
  purge: false,
  plugins: [require('./plugins/base.js')],
}
