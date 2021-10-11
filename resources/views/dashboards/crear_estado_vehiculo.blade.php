@extends('dashboards.index')
@section('registro_clientes')
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        {{$vehiculo}}
                        <h2>
                            ESTADO DEL VEHICULO
                        </h2>
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
                        <hr>
                        <div class="container-fluid ">
                            <div class="row">
                                <div class="col-md-12 bg-danger text-center">VEHICULO</div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">foto</div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-6">a</div>
                                        <div class="col-md-6">b</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">a</div>
                                        <div class="col-md-6">b</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">a</div>
                                        <div class="col-md-6">b</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">a</div>
                                        <div class="col-md-6">b</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">a</div>
                                        <div class="col-md-6">b</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="body">
                        <form >
                            @csrf
                           
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