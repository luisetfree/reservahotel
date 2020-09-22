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
    return view('welcome');
});


/*Redireccionando al metodo index del controlador UsuarioController*/
Route::get('/usuarios', 'UsuarioController@index');

//ruta que muestra al administrador la lista de reservas creadas y mas controles
Route::get('/admin', 'ReservasController@show');

Route::get('/reserva', 'UsuarioController@create');
Route::get('/reserva2', 'ReservasController@create');
Route::get('/rooms', 'RoomsController@create');
/*Recive la nformacion del 1er formulario crear reserva*/
Route::post('/user','UsuarioController@store');
Route::post('/room','RoomsController@store');

/*Muestra el resumen de reserva en especifico*/
Route::get('/reserva/{id}', 'ReservasController@muestra');

/*recibe el ID de la reserva que deseamos eliminar*/
Route::get('/reserva/destroi/{id}', 'ReservasController@destroy');


/*Recibe los datos del formulario de la vista reserva2
para almacenar todo en la tabla reservations*/
Route::post('/reservation','ReservasController@store');

/*Devuelve el resumen de la reservacion echa*/
Route::get('/resumen', 'ReservasController@index');

/*TODAS LAS RUTAS DEL API*/
/*Lista todos los usuarios registrados*/
Route::get('/api/usuarios', 'UsuarioController@usuarios');
/*Guarda en DB un usuario*/
Route::post('/api/guardar', 'UsuarioController@guardar');
/*Elimina de la DB un usuario*/
Route::delete('/api/delete/{id}', 'UsuarioController@eliminar');
/*Busca en la DB un usuario*/
Route::get('/api/buscar/{id}', 'UsuarioController@mostrar');