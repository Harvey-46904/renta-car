@extends('dashboards.index')
@section('registro_clientes')
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            LISTA VEHÍCULOS
                        </h2>
                        <div class="body table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>NOMBRE VEHÍCULO</th>
                                        <th>PLACA VEHÍCULO</th>
                                        <th>MARCA VEHÍCULO</th>
                                        <th>MODELO VEHÍCULO</th>
                                        <th>COLOR VEHÍCULO</th>
                                        <th>VIGENCIA SOAT</th>
                                        <th>VIGENCIA TECNOMECÁNICA</th>
                                        <th>VALOR ALQUILER VEHÍCULO</th>
                                        <th>PRECIO LAVADO VEHÍCULO</th>
                                        <th>DISPONIBILIDAD VEHÍCULO</th>
                                        <th>OPCIONES</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Vehículo 1</td>
                                        <td>ABC 123</td>
                                        <td>CHEVROLET</td>
                                        <td>2010</td>
                                        <td>NEGRO</td>
                                        <td>22/06/2022</td>
                                        <td>25/06/2022</td>
                                        <td>190.000</td>
                                        <td>35.000</td>
                                        <td>DISPONIBLE</td>
                                        <td>
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                    <a type="button" class="btn btn-success btn-circle waves-effect waves-circle waves-float d-inline" href="{{ url('actualizar_vehiculos') }}">
                                    <i class="material-icons">mode_edit</i>
                                </a>
                                <a type="button" class="btn bg-red btn-circle waves-effect waves-circle waves-float d-inline" id="btn_eliminar">
                                    <i class="material-icons">delete</i>
                                </a>
                                                    </div>
                                                </div>
                                            </div>
                                </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection