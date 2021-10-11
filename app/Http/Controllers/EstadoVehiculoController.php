<?php

namespace App\Http\Controllers;

use App\Models\estado_vehiculo;
use App\Models\vehiculos;
use Illuminate\Http\Request;

class EstadoVehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\estado_vehiculo  $estado_vehiculo
     * @return \Illuminate\Http\Response
     */
    public function show(estado_vehiculo $estado_vehiculo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\estado_vehiculo  $estado_vehiculo
     * @return \Illuminate\Http\Response
     */
    public function edit(estado_vehiculo $estado_vehiculo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\estado_vehiculo  $estado_vehiculo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, estado_vehiculo $estado_vehiculo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\estado_vehiculo  $estado_vehiculo
     * @return \Illuminate\Http\Response
     */
    public function destroy(estado_vehiculo $estado_vehiculo)
    {
        //
    }
    function registrar_estado ($id) {
        $vehiculo=vehiculos::findOrFail($id);
        return view('dashboards.crear_estado_vehiculo',compact("vehiculo"));
    }
}
