<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::group(['prefix','FPR'], function(){
	Route::get('fichaProdRural','FPR\fprController@index');
});*/

Route::get('fichaProdRural', 'HomeController@viewFichaPR');
Route::get('formAddFichaPR', 'HomeController@viewFormFichaPR');
Route::get('{id}/view', 'HomeController@viewDetalhes');
Route::post('addFichaPR','HomeController@addFicha');
Route::post('pesquisando','HomeController@buscaFichaPR');
Route::get('{id}/edit','HomeController@atualizaFichaPR');
Route::post('{id}/updateFPR','HomeController@updateFichaPR');
Route::get('{id}/formAddBlocos','HomeController@viewFormBlocos');
Route::post('{id}/addBlocosPR','HomeController@addBlocosPR');
Route::get('listagemBusca','HomeController@listagemBusca');

//Route::get('fichaPRCadSucesso/{id}', 'HomeController@cadFichaPR');
/*Route::post('cadastroFichaPR', 'HomeController@cadastroFichaPR');*/

Route::get('/', function () {
    return view('welcome');
});
