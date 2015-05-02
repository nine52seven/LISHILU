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
    //目标目录
    'assets_path': 'public/assets/',
    'asset_js_path': 'public/assets/js',
    'asset_css_path': 'public/assets/css',
    // 'asset_font_path': 'public/assets/font',
    //源目录
    'jquery': './node_modules/jquery/',
    'bootstrap': './node_modules/bootstrap/',
    'materializecss': './node_modules/materialize-css',
}

var dir_name = {
    'bootstrap': 'bootstrap',
    'materializecss': 'materialize-css',
}

elixir(function(mix) {
    //copy jquery
    mix.copy(paths.jquery + 'dist/jquery.min.js', paths.asset_js_path);

    //copy meterializecss
    mix.copy(paths.materializecss, paths.assets_path + dir_name.materializecss);

    //copy bootstrap
    mix.copy(paths.bootstrap + 'dist/', paths.assets_path + dir_name.bootstrap);

    //less
    mix.less('style.less', paths.asset_css_path);

    mix.scripts(['main.js'], paths.asset_js_path);

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
