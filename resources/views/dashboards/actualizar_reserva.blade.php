@extends('dashboards.index')
@section('registro_clientes')
    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               ACTUALIZAR  RESERVA
                            
                            </h2>
                     
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"
                                        role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">

                            <form method="POST" action="{{ route('actualizar_reserva') }}" accept-charset="UTF-8"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                   
                                    <div class="col-md-4">
                                        <h5 class="text-center py-4  ">Cliente</h5>
                                        <hr>
                                        <div class="form-group ">
                                            <div class="form-line">
                                                <input type="text" id="" name=""
                                                    class="form-control text-center" placeholder="Persona" value="{{$persona->nombres}} {{$persona->apellidos}}" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="mensaje" name="mensaje"
                                                    class="form-control bg-success text-center " placeholder="Cliente Encontrado">
                                            </div>
                                        </div>
                                     
                                        


                                    </div>
                                   <div class="col-md-4">
                                    <h5 class="text-center py-4  ">Tiempo de Alquiler</h5>
                                    <hr>
                                    <div class="row ">
                                        
                                        <div class="col-md-12 ">
                                            <label for="nombre_vehiculo">Desde</label>
                                            <div class="form-group">
                                                <input class="form-control" type="date" id="desde" name="desde" value="<?php echo date('Y-m-d', strtotime($reservas->fecha_inicio)) ?>" >
                                            </div>
                                        </div>
                                        <div class="col-md-12 "> <label for="nombre_vehiculo">Hasta</label>
                                            <div class="form-group">
                                                <input class="form-control" type="date" id="hasta" name="hasta" value="<?php echo date('Y-m-d', strtotime($reservas->fecha_fin)) ?>">
                                            </div>
                                        </div>
                                    </div>
                                   </div>
                                   <div class="col-md-4">
                                   <div>
                                    <h5 class="text-center py-4 align-items-center ">Vehículo Actual</h5>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6">
                                       {{$vehiculo->nombre_vehiculo}}
                                        </div>
                                        <div class="col-md-6">
                                        <img src="{{ url('/storage/vehiculo/', $vehiculo->foto_vehiculo) }}"
                                                class=" img-thumbnail" width="300px" height="300px">
                                        </div>
                                    </div>
                                    </div>
                                    <h5 class="text-center py-4  ">Vehículo</h5>
                                    <hr>
                                    <div class="form-group">
                                      
                                        <select class="form-control" id="" name="vehiculo_cambio">
                                            <option id="0">Seleccione Un Vehículo</option>
                                            @foreach ($vehiculos as $vehiculo)

                                                <option value="{{ $vehiculo->id_vehiculo }}" data-thumbnail="{{ url('/storage/vehiculo/', $vehiculo->foto_vehiculo) }}">{{ $vehiculo->nombre_vehiculo }}</option>
                                            @endforeach


                                        </select>
                                    </div>
                                   
                                       
                                    

                                   
                                   </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 text-center border border-secondary py-2 ">

                                        <h4 class="text-center">{{$vehiculo->precio_alquiler}}</h4>
                                        <hr>
                                        <div class="row justify-content-center align-items-center">
                                            <div class="col-md-3 ">
                                                <h5><b>Dias Totales</b></h5>
                                            </div>
                                            <div class="col-md-7 ">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <label for="fechas"><b>Desde: </b><label id="des"><?php echo date('Y-m-d', strtotime($reservas->fecha_inicio)) ?></label>
                                                            <b>Hasta </b><label id="has"><?php echo date('Y-m-d', strtotime($reservas->fecha_fin)) ?></label> </label>
                                                        <input type="text" id="dias" name="dias"
                                                            class="form-control bg-light text-center" placeholder="" value="{{$reservas->dias_reserva}}"
                                                            disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="col-md-3">
                                                <h5><b>Total Vehiculo</b></h5>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" id="" name=""
                                                            class="form-control bg-light text-center" placeholder="" value="{{$vehiculo->precio_alquiler}}"
                                                          disabled  >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="col-md-3">
                                                <h5><b>Transporte<h5 id="ubicacion"></h5> </b></h5>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" id="transporte" name="transporte"
                                                            class="form-control bg-light text-center" placeholder="" value="{{$reservas->precio_transporte}}"
                                                           disabled >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="col-md-3">
                                                <h5><b>Lavado</b></h5>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" id="lava" name="lava"
                                                            class="form-control bg-light text-center" placeholder="" value="{{$vehiculo->precio_lavado}}"
                                                           disabled >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row justify-content-center">
                                            <div class="col-md-3">
                                                <h5><b>Valor Reserva</b></h5>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" id="reserva" name="reserva"
                                                            class="form-control bg-light text-center" placeholder="" value="{{$reservas->valor_reserva}}"
                                                           disabled >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="col-md-3">
                                                <h5><b>Saldo</b></h5>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" id="saldo" name="saldo"
                                                            class="form-control bg-light text-center" placeholder="" value="{{$reservas->saldo}}"
                                                          disabled  >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="col-md-3">
                                                <h5><b>Descuento</b></h5>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="number" id="descuento" name="descuento"
                                                            class="form-control bg-success text-center" placeholder="" value="{{$reservas->descuento}}"
                                                            >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <br>
                                <button type="submit" class="btn btn-primary m-t-15 waves-effect">GUARDAR</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
