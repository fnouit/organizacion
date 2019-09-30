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

Route::get('/', function () {
    return view('index');
});

Route::get('/comite', 'ComiteController@index'); 
Route::get ('/region', 'RegionController@index')->name('region');
Route::get ('/region/{slug}/edit', 'RegionController@edit')->name('region.edit');
Route::put('/region/{slug}/edit', 'RegionController@update')->name('region.update');    

#Delegaciones
Route::get('/delegacion','DelegacionController@index')->name('delegacion');
Route::get('/delegacion/nueva','DelegacionController@create')->name('delegacion.create');
Route::post('/delegacion/nueva','DelegacionController@store')->name('delegacion.store');
Route::get('/delegacion/{slug}/','DelegacionController@show')->name('delegacion.show');  