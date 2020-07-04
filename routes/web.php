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
Route::get('/', 'HomeController@index');

//pertanyaan
Route::resource('pertanyaans', 'PertanyaansController');



//jawaban
Route::get('/jawabans/create/{id}', 'JawabansController@create');
Route::get('/jawabans/{id}', 'JawabansController@index');
Route::get('/jawabans/{jawaban}/edit', 'JawabansController@edit');
Route::post('/jawabans', 'JawabansController@store');
Route::delete('/jawabans/{jawaban}', 'JawabansController@destroy');
Route::patch('/jawabans/{jawaban}', 'JawabansController@update');


