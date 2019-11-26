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

use Carbon\Carbon;

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
Route::put('/delegacion/{slug}/delete','DelegacionController@destroy')->name('delegacion.delete');  
Auth::routes();

#Estructura
Route::get('/estructura','EstructuraController@index')->name('estructura');
Route::get('/estructura/nueva','EstructuraController@create')->name('estructura.create');


Route::get('/home', 'HomeController@index')->name('home');

Route::get('time', function(){
    $actual = new Carbon();
    // $actual->format('UTC -6');
    $actual->format('d/m/Y');
    
    echo $actual;
});