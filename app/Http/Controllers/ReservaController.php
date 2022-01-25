<?php

namespace App\Http\Controllers;

use App\Models\reserva;
use Illuminate\Http\Request;
use DB;
use Redirect;
use Session;
use Illuminate\Support\Facades\Mail;
use App\Mail\ReservaCorreo;
class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $vehiculos=DB::table('vehiculos')
        ->select()
        ->get();

        $clientes=DB::table('clientes')
        ->select()
        ->get();

        return view('dashboards.crear_reserva',compact("vehiculos","clientes"));
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
        $todo=$request->all();
      
        $nuevo_lugar=$request->lugar;
        $nuevo_precio_transporte=0;
        if($nuevo_lugar=="Otro"){
            $nuevo_lugar=$request->nuevo_lugar;
            $nuevo_precio_transporte= $request->nuevo_lugar_precio;
        }else{
            if($nuevo_lugar=="Pasto"){
                $nuevo_precio_transporte=35000;
            }
            if($nuevo_lugar=="Ipiales"){
                $nuevo_precio_transporte=120000;
            }
        }
        $trans=0;
        if(is_null($nuevo_lugar)){
            $trans=0;
            $nuevo_lugar="No requiere transporte";
        }else{
            $trans=1;
        }

       
        //obtengo el cliente 
        $clientes=DB::table('clientes')
        ->select()
        ->where("numero_documento","=",$request->cedula_usuario)
        ->first();
       
        
         //calcular dias
         $dias=self::diferencia_dias($request->desde,$request->hasta);
        //obtengo el vehiculo
        $vehiculo=DB::table('vehiculos')
        ->select()
        ->where("id_vehiculo","=",$request->vehiculo)
        ->first();
        
        //calcular reservas
        $precio_total=$vehiculo->precio_alquiler*$dias;
        $valor_reserva=(($precio_total)*30)/100;
        
       
        //calcular opciones de trasnporte y lavado
        $transporte=0;
        if(!is_null($request->gridRadios) || !is_null($request->gridRadios1)){
            $transporte=1;
        }else{
            $transporte=0;
        }
        $lavado=!is_null($request->lavados) ? 1:0;
        $lugar= $transporte==1?
            is_null($request->gridRadios)?"Ipiales":"Pasto"
        :"No transporte aeropuerto";
        $personas= $transporte==1?$request->personas:0;

        //comprobar lavado
        $precio_lavado=$lavado==1?$vehiculo->precio_lavado:0;
        //calcular saldo
        $precio_trasnporte=$nuevo_precio_transporte;


        $saldo=self::saldos_calculo($precio_total,$valor_reserva,$precio_trasnporte,$precio_lavado);
        $saldo=$saldo-$request->descuento;
        //return response(["data"=>$saldo,"total"=>$precio_total,"trans"=>$precio_trasnporte,"reserva"=>$valor_reserva]);
        $reservas=new reserva;
        $reservas->vehiculo_id=$request->vehiculo;
        $reservas->cliente_id=$clientes->id_cliente;
        $reservas->fecha_inicio=$request->desde;
        $reservas->fecha_fin=$request->hasta;
        $reservas->dias_reserva=$dias;
        $reservas->transporte=$trans;
        $reservas->precio_transporte=$nuevo_precio_transporte;
        $reservas->personas=0;
        $reservas->lugar=$nuevo_lugar;
        $reservas->lavado=$lavado;
        $reservas->valor_reserva=$valor_reserva;
        $reservas->saldo=$saldo;
        $reservas->descuento=$request->descuento;
        $reservas->estado_reserva="Reserva";
        $reservas->save();
        self::enviar_correo($clientes,$vehiculo,$reservas);
        return Redirect::to('/listar_reservas')->with('correcto', 'El cliente se creo correctamente');
        
        return response(["data"=>"ok"]);
    }
    public function lugares($lugar,$cantidad){
       //pasto  35000
        //ipiales 120000
        
        if($lugar=="Pasto"){
            return 35000*$cantidad;
        }
        if($lugar=="Ipiales"){
            return 120000*$cantidad;
        }
    }
    public function diferencia_dias($inicio,$fin){
        $f1= date_create($inicio);
        $f2= date_create($fin);
        $dias=date_diff($f1,$f2)->format('%a');
        return $dias;
    }
    public function saldos_calculo($total_vehiculo,$descuento_reserva,$p_transporte,$p_lavado){
        $saldito=$total_vehiculo-$descuento_reserva+$p_transporte+$p_lavado;
        return $saldito;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\reserva  $reserva
     * @return \Illuminate\Http\Response
     */
    public function show(reserva $reserva)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\reserva  $reserva
     * @return \Illuminate\Http\Response
     */
    public function edit(reserva $reserva)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\reserva  $reserva
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, reserva $reserva)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\reserva  $reserva
     * @return \Illuminate\Http\Response
     */
    public function destroy(reserva $reserva)
    {
        //
    }

    public function listar_reserva(){
        $reservas=DB::table('reservas')
        ->join('clientes','reservas.cliente_id','=','clientes.id_cliente')
        ->join('vehiculos','reservas.vehiculo_id','=','vehiculos.id_vehiculo')
        ->select()
        ->get();

        return view('dashboards.listar_reservas',compact("reservas"));
    }
    public function generar_contrato($id){
        $reservas=DB::table('reservas')
        ->join('clientes','reservas.cliente_id','=','clientes.id_cliente')
        ->join('vehiculos','reservas.vehiculo_id','=','vehiculos.id_vehiculo')
        ->join('estado_vehiculos','estado_vehiculos.vehiculo_id','=','vehiculos.id_vehiculo')
        ->select()
        ->where('id_reserva','=',$id)
        ->get();
        return view('dashboards.registrar_contrato',compact("reservas"));
    }
    public function consulta_clientes_reserva(Request $request)
    {
        $todo=$request->all();
        
      
        $fecha_prueba=strtotime($todo["desdes"]);
        $desde=date('Y-m-d  H:i:s',$fecha_prueba);

    
        $fecha_prueba1=strtotime($todo["hastas"]);
        $hasta=date('Y-m-d  H:i:s',$fecha_prueba1);


        $reservas=DB::table('reservas')
        ->select()
        ->where("fecha_inicio",'>',$desde)
        ->where("fecha_fin",'<',$desde)
        ->get();
        return response(["data"=>$todo,"reservas"=>$reservas]);
    }

    public function enviar_correo($cliente,$vehiculo,$reserva){
        $arreglo=$cliente;
        $arreglo1=$vehiculo;
        $arreglo2=$reserva;
        Mail::to("harveympv@hotmail.com")->send( new ReservaCorreo($arreglo,$arreglo1,$arreglo2));
        return "OK";
    }
}
