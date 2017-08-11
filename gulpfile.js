var elixir = require('laravel-elixir');

elixir(function (mix) {
    mix.styles([
        '../../../node_modules/bootstrap/dist/css/bootstrap.css',
        '../../../node_modules/bootstrap-material-design/dist/css/bootstrap-material-design.css',
        'bootstrap-material-design-colors.css',
        '../../../node_modules/bootstrap-material-design/dist/css/ripples.css',
        'nsac.css'
    ], 'public/css/nsac.css');

    mix.scripts([
        '../../../node_modules/jquery/dist/jquery.js',
        '../../../node_modules/bootstrap/dist/js/bootstrap.js',
        '../../../node_modules/bootstrap-material-design/dist/js/material.js',
        '../../../node_modules/bootstrap-material-design/dist/js/ripples.js',
        'nsac.js'
    ], 'public/js/nsac.js');

    mix.copy('node_modules/bootstrap/dist/fonts', 'public/fonts');
});