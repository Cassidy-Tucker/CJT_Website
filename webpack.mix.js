let mix = require('laravel-mix');

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

 mix.js('resources/assets/js/bootstrap.js', 'public/js')
 .js('resources/assets/js/featherlight.js', 'public/js')
 .js('resources/assets/js/p5.js', 'public/js')
 .copy('resources/assets/js/background-sketch.js', 'public/js')
 .copy('resources/assets/js/about-sketch.js', 'public/js')
 .copy('resources/assets/js/contact-sketch.js', 'public/js')
 .copy('resources/assets/js/social-sketch.js', 'public/js')
 .copy('resources/assets/js/portfolio-sketch.js', 'public/js')
 .sass('resources/assets/sass/app.scss', 'public/css');
 // .copy('node_modules/bootstrap-sass/assets/fonts/bootstrap/','public/fonts/bootstrap');
