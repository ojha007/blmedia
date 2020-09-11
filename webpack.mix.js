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
    .sass('resources/sass/app.scss', 'public/css')
    // .styles([
    //     'resources/assets/css/AdminLTE.css',
    //     'resources/assets/css/all-skins.css',
    // ], 'public/css/bl-backend')
// .copy('resources/assets/images/default.jpg', 'storage/app/public/avatars/default.jpg');
