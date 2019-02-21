const path = require('path');
const webpack = require('webpack');
const UglifyJsPlugin = require('uglifyjs-webpack-plugin');

module.exports = {
  context: path.resolve(__dirname, '../scripts'),
  entry: {
    app: './app.js',
  },
  optimization: {
    minimizer: [
      new UglifyJsPlugin({
        test: /\.js(\?.*)?$/i,
      }),
    ],
  },
  output: {
    path: path.resolve(__dirname, '../../dist'),
    filename: '[name].bundle.js',
  }
};
