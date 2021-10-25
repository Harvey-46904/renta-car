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
                                    <div class="col-md-6"><label for="nombre_vehiculo">No Documento</label>
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
                                    </div>
                                    <div class="col-md-6 text-center border border-secondary py-2">

                                        <h3 class="text-center">Ticket de Reserva</h3>
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
