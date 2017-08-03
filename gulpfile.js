var elixir = require('laravel-elixir');

elixir(function (mix) {
    mix.styles([
        '../../../node_modules/bootstrap/dist/css/bootstrap.css',
        'nsac.css'
    ], 'public/css/nsac.css');

    mix.scripts([
        '../../../node_modules/jquery/dist/jquery.js',
        '../../../node_modules/bootstrap/dist/js/bootstrap.js',
        'nsac.js'
    ], 'public/js/nsac.js');

    mix.copy('node_modules/bootstrap/dist/fonts', 'public/fonts');
});