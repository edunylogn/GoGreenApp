var WebpackDevServer = require('webpack-dev-server');
var webpack = require('webpack');
var config = require('./webpack.config');
var path = require('path');

new WebpackDevServer(webpack(config), {
    publicPath: config.output.publicPath,
    filename: config.output.filename,
    hot: true,
    historyApiFallback: true,
    stats: {
        colors: true
    }
}).listen(8081, 'localhost', function (err, result) {
    if (err) {
        console.log(err);
    }

    console.log('Listening at localhost:8081');
});