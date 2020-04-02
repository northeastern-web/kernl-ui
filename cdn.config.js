const defaultConfig = require('./defaultConfig')

module.exports = {
  ...defaultConfig,
  plugins: [require('./plugins/base.js')],
}
