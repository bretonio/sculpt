const path = require('path')
const webpack = require('webpack')

module.exports = {
  devtool: 'source-map',
  entry: path.join(__dirname, 'src/js/index.js'),
  output: {
    path: path.join(__dirname, 'public'),
    filename: 'index.js',
  },
  module: {
    loaders: [
      {
        test: /\.js$/,
        exclude: /node_modules/,
        include: path.join(__dirname, 'src/js/'),
        loaders: ['babel-loader', 'eslint-loader']
      },
    ]
  },
  performance: {
    maxAssetSize: 400000,
    hints: false,
  },
}

