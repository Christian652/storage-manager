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

mix.

sass('resources/views/scss/style.scss','public/admin/css/bootstrap.css')
.scripts('node_modules/bootstrap/dist/js/bootstrap.js','public/admin/js/bootstrap.js')
.scripts('node_modules/jquery/dist/jquery.js','public/admin/js/jquery.js')
.scripts('resources/views/admin/js/sidebar.js', 'public/admin/js/sidebar.js')
.styles('resources/views/admin/css/style.css','public/admin/css/style.css');
