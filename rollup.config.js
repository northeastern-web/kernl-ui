import babel from 'rollup-plugin-babel'
import filesize from 'rollup-plugin-filesize'
import resolve from 'rollup-plugin-node-resolve'
import commonjs from '@rollup/plugin-commonjs'
import multi from '@rollup/plugin-multi-entry'
import json from '@rollup/plugin-json'
import replace from '@rollup/plugin-replace'
import pkg from './package.json'
// import nodePolyfills from 'rollup-plugin-node-polyfills'
import { terser } from 'rollup-plugin-terser'

export default {
  input: ['src/js/index.js'],
  output: {
    file: 'dist/js/main.js',
    format: 'umd',
  },
  plugins: [
    multi(),
    commonjs(),
    json(),
    // nodePolyfills(),
    replace({
      // 'observable-membrane' uses process.env. We don't have that...
      'process.env.NODE_ENV': "'production'",
      // inject Alpine.js package version number
      'process.env.PKG_VERSION': `"${pkg.version}"`,
    }),
    resolve({
      preferBuiltins: false,
      browser: true,
    }),
    filesize(),
    babel({
      babelrc: false,
      exclude: 'node_modules/**',
      minified: true,
      presets: [
        [
          '@babel/preset-env',
          {
            targets: {
              browsers: '> 0.5%, ie >= 11',
              esmodules: false,
            },
            modules: false,
            spec: true,
            useBuiltIns: 'usage',
            forceAllTransforms: true,
            corejs: {
              version: 3,
              proposals: false,
            },
          },
        ],
      ],
    }),
    terser(),
  ],
}
