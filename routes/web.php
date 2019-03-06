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

Route::get('/','HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('acte/nouveau','ActeController@create');
Route::post('acte/enregistrer','ActeController@store');
Route::get('acte/{id}/consulter','ActeController@consulter');
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
