@extends('dashboards.index')
@section('registro_clientes')
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-14 col-md-14 col-sm-14 col-xs-14">
                <div class="card">
                    <div class="header">
                      
                        <h4>
                            ESTADO DEL VEHICULO
                        </h4>
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
                                <div class="col-md-14 bg-danger text-center">VEHICULO</div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 text-center">

                                    <img src="{{url('/storage/',$vehiculo->foto_vehiculo)}}" class=" img-thumbnail" width="300px" height="300px">

                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-6"><b>Nombre:</b> {{$vehiculo->nombre_vehiculo}}   </div>
                                        <div class="col-md-6"><b>Placa:</b> {{$vehiculo->placa}}   </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6"><b>Marca:</b> {{$vehiculo->marca}}   </div>
                                        <div class="col-md-6"><b>Modelo:</b> {{$vehiculo->modelo}}   </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6"><b>Color:</b> {{$vehiculo->color}}   </div>
                                        <div class="col-md-6"><b>Estado</b> {{$vehiculo->disponibilidad}}   </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6"><b>Seguro Soat:</b> {{$vehiculo->vigencia_soat}}   </div>
                                        <div class="col-md-6"><b>Tecnomecanica:</b> {{$vehiculo->vigencia_tecnomecanica}}   </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6"><b>Precio Lavado:</b> ${{$vehiculo->precio_lavado}}   </div>
                                        <div class="col-md-6"><b>Precio Alquiler:</b> ${{$vehiculo->precio_alquiler}}   </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <a type="button" class="btn btn-success btn-circle waves-effect waves-circle waves-float d-inline" href="">
                                                <i class="material-icons">mode_edit</i>
                                            </a>
                                        </div>
                                        <div class="col-md-6">
                                            <a type="button" class=" btn_eliminar btn bg-red btn-circle waves-effect waves-circle waves-float d-inline" onclick="getid({{$vehiculo->id_vehiculo }})" >
                                                <i class="material-icons">delete</i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="body">
                        <form method="POST" action="{{route('post_estado')}}" >
                            @csrf
                            <form>
  <div class="form-group row">
    <label class="col-sm-4 col-form-label">Documentos al día</label>
    <div class="switch">
        <label>No<input type="checkbox" checked name="documento_dia" id="documento_dia"><span class="lever"></span>Si</label>
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-4 col-form-label">Luces Exteriores</label>
    <div class="switch">
        <label>No<input type="checkbox" checked name="Luces_exteriores" id="Luces_exteriores"><span class="lever"></span>Si</label>
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-4 col-form-label">Luz Interior</label>
    <div class="switch">
        <label>No<input type="checkbox" checked name="Luz_interior" id="Luz_interior"><span class="lever" ></span>Si</label>
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-4 col-form-label">Limpia Parabrisas</label>
    <div class="switch">
        <label>No<input type="checkbox" checked name="Limpia_brisas" id="Limpia_brisas"><span class="lever"></span>Si</label>
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-4 col-form-label">Pito</label>
    <div class="switch">
        <label>No<input type="checkbox" checked name="Pito" id="Pito"><span class="lever"></span>Si</label>
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-4 col-form-label">Espejos Internos-Externos</label>
    <div class="switch">
        <label>No<input type="checkbox" checked name="Espejos_externos_internos" id="Espejos_externos_internos"><span class="lever"></span>Si</label>
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-4 col-form-label">Radio</label>
    <div class="switch">
        <label>No<input type="checkbox" checked name="Radio" id="Radio"><span class="lever"></span>Si</label>
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-4 col-form-label">Llanta de repuesto</label>
    <div class="switch">
        <label>No<input type="checkbox" checked name="Llanta_repuesto" id="Llanta_repuesto"><span class="lever"></span>Si</label>
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-4 col-form-label">Gato</label>
    <div class="switch">
        <label>No<input type="checkbox" checked name="Gato" id="Gato"><span class="lever"></span>Si</label>
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-4 col-form-label">Cruceta</label>
    <div class="switch">
        <label>No<input type="checkbox" checked name="Cruceta" id="Cruceta"><span class="lever"></span>Si</label>
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-4 col-form-label">Equipo de carreteras</label>
    <div class="switch">
        <label>No<input type="checkbox" checked name="Equipo_carretera" id="Equipo_carretera"><span class="lever"></span>Si</label>
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-4 col-form-label">Emblemas</label>
    <div class="switch">
        <label>No<input type="checkbox" checked name="Emblemas" id="Emblemas"><span class="lever"></span>Si</label>
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-4 col-form-label">Antena</label>
    <div class="switch">
        <label>No<input type="checkbox" checked name="Antena" id="Antena"><span class="lever"></span>Si</label>
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-4 col-form-label">Copas</label>
    <div class="switch">
        <label>No<input type="checkbox" checked name="Copas" id="Copas"><span class="lever"></span>Si</label>
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-4 col-form-label">Kilometraje</label>
    <div class="switch">
        <label>No<input type="checkbox" checked name="Kilometraje" id="Kilometraje"><span class="lever"></span>Si</label>
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-4 col-form-label">Mantenimiento</label>
    <div class="switch">
        <label>No<input type="checkbox" checked name="mantenimiento" id="mantenimiento"><span class="lever"></span>Si</label>
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-4 col-form-label">Lavado</label>
    <div class="switch">
        <label>No<input type="checkbox" checked name="lavado" id="lavado"><span class="lever"></span>Si</label>
    </div>
</div>


<div class="form-group">
    <label for="Foto_izq">Foto de Vehiculo - Lado Izquierdo</label>
    <input accept="image/*"  class="form-control-file" type="file" name="imagen" id="Foto_izq" name="Foto_izq">
</div>

<div class="form-group">
    <label for="Foto_der">Foto de Vehiculo - Lado Derecho</label>
    <input accept="image/*"  class="form-control-file" type="file" name="imagen" id="Foto_der" name="Foto_der">
</div>

<div class="form-group">
    <label for="Foto_frente">Foto de Vehiculo - Frontal</label>
    <input accept="image/*"  class="form-control-file" type="file" name="imagen" id="Foto_frente" name="Foto_frente">
</div>

<div class="form-group">
    <label for="Foto_trasera">Foto de Vehiculo - Trasera</label>
    <input accept="image/*"  class="form-control-file" type="file" name="imagen" id="Foto_trasera" name="Foto_trasera">
</div>

<div class="form-group">
    <label for="exampleFormControlTextarea1">Observaciones</label>
    <textarea class="form-control" id="observaciones" name="observaciones" rows="3" placeholder="Digite aquí las observaciones del vehículo"></textarea>
</div>



  <button type="submit" class="btn btn-primary">GUARDAR</button>
  </div>
</form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection