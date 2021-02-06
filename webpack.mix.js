// webpack.mix.js

let mix = require('laravel-mix');

mix
.js('src/app_vue_select.js', 'js')
.vue()
.sass('src/app.scss', 'css')
.setPublicPath('dist');