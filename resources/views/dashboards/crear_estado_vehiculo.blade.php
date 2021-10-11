@extends('dashboards.index')
@section('registro_clientes')
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                     
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
                            <div class="row py-5">
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
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="body">
                        <form >
                            @csrf
                            <h1>hola</h1>

                            <div id="app-cover">
  <div class="row">
    <div class="toggle-button-cover">
      <div class="button-cover">
        <div class="button r" id="button-1">
          <input type="checkbox" class="checkbox">
          <div class="knobs"></div>
          <div class="layer"></div>
        </div>
      </div>
    </div>
    <div class="toggle-button-cover">
      <div class="button-cover">
        <div class="button r" id="button-2">
          <input type="checkbox" class="checkbox">
          <div class="knobs"></div>
          <div class="layer"></div>
        </div>
      </div>
    </div>
    <div class="toggle-button-cover">
      <div class="button-cover">
        <div class="button r" id="button-3">
          <input type="checkbox" class="checkbox">
          <div class="knobs"></div>
          <div class="layer"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="toggle-button-cover">
      <div class="button-cover">
        <div class="button r" id="button-4">
          <input type="checkbox" class="checkbox">
          <div class="knobs"></div>
          <div class="layer"></div>
        </div>
      </div>
    </div>
    <div class="toggle-button-cover">
      <div class="button-cover">
        <div class="button r" id="button-5">
          <input type="checkbox" class="checkbox">
          <div class="knobs"><span></span></div>
          <div class="layer"></div>
        </div>
      </div>
    </div>
    <div class="toggle-button-cover">
      <div class="button-cover">
        <div class="button r" id="button-6">
          <input type="checkbox" class="checkbox">
          <div class="knobs">
          </div>
          <div class="layer"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="toggle-button-cover">
      <div class="button-cover">
        <div class="button r" id="button-7">
          <input type="checkbox" class="checkbox">
          <div class="knobs">
            <span></span>
          </div>
          <div class="layer"></div>
        </div>
      </div>
    </div>
    <div class="toggle-button-cover">
      <div class="button-cover">
        <div class="button r" id="button-8">
          <input type="checkbox" class="checkbox">
          <div class="knobs">
            <span></span>
          </div>
          <div class="layer"></div>
        </div>
      </div>
    </div>
    <div class="toggle-button-cover">
      <div class="button-cover">
        <div class="button r" id="button-9">
          <input type="checkbox" class="checkbox">
          <div class="knobs">
            <span></span>
          </div>
          <div class="layer"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="toggle-button-cover">
      <div class="button-cover">
        <div class="button b2" id="button-10">
          <input type="checkbox" class="checkbox">
          <div class="knobs">
            <span>YES</span>
          </div>
          <div class="layer"></div>
        </div>
      </div>
    </div>
    <div class="toggle-button-cover">
      <div class="button-cover">
        <div class="button b2" id="button-11">
          <input type="checkbox" class="checkbox">
          <div class="knobs">
            <span></span>
          </div>
          <div class="layer"></div>
        </div>
      </div>
    </div>
    <div class="toggle-button-cover">
      <div class="button-cover">
        <div class="button b2" id="button-12">
          <input type="checkbox" class="checkbox">
          <div class="knobs">
            <span></span>
          </div>
          <div class="layer"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="toggle-button-cover">
      <div class="button-cover">
        <div class="button b2" id="button-13">
          <input type="checkbox" class="checkbox">
          <div class="knobs">
            <span></span>
          </div>
          <div class="layer"></div>
        </div>
      </div>
    </div>
    <div class="toggle-button-cover">
      <div class="button-cover">
        <div class="button b2" id="button-14">
          <input type="checkbox" class="checkbox">
          <div class="knobs">
            <span></span>
          </div>
          <div class="layer"></div>
        </div>
      </div>
    </div>
    <div class="toggle-button-cover">
      <div class="button-cover">
        <div class="button b2" id="button-15">
          <input type="checkbox" class="checkbox">
          <div class="knobs"></div>
          <div class="layer"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="toggle-button-cover">
      <div class="button-cover">
        <div class="button b2" id="button-16">
          <input type="checkbox" class="checkbox">
          <div class="knobs"></div>
          <div class="layer"></div>
        </div>
      </div>
    </div>
    <div class="toggle-button-cover">
      <div class="button-cover">
        <div class="button b2" id="button-17">
          <input type="checkbox" class="checkbox">
          <div class="knobs">
            <span></span>
          </div>
          <div class="layer"></div>
        </div>
      </div>
    </div>
    <div class="toggle-button-cover">
      <div class="button-cover">
        <div class="button b2" id="button-18">
          <input type="checkbox" class="checkbox">
          <div class="knobs">
            <span></span>
          </div>
          <div class="layer"></div>
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