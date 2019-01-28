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
Route::get('/conciertos', 'PagesController@conciertos');
Route::get('/artistas', 'PagesController@artistas');
Route::get('/calendario', 'PagesController@calendario');
Route::get('/acercade', 'PagesController@acercade');
Route::get('/contacto', 'PagesController@contacto');

// Rutas para la entidad Concerts
Route::get('/conciertos/crear', 'ConcertsController@create');
Route::post('/conciertos', 'ConcertsController@store');
Route::get('/conciertos/{id}/editar', 'ConcertsController@edit');
Route::patch('/conciertos/{id}', 'ConcertsController@update');
Route::delete('/conciertos/{id}', 'ConcertsController@destroy');
Route::get('/conciertos/{id}', 'ConcertsController@show');


// Route::resource('/concerts', 'ConcertsController');
