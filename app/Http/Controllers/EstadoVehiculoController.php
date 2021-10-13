<?php

namespace App\Http\Controllers;

use App\Models\estado_vehiculo;
use App\Models\vehiculos;
use Illuminate\Http\Request;
use DB;
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

        //return response(["datas"=>$request->Foto_izq]);
        $ldate = date('Y-m-d-H_i_s');
        //imagen left
       
        $file = $request->file('Foto_izq');
        $nombre_l = $file->getClientOriginalName();
        \Storage::disk('local')->put($ldate.$nombre_l,  \File::get($file));
        return response(["datas"=>$request->Foto_izq]);
        //imagen right
      
        $file = $request->file('Foto_der');
        $nombre_r = $file->getClientOriginalName();
        \Storage::disk('local')->put($ldate.$nombre_r,  \File::get($file));

        //imagen frontal
     
        $file = $request->file('Foto_frente');
        $nombre_f = $file->getClientOriginalName();
        \Storage::disk('local')->put($ldate.$nombre_f,  \File::get($file));

        //imagen trasera
      
        $file = $request->file('Foto_trasera');
        $nombre_t = $file->getClientOriginalName();
        \Storage::disk('local')->put($ldate.$nombre_t,  \File::get($file));




        $crear_estado=new estado_vehiculo;
        $crear_estado->vehiculo_id=5;
        $crear_estado->documento_dia = self::validador_checks($request->documento_dia);
        $crear_estado->Luces_exteriores = self::validador_checks( $request->Luces_exteriores);
        $crear_estado->Luz_interior= self::validador_checks( $request->Luz_interior);
        $crear_estado->Limpia_brisas= self::validador_checks( $request->Limpia_brisas);
        $crear_estado->Pito= self::validador_checks( $request->Pito);
        $crear_estado->Espejos_externos_internos= self::validador_checks( $request->Espejos_externos_internos);
        $crear_estado->Radio = self::validador_checks($request->Radio);
        $crear_estado->Llanta_repuesto= self::validador_checks( $request->Llanta_repuesto);
        $crear_estado->Gato = self::validador_checks( $request->Gato);
        $crear_estado->Cruceta = self::validador_checks( $request->Cruceta);
        $crear_estado->Equipo_carretera = self::validador_checks($request->Equipo_carretera);
        $crear_estado->Emblemas= self::validador_checks(  $request->Emblemas);
        $crear_estado->Antena= self::validador_checks( $request->Antena);
        $crear_estado->Copas= self::validador_checks(  $request->Copas);
        $crear_estado->Kilometraje = self::validador_checks( $request->Kilometraje);
        $crear_estado->mantenimiento= self::validador_checks( $crear_estado->mantenimiento);
        $crear_estado->lavado= self::validador_checks( $request->lavado);
        //$crear_estado->Foto_izq  $request->Foto_izq
        //$crear_estado->Foto_der $request->Foto_der
       // $crear_estado->Foto_frente  $request->Foto_frente
       // $crear_estado->Foto_trasera  $request->Foto_trasera
        $crear_estado->Foto_izq=$ldate.$nombre_l;
        $crear_estado->Foto_der=$ldate.$nombre_r;
        $crear_estado->Foto_frente=$ldate.$nombre_f;
        $crear_estado->Foto_trasera=$ldate.$nombre_t;
        $crear_estado->observaciones= $request->observaciones;
        $crear_estado->save();
        return response(["datas"=>self::validador_checks($request->documento_dia)]);
    }

    public function validador_checks($valor_check){
        //con un if terneario valido si el valor del check es igual
        //a on , entonces retorna true, de lo contrario si esta diferente 
        //retorna false
        $resultado=$valor_check=="on"? true:false;
        return $resultado;
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
      
        $vehiculo=DB::table('vehiculos')->select()->where("id_vehiculo","=",$id)->first();
        return view('dashboards.crear_estado_vehiculo',compact("vehiculo"));
    }
}
