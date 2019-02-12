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

Route::get('/', 'PagesController@index');
// Route::get('/artistas', 'PagesController@artistas');
Route::get('/calendario', 'PagesController@calendario');
Route::get('/acercade', 'PagesController@acercade');
Route::get('/contacto', 'PagesController@contacto');

// Rutas para la entidad Concerts
Route::get('/conciertos', 'ConcertsController@index');
Route::get('/conciertos/crear', 'ConcertsController@create');
Route::post('/conciertos', 'ConcertsController@store');
Route::get('/conciertos/{concert}/editar', 'ConcertsController@edit');
Route::patch('/conciertos/{concert}', 'ConcertsController@update');
Route::delete('/conciertos/{concert}', 'ConcertsController@destroy');
Route::get('/conciertos/{concert}', 'ConcertsController@show');

// Rutas para la entidad Artists
Route::get('/artistas', 'ArtistsController@index');
Route::get('/artistas/crear', 'ArtistsController@create');
Route::post('/artistas', 'ArtistsController@store');
Route::get('/artistas/{artist}/editar', 'ArtistsController@edit');
Route::patch('/artistas/{artist}', 'ArtistsController@update');
Route::delete('/artistas/{artist}', 'ArtistsController@destroy');
Route::get('/artistas/{artist}', 'ArtistsController@show');

// Route::resource('/concerts', 'ConcertsController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
