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

Route::get('/', function () {
    return view('welcome');
});
