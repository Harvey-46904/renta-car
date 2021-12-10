<?php

namespace App\Http\Controllers;

use App\Models\reserva;
use Illuminate\Http\Request;
use DB;
use Redirect;
use Session;
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
        //obtengo el cliente 
        $clientes=DB::table('clientes')
        ->select("id_cliente")
        ->where("numero_documento","=",$request->cedula_usuario)
        ->first();
         //calcular dias
         $dias=self::diferencia_dias($request->desde,$request->hasta);
        //obtengo el vehiculo
        $vehiculo=DB::table('vehiculos')
        ->select("precio_alquiler","precio_lavado")
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
        $precio_trasnporte=$transporte==1?self::lugares($lugar,$personas):0;


        $saldo=self::saldos_calculo($precio_total,$valor_reserva,$precio_trasnporte,$precio_lavado);

        //return response(["data"=>$saldo,"total"=>$precio_total,"trans"=>$precio_trasnporte,"reserva"=>$valor_reserva]);
        $reservas=new reserva;
        $reservas->vehiculo_id=$request->vehiculo;
        $reservas->cliente_id=$clientes->id_cliente;
        $reservas->fecha_inicio=$request->desde;
        $reservas->fecha_fin=$request->hasta;
        $reservas->dias_reserva=$dias;
        $reservas->transporte=$transporte;
        $reservas->personas=$personas;
        $reservas->lugar=$lugar;
        $reservas->lavado=$lavado;
        $reservas->valor_reserva=$valor_reserva;
        $reservas->saldo=$saldo;
        $reservas->save();
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
}
