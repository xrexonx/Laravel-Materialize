var elixir = require('laravel-elixir'),
    bowerDir = 'vendor/bower_components/',
    materialDir = bowerDir + 'materialize/dist/';

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function (mix) {
    mix.sass('app.scss')
        .copy(bowerDir + 'jquery/dist/jquery.min.js', 'public/js/vendor/jquery.js')
        .copy(materialDir + 'js/materialize.min.js', 'public/js/vendor/materialize.js')
        .copy(materialDir + 'css/materialize.min.css','public/css/materialize.css')
        .stylesIn('public/css')
        .scriptsIn('public/js/vendor');
});
