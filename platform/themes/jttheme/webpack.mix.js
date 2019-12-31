let mix = require('laravel-mix');

const resourcePath = 'platform/themes/jttheme';
const publicPath = 'public/themes/jttheme';

mix
    .sass(resourcePath + '/assets/sass/style.scss', publicPath + '/css')
    .copy(publicPath + '/css/style.css', resourcePath + '/public/css')
    .js(resourcePath + '/assets/js/jttheme.js', publicPath + '/js')
    .copy(publicPath + '/js/jttheme.js', resourcePath + '/public/js');
