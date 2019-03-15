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

Route::get('/','HomeController@index');//Redirection direct au niveau de la page de connexion

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('acte/nouveau','ActeController@create'); //Recuperation de l'url acte/nouveau qui sera transmis a notre controlleur create
Route::post('acte/enregistrer','ActeController@store');//Recuperation de l'url acte/enregistrer qui qui sera retransmis a la fonction store
Route::get('acte/{id}/consulter','ActeController@consulter'); //Recuperation de l'url transmis au controller 
Route::get('acte/{id}/show','ActeController@show');

//Edition
//Route::get('acte/{id}/editer','EditionController@create');
//Route::post('acte/{id}enregistrer','EditionController@store');

Route::get('/acte/edit/{id}',[
'uses'=>'ActeController@edit',
'as'=>'acte.edit']);

 Route::post('/acte/update/{id}',[
'uses'=>'ActeController@update',
'as'=>'acte.update']);

Route::get('/acte/delete/{id}',[
'uses'=>'ActeController@destroy',
'as'=>'acte.delete']);

Route::get('/search','ActeController@search');



//redirection lors de la confirmation du mail
Route::get('/confirm/{id}/{token}','Auth\RegisterController@confirm');
