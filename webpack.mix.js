const mix = require('laravel-mix');

require('laravel-mix-tailwind');

mix
	.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/style.scss', 'public/css')
	.tailwind();