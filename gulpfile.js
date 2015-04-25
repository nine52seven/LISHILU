var elixir = require('laravel-elixir');
// var gulp = require('gulp'),
    // cssmin = require('gulp-minify-css');
elixir.config.sourcemaps = false;

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

var paths = {
    'jquery': './node_modules/jquery/',
    'materializecss': './node_modules/materialize-css/'
}

elixir(function(mix) {
    //copy
    mix.copy(paths.materializecss + 'font', 'public/font');
    mix.copy(paths.materializecss + 'bin/materialize.css', 'public/css/');
    mix.copy(paths.jquery + 'dist/jquery.min.js', 'public/js/');
    mix.copy(paths.materializecss + 'bin/materialize.js', 'public/js/');

    //less
    mix.less('style.less');

    mix.scripts(['main.js']);

    // css
    // mix.less("app.less");
    // mix.styles([
    //         paths.materializecss + "bin/materialize.css"
    //     ], 'public/css/style.css', '.');

    //js
    // mix.scripts([
    //         paths.jquery + "dist/jquery.js",
    //         paths.materializecss + "bin/materialize.js"
    //     ], 'public/js/main.js', '.');

    //压缩并加版本号
    // mix.version(["public/css/style.css", "public/js/main.js"]);

    //copy font
    // mix.phpUnit();
});
