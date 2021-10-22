@extends('dashboards.index')
@section('registro_clientes')
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            REGISTRAR CONTRATO
                        </h2>
                        <br>
    <div class="contenedor">
    <p>Firma</p>
		<div class="row">
			<div class="col-md-12">
		 		<canvas id="draw-canvas" width="320" height="150">
		 		</canvas>
		 	</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<input type="button" class="button" id="draw-submitBtn" value="Crear Imagen"></input>
				<input type="button" class="button" id="draw-clearBtn" value="Borrar Canvas"></input>

						<label>Color</label>
						<input type="color" id="color">
						<label>Tamaño Puntero</label>
						<input type="range" id="puntero" min="1" default="1" max="5" width="10%">
			</div>

            
		</div>

		<br/>
		<div class="row">
			<div class="col-md-12">
				<textarea id="draw-dataUrl" class="form-control" rows="5">Base 64:</textarea>
			</div>
		</div>
		<br/>
		<div class="contenedor">
			<div class="col-md-12">
				<img id="draw-image" src="" alt=" Firma"/>
			</div>
		</div>
	</div>

<hr>

<div class="contenedor">
 <p>Firma</p>
		<div class="row">
			<div class="col-md-12">
		 		<canvas id="draw-canvas2" width="320" height="150">
		 		</canvas>
		 	</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<input type="button" class="button" id="draw-submitBtn2" value="Crear Imagen"></input>
				<input type="button" class="button" id="draw-clearBtn2" value="Borrar Canvas"></input>

						<label>Color</label>
						<input type="color" id="color2">
						<label>Tamaño Puntero</label>
						<input type="range" id="puntero2" min="1" default="1" max="5" width="10%">


			</div>

		</div>

		<br/>
		<div class="row">
			<div class="col-md-12">
				<textarea id="draw-dataUrl2" class="form-control" rows="5">Base 64:</textarea>
			</div>
		</div>
		<br/>
		<div class="contenedor">
			<div class="col-md-12">
				<img id="draw-image2" src="" alt=" Firma"/>
			</div>
		</div>
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
                        <form action="{{route('post_cliente')}}" method="POST" >
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