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

Route::get('/', function () {
    return view('welcome');
});
Route::get('clientes',"ClientesController@store");


Route::get('dashboard', function () {
    return view('dashboards.index');
});

Route::get('registro', function () {
    return view('dashboards.registro_clientes');
});

Route::get('actualizar', function () {
    return view('dashboards.actualizar_clientes');
});

Route::get('lista', function () {
    return view('dashboards.lista_clientes');
});