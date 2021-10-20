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
                                <label for="nombre_vehiculo">No Documento</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="cedula_usuario" name="cedula_usuario" class="form-control"
                                            placeholder="Digite numero de documento">
                                    </div>
                                </div>
                                <label for="nombre_vehiculo">Cliente</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="usuario" name="usuario" class="form-control bg-success"
                                            placeholder="" disabled>
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
