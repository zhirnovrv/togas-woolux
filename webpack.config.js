
const config = {
    entry: {
        common: "./www/src/js/common.js",
        smooth_scroll: "./www/src/js/smooth_scroll.js",
        modal: "./www/src/js/modal.js",
        modal_loader: "./www/src/js/modal_loader.js",
        index: "./www/src/js/index.js",
        camel: "./www/src/js/camel.js",
        kashmir: "./www/src/js/kashmir.js",
        merinos: "./www/src/js/merinos.js"
    },
    output: {
        filename: "[name].bundle.js"
    },
   /* optimization: {
        splitChunks: {
            cacheGroups: {
                commons: {
                    test: /[\\/]node_modules[\\/]/,
                    name: 'vendors',
                    chunks: 'all'
                }
            }
        }
    },*/
    module: {
        rules: [
            {
                test: /\.(js|jsx)$/,
                exclude: /node_modules/,
                use: ['babel-loader']
            }
        ]
    },
    /*plugins: [
        new UglifyJSPlugin({
            sourceMap: true
        })
    ],*/
    //mode: 'production',
    //mode: 'development',
    mode: 'production',
    optimization: {
        chunkIds: 'named',
        minimize: true,
        splitChunks: {
            chunks: 'all',
            maxInitialRequests: Infinity,
            minSize: 0,
            cacheGroups: {
                vendor: {
                    test: /[\\/]node_modules[\\/]/,
                    name(module) {
                        // get the name. E.g. node_modules/packageName/not/this/part.js
                        // or node_modules/packageName
                        const packageName = module.context.match(/[\\/]node_modules[\\/](.*?)([\\/]|$)/)[1];
                        // npm package names are URL-safe, but some servers don't like @ symbols
                        return `npm.${packageName.replace('@', '')}`;
                    },
                },
                loc: {
                    test: /[\\/]packages[\\/]/,
                    name(module) {
                        // get the name. E.g. node_modules/packageName/not/this/part.js
                        // or node_modules/packageName
                        const packageName = module.context.match(/[\\/]packages[\\/](.*?)([\\/]|$)/);
                        return `local.${packageName[1].replace('@', '')}`;
                    },
                },
            },
        },
    },
    /*optimization: {
        //runtimeChunk: 'single',
        splitChunks: {
            chunks: 'all',
            maxInitialRequests: Infinity,
            minSize: 0,
            cacheGroups: {
                jquery: {
                    test: /[\\/]jquery[\\/]/,
                    name: 'jquery',
                },
                slick: {
                    test: /slick.js/,
                    name: 'slick',
                }
            },
        },
    },*/
    //devServer: {
    //    //contentBase: './dist',
    //    hot: true,
    //    proxy: {
    //        '*': {
    //            target: "http://test.hificlub.ru/?DEV=Y",
    //            secure: false,
    //            changeOrigin: true,
    //        },
    //    }
    //},
};

module.exports = config;
