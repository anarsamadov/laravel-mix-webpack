const {mix} = require('laravel-mix');

mix.js(['resources/js/app.js'], 'public/js/bundle.js')
    .sass('resources/sass/app.scss', 'public/css')
    .version()
    .browserSync();