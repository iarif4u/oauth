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

mix.js(['resources/js/app.js','resources/js/bootstrap.js','resources/js/sb-admin-2.js'], 'public/js')
    .js(['resources/js/flot-data.js','resources/js/morris-data.js'], 'public/js')
   .less('resources/less/sb-admin-2.less', 'public/sb-admin/css')
   .sass('resources/sass/app.scss', 'public/css');
