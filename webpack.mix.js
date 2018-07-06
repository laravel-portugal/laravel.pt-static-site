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

let mix = require('laravel-mix');

const tailwindcss = require('tailwindcss');


mix.sass('resources/assets/sass/app.scss', 'public/css/bootstrap.css')
    .postCss(__dirname + '/resources/assets/css/tailwind.css', 'public/css/tailwind.css',
        [
            tailwindcss( __dirname + '/tailwind.js'),
        ]
    ).options({
        processCssUrls: false,
        sourceMap: 'inline'
    })


mix
    .js('resources/assets/js/index.js', 'public/js')
    .js('resources/assets/js/community-links/index.js', 'public/js/community-links')


if (!mix.config.inProduction){
    //mix.sourceMaps()
}

mix.version()

