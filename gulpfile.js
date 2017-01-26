const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

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

elixir(mix => {
    mix.sass('app.scss')
       .webpack('app.js')
       .webpack('consultaCorreios.js')
       .webpack('funcoes.js');
    mix.copy('bower_components/font-awesome/fonts','public/fonts')
       .copy('bower_components/font-awesome/css/font-awesome.min.css', 'public/css')
       .copy('bower_components/jquery/dist/jquery.min.js','public/js')
       .copy('bower_components/jquery.maskedinput/dist/jquery.maskedinput.min.js','public/js')
       .copy('bower_components/bootstrap-validator/dist/validator.min.js','public/js');
});
