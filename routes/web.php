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

Route::get('crear_estado/{id}',"EstadoVehiculoController@registrar_estado");


Route::get('cliente_actual', "ClientesController@cliente_actual")->name("cliente_actual");

Route::get('actualizar_cliente/{id}',"ClientesController@show")->name("actualizar_cliente");

Route::get('listar_cliente',"ClientesController@index")->name("listar_cliente");

Route::get('listar_vehiculo',"VehiculosController@index")->name("listar_vehiculo");

Route::get('crear_vehiculos', function () {
    return view('dashboards.crear_vehiculos');
})->name("crear_vehiculo");

Route::get('actualizar_vehiculos', function () {
    return view('dashboards.actualizar_vehiculos');
});

//vista crear reserva
Route::get('crear_reserva', "ReservaController@index");

//VISTA LISTAR RESERVA
Route::get('listar_reservas', function () {
    return view('dashboards.listar_reservas');
});

Route::get('lista_vehiculos',"VehiculosController@index");


Route::get('obtener_nombre/{id}',"ClientesController@obtener_nombre")->name("obtener_nombre");
Route::get('obtener_carro/{id}',"VehiculosController@obtener_carro")->name("obtener_carro");
//metodos de envio en este caso post

Route::post('crear_clientes','ClientesController@store')->name('post_cliente');
Route::post('crear_vehiculos','VehiculosController@store')->name('post_vehiculo');
Route::post('crear_estado/{id}','EstadoVehiculoController@store')->name('post_estado');
Route::post('crear_reserva','ReservaController@store')->name('post_reserva');



//metodoos de eliminar

Route::delete('clientes_eliminar/{id}', "ClientesController@destroy")->name("eliminar_cliente");

//metodos de actualizar

Route::post('actualizar_cliente_unico/{id}', "ClientesController@update")->name('actualizar_cliente_unico');




//descargar imagenes

Route::get('storage/{archivo}', function ($nombre) {
    $public_path = public_path();
    $url = $public_path.'/storage/'.$nombre;// depende de root en el archivo filesystems.php.
    //verificamos si el archivo existe y lo retornamos
    if (\Storage::exists($nombre))
    {
        return response()->download($url);
    }
    //si no se encuentra lanzamos un error 404.
    abort(404);
  
  });