@extends('dashboards.index')
@section('registro_clientes')
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            LISTA CLIENTES
                        </h2>
                        
                        <div class="body table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>TIPO DOCUMENTO</th>
                                        <th>NÚMERO DOCUMENTO</th>
                                        <th>NOMBRES</th>
                                        <th>APELLIDOS</th>
                                        <th>DIRECCIÓN</th>
                                        <th>TELÉFONO</th>
                                        <th>NOMBRE CONDUCTOR ADICIONAL</th>
                                        <th>DOCUMENTO CONDUCTOR ADICIONAL</th>
                                        <th>OPCIONES</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>CC</td>
                                        <td>1085123456</td>
                                        <td>JUAN SEBASTIÁN</td>
                                        <td>DELGADO ARTURO</td>
                                        <td>Cra. 3 #20-20</td>
                                        <td>3180987654</td>
                                        <td>HARVEY RIASCOS</td>
                                        <td>12987654</td>
                                        <td><button type="button" class="btn btn-danger" id="btn_eliminar">eliminar</button></td>
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