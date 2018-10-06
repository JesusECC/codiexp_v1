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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',['as' => 'index','uses'=>'MainController@index']);
Route::get('quienessomos',['as' => 'quienessomos','uses'=>'QuienesSomosController@index']);
Route::get('mision',['as' => 'mision','uses'=>'QuienesSomosController@mision']);
Route::get('investigadores',['as' => 'investigadores','uses'=>'InvestigadorController@index']);
Route::get('investigador/{id}',['as' => 'investigador','uses'=>'InvestigadorController@investigador']);
//investigaciones
Route::get('investigaciones',['as' => 'investigaciones','uses'=>'InvestigacionController@index']);
Route::get('investigacion/{id}',['as' => 'investigacion','uses'=>'InvestigacionController@investigacion']);

//otras investigaciones
Route::get('investigaciones/upn',['as' => 'investigaciones-upn','uses'=>'InvestigacionesUpnController@index']);
//imagenes
Route::get('imagenes/{id}',['as' => 'imagenes','uses'=>'ImagenesController@imagenArti']);
Route::get('video/{id}',['as' => 'video','uses'=>'ImagenesController@video']);
//videos

//inscripciones
// Route::get('inscripcion',['as' => 'inscripcion','uses'=>'InscripcionController@index']);
// Route::resource('inscripciones','InscripcionController');
// Route::get('inscripcion',function(){
//   return "Las Inscripciones Terminaron Gracias.";
// })

// evento cisco 27/09/2018
Route::get('evento',['as' => 'inscripcion','uses'=>'ConcursoCiscoController@index']);
// Route::resource('evento/save','ConcursoCiscoController');
Route::post('evento/save',['as' => 'evento_inscripcion','uses'=>'ConcursoCiscoController@store']);