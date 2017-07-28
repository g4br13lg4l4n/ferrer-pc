const path = require('path')
const cleanWebpackPlugin = require('clean-webpack-plugin')
const browserSyncPlugin = require('browser-sync-webpack-plugin')
const extractTextPlugin = require('extract-text-webpack-plugin')

module.exports = {
  entry : './resources/assets/js/app.js',
  output : {
    filename : 'bundle.js',
    path : path.resolve(__dirname, './public/js/bundle.js')
  },

  module : {
    rules : [
      {
        test: /\.php$/, use : 'php-loader'
      },

      {
        test : /\.css/, use : extractTextPlugin.extract({
          use : 'css-loader'
        })
      },

      {
        test : /\.js/, exclude : /(node_modules)/, use : [{
          loader : 'babel-loader',
          options : {
            presets : ['react', 'es2015', 'stage-0']
          }
        }]
      }

    ]
  },

  plugins : [
    new browserSyncPlugin({
      host: 'localhost',
      port : '8000',
      server : { baseDir : ['public']},
      open : false,
    }),

    new extractTextPlugin('styles.css'),

    new cleanWebpackPlugin(['./public/js/dist'])
  ]
}