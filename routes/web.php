<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['prefix' => 'agencia'], function(){
  // CRUDI agencia
  Route::get('lista', 'agenciaController@listaAgencia');
  Route::get('cadastrar/{id?}', 'agenciaController@cadastrarAgencia');
  Route::post('adicionar', 'agenciaController@insertBanco');
  Route::get('excluir/{id}', 'agenciaController@ExcluiAgencia');
  // rotas relacioadas ao controle de serviços
  Route::get('adcServicos/{id}', 'agenciaController@adcServicos');
  Route::post('gerenciaServico', 'agenciaController@gerenciaCadastro');
  Route::post('gerenciaLingua', 'agenciaController@gerenciacadastroLingua');
});

Route::group(['prefix' => 'servicos'], function(){
  Route::post('add', 'servicosController@cadastraServico');
  Route::get('lista','servicosController@listaServicos');
  Route::post('addLingua', 'servicosController@adcLingua');
});
