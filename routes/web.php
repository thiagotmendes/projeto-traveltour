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
  Route::get('lista', 'agenciaController@listaAgencia');
  Route::get('cadastrar', 'agenciaController@cadastrarAgencia');
  Route::post('adicionar', 'agenciaController@insertBanco');
});

Route::group(['prefix' => 'servicos'], function(){
  Route::post('add', 'servicosController@cadastraServico');
  Route::get('lista','servicosController@listaServicos');
});
