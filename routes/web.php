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

Route::get('/', 'site_controller@index');
Route::get('estado/{id?}','site_controller@filtraEstado');

Auth::routes();

Route::get('/home', 'HomeController@index');

// agencia
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
  // cadastra link
  Route::post('linksExternos', 'agenciaController@CadastroLinkExterno');
  // VISUALIZAR DADODS DAD agenciaController
  Route::get('dados/{id}/{agencia?}', 'agenciaController@dadosAgencia' );
});

//adc serviços
Route::group(['prefix' => 'servicos'], function(){
  Route::post('add', 'servicosController@cadastraServico');
  Route::get('lista','servicosController@listaServicos');
  Route::post('addLingua', 'servicosController@adcLingua');
});

// institucional
Route::group(['prefix' => 'institucional'], function(){
  Route::get('paginas', 'InstitucionalController@listaPaginas');
  Route::get('cadastrar', 'InstitucionalController@cadastrarPaginas');
  Route::post('inserir', 'InstitucionalController@EfetuaCadastroPagina');
});

// rotas do site
//Route::group();
