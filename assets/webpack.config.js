const path = require('path');
const MiniCssExtractPlugin = require("mini-css-extract-plugin");

module.exports = {
    entry: [
        './src/js/main-dev.js',
        './src/css/main-dev.scss',
    ],
    output: {
        filename: path.join('js', 'main.js'),
        path: path.resolve(__dirname, 'dist'),
    },
    module: {
        rules: [{
            test: /\.scss$/,
            use: [
                MiniCssExtractPlugin.loader,
                "css-loader", 
                "sass-loader",
            ]
        },
        {
            test: /\.(woff(2)?|ttf|eot|svg)(\?v=\d+\.\d+\.\d+)?$/,
            use: [{
                loader: 'file-loader',
                options: {
                  name: '[name].[ext]',
                  outputPath: path.join('css', 'fonts'),
                  publicPath: 'fonts'
                }
            }]
        }]
    },
    plugins: [
        new MiniCssExtractPlugin({
            filename: path.join('css', 'main.css'),
        })
    ]
};