const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .vue()
    .sass('resources/sass/app.scss', 'public/css');

  // BUG: vue-loader doesn't handle file-loader's default esModule:true setting properly causing
  // <img src="[object module]" /> to be output from vue templates.
  // WORKAROUND: Override mixs and turn off esModule support on images.
  // FIX: When vue-loader fixes their bug AND laravel-mix updates to the fixed version
  // this can be removed
  mix.webpackConfig(webpack => {
      return {
          module: {
              rules: [{
                  test: /(\.(png|jpe?g|gif|webp)$|^((?!font).)*\.svg$)/,
                  use: [{
                      loader: require.resolve('file-loader'),
                      options: {
                          esModule: false
                      }
                  }]
              }]
          }
      };
  });

  mix.browserSync({
    proxy: 'http://127.0.0.1:8000'
  });
