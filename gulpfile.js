const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

var watch = require('gulp-watch'),
    livereload = require('gulp-livereload');

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
    // SISTEMA
    mix.sass('app.scss')
       .sass('mainsite.scss')
       .webpack('app.js')
       .webpack('consultaCorreios.js')
       .webpack('funcoes.js')
       .webpack('funcaosite.js');
    mix.copy('bower_components/font-awesome/fonts','public/fonts')
       .copy('bower_components/bootstrap/fonts','public/fonts')
       .copy('bower_components/font-awesome/css/font-awesome.min.css', 'public/css')
       .copy('bower_components/datatables/media/css/dataTables.bootstrap.min.css', 'public/css')
       .copy('bower_components/jquery/dist/jquery.min.js','public/js')
       .copy('bower_components/jquery.maskedinput/dist/jquery.maskedinput.min.js','public/js')
       .copy('bower_components/datatables/media/js/jquery.dataTables.min.js', 'public/js')
       .copy('bower_components/datatables/media/js/dataTables.bootstrap.min.js', 'public/js')
       .copy('bower_components/datatables/media/images/*', 'public/images')
       .copy('bower_components/tinymce/*', 'public/js/tinymce')
       .copy('bower_components/bootstrap-validator/dist/validator.min.js','public/js');
});
