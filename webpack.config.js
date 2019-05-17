const Encore = require('@symfony/webpack-encore');
const config = require('./webpack.config.local');

Encore
  .setOutputPath('public/assets/')
  .setPublicPath(config.publicPathToTheme.trim('/') + '/assets')
  .setManifestKeyPrefix('assets/')
  .cleanupOutputBeforeBuild()
  .autoProvidejQuery()
  .autoProvideVariables({
    Popper: ['popper.js', 'default'],
  })
  .enableSassLoader()
  .enablePostCssLoader()
  .enableSourceMaps(!Encore.isProduction())
  .addEntry('js/app', [
    './assets/js/app.js',
  ])
  .addEntry('js/vendors', [
    'jquery',
    'bootstrap',
    'popper.js',
  ])
  .addStyleEntry('css/app', [
    './assets/scss/app.scss',
  ])
  .addStyleEntry('css/vendors', [
    './assets/scss/vendors.scss',
  ])
  .enableSingleRuntimeChunk()
  .copyFiles({
    from: './assets/images',
    to: 'images/[path][name].[ext]',
  })
;

module.exports = Encore.getWebpackConfig();
