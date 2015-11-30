var elixir = require('laravel-elixir');

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

elixir(function(mix) {

    mix.less(['app.less', 'other.less'], 'resources/assets/css');
    //mix.babel(['app.js', 'other.js']);

    mix.styles([
        'libs/bootstrap.min.css',
        'app.css',
        'libs/select2.min.css'
    ]);

    mix.scripts([
        'libs/jquery-2.1.4.min.js',
        'libs/select2-4.0.0.min.js'
    ]);


});
