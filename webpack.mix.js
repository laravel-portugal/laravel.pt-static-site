let mix = require('laravel-mix');
require('laravel-mix-purgecss');
require('laravel-mix-tailwind');

mix.version();

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
    .tailwind()
    .purgeCss();
