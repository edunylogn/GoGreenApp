var path = require('path');
var webpack = require('webpack');
var ExtractTextPlugin = require('extract-text-webpack-plugin');
var HtmlWebPackPlugin = require('html-webpack-plugin');

var DEVELOPMENT = process.env.NODE_ENV === 'dev';
var PRODUCTION = process.env.NODE_ENV === 'prod';

var entry = PRODUCTION
        ?   ['./src/js/index.js']
        :   [
                './src/js/index.js',
                'webpack/hot/dev-server',
                'webpack-dev-server/client?http://localhost:8081'
            ];

var plugins = PRODUCTION
    ?   [
            new webpack.optimize.UglifyJsPlugin(),
            new ExtractTextPlugin('styles-[contenthash:10].css'),
            new HtmlWebPackPlugin({
                template: 'index-template.html'
            })
        ]
    :   [
            new webpack.HotModuleReplacementPlugin()
        ];

plugins.push(
    new webpack.DefinePlugin({
        DEVELOPMENT: JSON.stringify(DEVELOPMENT),
        PRODUCTION: JSON.stringify(PRODUCTION)
    })
);

const cssIdentifier = PRODUCTION ? '[hash:base64:10]' : '[path][name]---[local]';

const cssLoader = PRODUCTION
    ?   ExtractTextPlugin.extract({
            loader: 'css-loader?localIdentName=' + cssIdentifier
        })
    :   ['style-loader', 'css-loader?localIdentName=' + cssIdentifier];

const sassLoader = PRODUCTION
    ?   ExtractTextPlugin.extract({
    loader: 'css-loader!sass-loader?localIdentName=' + cssIdentifier
})
    :   ['style-loader', 'css-loader?sourceMap', 'sass-loader?sourceMap?localIdentName=' + cssIdentifier];
module.exports = {
    // externals : {
    //     'jquery': 'jQuery',
    //     'bootstrap': 'Bootstrap'
    // },
    devtool: 'source-map',
    entry: entry,
    plugins: plugins,
    module: {
        loaders: [{
            test: /\.(js|jsx)$/,
            loaders: ['babel-loader'],
            exclude: '/node_modules/'
        },{
            test: /\.(jpe?g|png|gif|svg)$/,
            loaders: ['url-loader?name=images/[hash:12].[ext]'],
            exclude: '/node_modules/'
        },{
        //     test: /\.css$/,
        //     loaders: cssLoader,
        //     exclude: '/node_modules/'
        // },{
            test: /\.(css|scss)$/,
            loaders: sassLoader,
            exclude: '/node_modules/'
        },{
            test: /\.(woff|woff2)(\?v=[0-9]\.[0-9]\.[0-9])?$/,
            loader: ['url-loader?limit=10000&name=fonts/[hash:12].[ext]&minetype=application/font-woff']
        },{
            test: /\.(ttf|eot)(\?v=[0-9]\.[0-9]\.[0-9])?$/,
            loader: ['url-loader?limit=100000&name=fonts/[hash:12].[ext]']
        }
        ]
    },
    output: {
        path: path.join(__dirname, 'dist'),
        publicPath: PRODUCTION? '' : '/dist/',
        filename: PRODUCTION? 'bundle.[hash:12].min.js': 'bundle.js'
    }
};