<?php

namespace App\Http\Controllers;

use App\Models\clientes;
use Illuminate\Http\Request;
use DB;
use Redirect;
class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes=DB::table('clientes')
        ->select()
        ->get();
        return view('dashboards.lista_clientes',compact("clientes"));
       
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
        $crear_clientes=new clientes;
        $crear_clientes->tipo_documento=$request->tipo_documento;
        $crear_clientes->numero_documento= $request->numero_documento;
        $crear_clientes->nombres= $request->nombres;
        $crear_clientes->apellidos= $request->apellidos;
        $crear_clientes->direccion= $request->direccion;
        $crear_clientes->telefono= $request->telefono;
        $crear_clientes->conductor_adicional= $request->conductor_adicional;
        $crear_clientes->documento_conductor_adicional=$request->documento_conductor_adicional;
        $crear_clientes->save();
        return Redirect::to('/listar_cliente')->with('correcto', 'El cliente se creo correctamente');
      return response(["data"=>"usuario guardado"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function show(clientes $clientes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function edit(clientes $clientes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, clientes $clientes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        response(["data"=>$id]);
    }
}
