var ExtractTextPlugin = require('extract-text-webpack-plugin');
var precss = require('precss');
var autoprefixer = require('autoprefixer');
const path = require('path');
var webpack = require('webpack');

module.exports = {
    entry: {
        index: ['./src/javascripts/index.js']
    },
    output: {
        path: path.resolve(__dirname, './public/javascripts'),
        filename: 'index.bundle.js'
    },
    devtool: 'source-map',
    module: {
        rules: [
            {
                test: /\.js$/,
                exclude: [
                    path.resolve(__dirname, "./node_modules/")
                ],
                loader: 'babel-loader',
                options: {
                    presets: ["es2015"]
                } 
            },
            {
                test: /\.scss$/,
                loader: ExtractTextPlugin.extract({ fallback: "style-loader", use: "css-loader!postcss-loader!sass-loader"})
            }
        ]
    },

    plugins: [
        new ExtractTextPlugin({ filename: '../stylesheets/main.css', allChunks: true}),
        new webpack.LoaderOptionsPlugin({
            test: /\.scss$/,
            options: {
                postcss: function() {
                    return [autoprefixer, precss];
                },
            } 
        })

    ]
};