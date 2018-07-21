const CompressionPlugin = require("compression-webpack-plugin");

module.exports = function() {
    return {
        plugins: [
            /*new webpack.optimize.UglifyJsPlugin({
                sourceMap: true,
                compress: {
                    warnings: false, // Suppress uglification warnings
                    screw_ie8: true
                }
            }),*/
            new CompressionPlugin({
                test: /\.js$|\.css$/,
                threshold: 10240,
                minRatio: 0
            }),
        ]
    };
};

