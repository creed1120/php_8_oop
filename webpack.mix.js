// webpack.mix.js

let mix = require('laravel-mix');

mix.js('src/app.js', 'dist/')
   .sass('src/app.scss', 'dist/');

mix.browserSync({
    proxy:'php_8_oop.test',
    files: [
        '**/*.css',
        '**/*.js',
        '**/*.php',
     ],
 });