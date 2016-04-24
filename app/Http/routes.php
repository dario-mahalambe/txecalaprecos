<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('produto', 'ProdutoController@index');
Route::get('/detalhes', 'DetalhesController@index');
Route::get('/resultadosPesquisa', 'PesquisaResultadoController@index');
Route::get('pesquisa', 'ProdutoController@pesquisa');



Route::group (['prefix'=> 'admin', 'where'=>['id'=>'[0-9]+']], function(){
	Route::get('admin', ['as'=>'admin.admin','uses'=>'AdminController@index']);
	Route::get('criar',[ 'as'=>'admin.criar','uses'=>'AdminController@create']);
	Route::post('store',[ 'as'=>'admin.store','uses'=>'AdminController@store']);
	Route::get('{id}/destroy',['as'=>'admin.destroy','uses'=>'AdminController@destroy']);
	Route::get('{id}/editar',['as'=>'admin.editar','uses'=>'AdminController@edit']);
	Route::put('{id}/update',['as'=>'admin.update','uses'=>'AdminController@update']);

	Route::post('upload',['as'=>'admin.upload','uses'=>'AdminController@upload']);
});








Route::get('/', 'WelcomeController@index');
Route::get('home', 'HomeController@index');
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
