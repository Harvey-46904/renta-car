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