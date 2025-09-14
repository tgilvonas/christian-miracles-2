const Encore = require('@symfony/webpack-encore');

Encore
    .setOutputPath('public/build/')
    .setPublicPath('/build/')
    .addEntry('app', './assets/app.js')

    .enableVueLoader()

    .enableSingleRuntimeChunk()
    .enableSourceMaps(!Encore.isProduction())
    .enableVersioning(Encore.isProduction())
    .enablePostCssLoader()
;

module.exports = Encore.getWebpackConfig();
