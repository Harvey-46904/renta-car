<?php

use Illuminate\Support\Facades\Route;

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

// metodos de vista

Route::get('/', function () {
    return view('welcome');
});
Route::get('clientes',"ClientesController@store");


Route::get('dashboard', function () {
    return view('dashboards.index');
});

Route::get('crear_cliente', function () {
    return view('dashboards.registro_clientes');
});

Route::get('actualizar_cliente', function () {
    return view('dashboards.actualizar_clientes');
});

Route::get('listar_cliente',"ClientesController@index" );



Route::get('crear_vehiculos', function () {
    return view('dashboards.crear_vehiculos');
});

Route::get('actualizar_vehiculos', function () {
    return view('dashboards.actualizar_vehiculos');
});

Route::get('lista_vehiculos', function () {
    return view('dashboards.lista_vehiculos');
});

//metodos de envio en este caso post

Route::post('crear_clientes','ClientesController@store')->name('post_cliente');