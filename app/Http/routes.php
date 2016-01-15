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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/','PaginacionController@index');
Route::get('nosotros','PaginacionController@nosotros');
Route::get('galeria','PaginacionController@galeria');
Route::get('patrocinadores','PaginacionController@patrocinadores');
Route::get('eventos','PaginacionController@agenda');
Route::get('contacto','PaginacionController@contacto');