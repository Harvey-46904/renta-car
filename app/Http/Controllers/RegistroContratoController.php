<?php

namespace App\Http\Controllers;

use App\Models\registro_contrato;
use Illuminate\Http\Request;
use DB;
use Redirect;
use Illuminate\Support\Facades\App;
class RegistroContratoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contratos=DB::table('registro_contratos')
        ->join('reservas','reservas.id_reserva','=','registro_contratos.id_de_reserva')
        ->join('clientes','reservas.cliente_id','=','clientes.id_cliente')
        ->join('vehiculos','reservas.vehiculo_id','=','vehiculos.id_vehiculo')
        ->select()
        ->where("Estado_contrato","=","Salida")
        ->get();
        return view('dashboards.lista_contratos',compact("contratos"));
       
    }
    public function index_fin()
    {
        $contratos=DB::table('registro_contratos')
        ->join('reservas','reservas.id_reserva','=','registro_contratos.id_de_reserva')
        ->join('clientes','reservas.cliente_id','=','clientes.id_cliente')
        ->join('vehiculos','reservas.vehiculo_id','=','vehiculos.id_vehiculo')
        ->select()
        ->where("Estado_contrato","=","Finalizado")
        ->get();
        return view('dashboards.lista_contratos_fin',compact("contratos"));
       
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
    public function store(Request $request,$id)
    {
        $todo=$request->all();
        $ldate = date('Y-m-d-H_i_s');
        $contrato= new registro_contrato;
        $contrato->id_de_reserva=$id;
        $contrato->fecha_salida =$request->fecha_salida;
        $contrato->km_salida=$request->km_salida;
        $contrato->km_permitido=$request->km_permitido;
        $contrato->hora_salida=$request->hora_salida;
        $contrato->combustible_salida=$request->combustible_salida;
        $contrato->destino=$request->destino;
        $contrato->entregado_por="url img";
        $contrato->recibido_por="url img";
        $contrato->observaciones_entregado=$request->observaciones_entregado;
        $contrato->observaciones_recibido=$request->observaciones_recibido;
        $contrato->estado_salida="aqui va el estado ";
        $contrato->Estado_contrato="Salida";
        $contrato->save();
        $id_contrato=$contrato->id;
        $img = $request->entregado_por;
        $image_parts = explode(";base64,", $img);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
        $nombres1=$id_contrato."-entregado_por.png";
        \Storage::disk('local')->put("/firmas/".$nombres1,  $image_base64);
        $img = $request->recibido_por;
        $image_parts = explode(";base64,", $img);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
        $nombres2=$id_contrato."-recibido_por.png";
        \Storage::disk('local')->put("/firmas/".$nombres2,  $image_base64);
        $contrato->entregado_por=$nombres1;
        $contrato->recibido_por=$nombres2;
        $contrato->save();
        return Redirect::to('/lista_contratos')->with('correcto', 'El cliente se creo correctamente');
        return response(["id_reserva"=>$todo]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\registro_contrato  $registro_contrato
     * @return \Illuminate\Http\Response
     */
    public function show(registro_contrato $registro_contrato)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\registro_contrato  $registro_contrato
     * @return \Illuminate\Http\Response
     */
    public function edit(registro_contrato $registro_contrato)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\registro_contrato  $registro_contrato
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, registro_contrato $registro_contrato)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\registro_contrato  $registro_contrato
     * @return \Illuminate\Http\Response
     */
    public function destroy(registro_contrato $registro_contrato)
    {
        //
    }

    public function generar_pdf($data){
        
        $contratos=DB::table('registro_contratos')
        ->join('reservas','reservas.id_reserva','=','registro_contratos.id_de_reserva')
        ->join('clientes','reservas.cliente_id','=','clientes.id_cliente')
        ->join('vehiculos','reservas.vehiculo_id','=','vehiculos.id_vehiculo')
        ->select()
        ->where("registro_contratos.id","=",$data)
        ->first();
       

        $dompdf = App::make("dompdf.wrapper");
        $dompdf->loadView("dashboards.contrato",compact("contratos"));
        $nombres_completos=$contratos->nombres."-".$contratos->apellidos;
        $nombre_archivo="Contrato-".$nombres_completos.".pdf";
       // return $dompdf->stream();
       return $dompdf->download($nombre_archivo);
    }

    public function finalizar_contrato($id){
        $contratos=DB::table('registro_contratos')
        ->join('reservas','reservas.id_reserva','=','registro_contratos.id_de_reserva')
        ->select()
        ->where("registro_contratos.id","=",$id)
        ->first();

        $id_contrato=$id;
        $reserva_id=$contratos->id_reserva;
       
        $reservas=DB::table('reservas')
        ->join('clientes','reservas.cliente_id','=','clientes.id_cliente')
        ->join('vehiculos','reservas.vehiculo_id','=','vehiculos.id_vehiculo')
        ->join('estado_vehiculos','estado_vehiculos.vehiculo_id','=','vehiculos.id_vehiculo')
        ->select()
        ->where('id_reserva','=',$reserva_id)
        ->get();
        return view('dashboards.finalizar_contrato',compact("reservas","id_contrato"));
        return response(["finalizar"=>$id]);
    }

    public function fin(Request $request,$id){
        $todo=$request->all();
        $actualizar_contrato=registro_contrato::findOrFail($id);
        
        
        $actualizar_contrato->fecha_entrada=$request->fecha_entrada;
        $actualizar_contrato->hora_entrada=$request->hora_entrada;
        $actualizar_contrato->km_entrada=$request->km_entrada;
        $actualizar_contrato->km_por_cobrar=$request->km_por_cobrar;
        $actualizar_contrato->combustible_entrada=$request-> combustible_entrada;
        $actualizar_contrato->dias=$request->dias;
        //entrada
        $img = $request->entregado_por_entrada;
        $image_parts = explode(";base64,", $img);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
        $nombres1=$id."-entregado_por_entrada.png";
        \Storage::disk('local')->put("/firmas/".$nombres1,  $image_base64);
        $actualizar_contrato->entregado_por_entrada=$nombres1;
        //recibido
        $img = $request->recibido_por_entrada;
        $image_parts = explode(";base64,", $img);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
        $nombres2=$id."-recibido_por_entrada.png";
        \Storage::disk('local')->put("/firmas/".$nombres2,  $image_base64);

        $actualizar_contrato->recibido_por_entrada=$nombres2;


        $actualizar_contrato->observaciones_entregado_entrada=$request->observaciones_entregado_entrada;
        $actualizar_contrato->observaciones_recibido_entrada=$request->observaciones_recibido_entrada;
        $actualizar_contrato->Estado_contrato="Finalizado";
        $actualizar_contrato->save();
        return Redirect::to('/lista_contratos_finalizados')->with('correcto', 'El cliente se creo correctamente');
       
    }
}
