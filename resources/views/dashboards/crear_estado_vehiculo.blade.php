@extends('dashboards.index')
@section('registro_clientes')
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        {{print_r($vehiculo)}}
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
                            hi
                            @csrf
                            <div>
                        <div class="input_wrapper bg-success">
                            <input type="checkbox" class="switch_4">
                            <svg class="is_checked" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 426.67 426.67">
                                <path d="M153.504 366.84c-8.657 0-17.323-3.303-23.927-9.912L9.914 237.265c-13.218-13.218-13.218-34.645 0-47.863 13.218-13.218 34.645-13.218 47.863 0l95.727 95.727 215.39-215.387c13.218-13.214 34.65-13.218 47.86 0 13.22 13.218 13.22 34.65 0 47.863L177.435 356.928c-6.61 6.605-15.27 9.91-23.932 9.91z"/>
                            </svg>
                            <svg class="is_unchecked" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 212.982 212.982">
                                <path d="M131.804 106.49l75.936-75.935c6.99-6.99 6.99-18.323 0-25.312-6.99-6.99-18.322-6.99-25.312 0L106.49 81.18 30.555 5.242c-6.99-6.99-18.322-6.99-25.312 0-6.99 6.99-6.99 18.323 0 25.312L81.18 106.49 5.24 182.427c-6.99 6.99-6.99 18.323 0 25.312 6.99 6.99 18.322 6.99 25.312 0L106.49 131.8l75.938 75.937c6.99 6.99 18.322 6.99 25.312 0 6.99-6.99 6.99-18.323 0-25.313l-75.936-75.936z" fill-rule="evenodd" clip-rule="evenodd"/>
                            </svg>
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