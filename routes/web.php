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

/* Route::get('/', function () {
    return view('login');
}); */

Route::get('/', 'Auth\LoginController@showLoginForm')->name('inicio'); 
// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', function(){ return view('index'); });
Route::get('/welcome', function(){ return view('welcome'); });



Route::get('/comite', 'ComiteController@index'); 

#Regiones
Route::get ('/regiones', 'RegionController@show')->name('regiones');
Route::get ('/getRegiones', 'RegionController@index')->name('getRegiones');

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




Route::get('time', function(){
    $actual = new Carbon();
    // $actual->format('UTC -6');
    $actual->format('d/m/Y');
    
    echo $actual;
});