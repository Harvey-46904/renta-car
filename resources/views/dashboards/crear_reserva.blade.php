@extends('dashboards.index')
@section('registro_clientes')
    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                CREAR RESERVA
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

                            <form method="POST" action="{{ route('post_vehiculo') }}" accept-charset="UTF-8"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="nombre_vehiculo">No Documento</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="cedula_usuario" name="cedula_usuario"
                                                    class="form-control" placeholder="Digite numero de documento">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="mensaje" name="mensaje"
                                                    class="form-control bg-warning" placeholder="Cliente No Encontrado">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="nombre_vehiculo">Desde</label>
                                                <div class="form-group">
                                                    <input class="form-control" type="date" id="desde" name="desde">
                                                </div>
                                            </div>
                                            <div class="col-md-6"> <label for="nombre_vehiculo">Hasta</label>
                                                <div class="form-group">
                                                    <input class="form-control" type="date" id="hasta" name="hasta">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Seleccione Vehiculo</label>
                                            <select class="form-control" id="vehiculo" name="vehiculo">
                                                @foreach ($vehiculos as $vehiculo)
                                                    <option id="{{ $vehiculo->id_vehiculo }}">
                                                        {{ $vehiculo->nombre_vehiculo }} {{ $vehiculo->marca }}

                                                        {{ $vehiculo->modelo }}
                                                        {{ $vehiculo->color }}
                                                    </option>
                                                @endforeach


                                            </select>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-3">Transporte Aeropuerto</div>
                                            <div class="col-sm-9">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="gridCheck1">
                                                    <label class="form-check-label" for="gridCheck1">
                                                        ¿Desea ser recogido en Aeropuerto?
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <fieldset class="form-group lugar">
                                            <div class="row">
                                                <legend class="col-form-label col-sm-3 pt-0">Lugar</legend>
                                                <div class="col-sm-9">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="gridRadios"
                                                            id="gridRadios1" value="option1" checked>
                                                        <label class="form-check-label" for="gridRadios1">
                                                            Pasto
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="gridRadios"
                                                            id="gridRadios2" value="option2">
                                                        <label class="form-check-label" for="gridRadios2">
                                                            Ipiales
                                                        </label>
                                                    </div>

                                                </div>
                                            </div>
                                        </fieldset>

                                        <div class="form-group row">
                                            <div class="col-md-3">Lavado Vehiculo:</div>
                                            <div class="col-sm-9">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="gridCheck2">
                                                    <label class="form-check-label" for="gridCheck2">
                                                        ¿Desea Lavado de Vehiculo?
                                                    </label>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="col-md-6 text-center border border-secondary py-2 ">

                                        <h4 class="text-center">Ticket de Reserva</h4>
                                        <hr>
                                        <h4 class="text-center">Cliente</h4>
                                        <hr>
                                        <div class="row justify-content-center">
                                            <div class="col-md-5">
                                                <label for="nombre_vehiculo">Id Cliente</label>
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" id="id" name="id" class="form-control bg-light "
                                                            placeholder="" value="" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <label for="nombre_vehiculo">No Documento</label>
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" id="documento" name="documento"
                                                            class="form-control bg-light" placeholder="" value="" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="col-md-5">


                                                <label for="nombre_vehiculo">Nombres</label>
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" id="nombres" name="nombres"
                                                            class="form-control bg-light " placeholder="" value="" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <label for="nombre_vehiculo">Apellidos</label>
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" id="apellidos" name="apellidos"
                                                            class="form-control bg-light" placeholder="" value="" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="col-md-5">
                                                <label for="nombre_vehiculo">Dirección</label>
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" id="direccion" name="direccion"
                                                            class="form-control bg-light " placeholder="" value="" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <label for="nombre_vehiculo">Telefono</label>
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" id="telefono" name="telefono"
                                                            class="form-control bg-light" placeholder="" value="" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h4 class="text-center">Vehiculo</h4>
                                        <hr>
                                        <div class="row justify-content-center">
                                            <div class="col-md-5">
                                                <label for="nombre_vehiculo">Dirección</label>
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" id="direccion" name="direccion"
                                                            class="form-control bg-light " placeholder="" value="" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <label for="nombre_vehiculo">Telefono</label>
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" id="telefono" name="telefono"
                                                            class="form-control bg-light" placeholder="" value="" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <h4 class="text-center">Informacion Alquiler</h4>
                                        <hr>
                                        <div class="row justify-content-center align-items-center">
                                            <div class="col-md-4 ">
                                                <h5><b>Dias</b></h5>
                                            </div>
                                            <div class="col-md-6 ">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <label for="fechas">desde</label>
                                                        <input type="text" id="dias" name="dias"
                                                            class="form-control bg-light" placeholder="" value="0" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="col-md-4">
                                                <h5><b>Transporte:<h5 id="lugar">Pasto</h5> </b></h5>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" id="transporte" name="transporte"
                                                            class="form-control bg-light" placeholder="" value="0"
                                                            disabled>
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
