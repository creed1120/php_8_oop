// webpack.mix.js

let mix = require('laravel-mix');

mix.js('src/js/app.js', 'dist/')
   .sass('src/scss/app.scss', 'dist/');

mix.browserSync({
    proxy:'php_8_oop.test',
    files: [
        '**/*.css',
        '**/*.js',
        '**/*.php',
     ],
 });