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
						<div class="body">
                        <form action="" method="POST" >
                            @csrf
                            <label>Fecha de Salida</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="date"  class="form-control">
                                </div>
                            </div>
                            <label>KM Salida</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <label>Hora Salida</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="HH:MM">
                                </div>
                            </div>
                            <label>KM Permitido</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <label>Combustible de Salida</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="R  1/2  1/4  3/4 FULL">
                                </div>
                            </div>
							<label>Destino</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <label>Fecha de Entrada</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="date"  class="form-control">
                                </div>
                            </div>
							<label>Hora Entrada</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="HH:MM">
                                </div>
                            </div>
							<label>KM Entrada</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
							<label>KM por Cobrar</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
							<label>Combustible de Entrada</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="R  1/2  1/4  3/4 FULL">
                                </div>
                            </div>
							<label>No. Días</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
							<br>

							
							<div class="form-group row">
                                    <label class="col-md-8 text-center text-center col-form-label">Documentos al día</label>
                                    <div class="switch">
                                        <label>No<input type="checkbox" checked name="documento_dia"
                                                id="documento_dia"><span class="lever"></span>Si</label>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-8 text-center  col-form-label">Luces Exteriores</label>
                                    <div class="switch">
                                        <label>No<input type="checkbox" checked name="Luces_exteriores"
                                                id="Luces_exteriores"><span class="lever"></span>Si</label>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-8 text-center col-form-label">Luz Interior</label>
                                    <div class="switch">
                                        <label>No<input type="checkbox" checked name="Luz_interior" id="Luz_interior"><span
                                                class="lever"></span>Si</label>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-8 text-center col-form-label">Limpia Parabrisas</label>
                                    <div class="switch">
                                        <label>No<input type="checkbox" checked name="Limpia_brisas"
                                                id="Limpia_brisas"><span class="lever"></span>Si</label>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-8 text-center col-form-label">Pito</label>
                                    <div class="switch">
                                        <label>No<input type="checkbox" checked name="Pito" id="Pito"><span
                                                class="lever"></span>Si</label>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-8 text-center col-form-label">Espejos Internos-Externos</label>
                                    <div class="switch">
                                        <label>No<input type="checkbox" checked name="Espejos_externos_internos"
                                                id="Espejos_externos_internos"><span
                                                class="lever"></span>Si</label>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-8 text-center col-form-label">Radio</label>
                                    <div class="switch">
                                        <label>No<input type="checkbox" checked name="Radio" id="Radio"><span
                                                class="lever"></span>Si</label>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-8 text-center col-form-label">Llanta de repuesto</label>
                                    <div class="switch">
                                        <label>No<input type="checkbox" checked name="Llanta_repuesto"
                                                id="Llanta_repuesto"><span class="lever"></span>Si</label>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-8 text-center col-form-label">Gato</label>
                                    <div class="switch">
                                        <label>No<input type="checkbox" checked name="Gato" id="Gato"><span
                                                class="lever"></span>Si</label>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-8 text-center col-form-label">Cruceta</label>
                                    <div class="switch">
                                        <label>No<input type="checkbox" checked name="Cruceta" id="Cruceta"><span
                                                class="lever"></span>Si</label>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-8 text-center col-form-label">Equipo de carreteras</label>
                                    <div class="switch">
                                        <label>No<input type="checkbox" checked name="Equipo_carretera"
                                                id="Equipo_carretera"><span class="lever"></span>Si</label>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-8 text-center col-form-label">Emblemas</label>
                                    <div class="switch">
                                        <label>No<input type="checkbox" checked name="Emblemas" id="Emblemas"><span
                                                class="lever"></span>Si</label>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-8 text-center col-form-label">Antena</label>
                                    <div class="switch">
                                        <label>No<input type="checkbox" checked name="Antena" id="Antena"><span
                                                class="lever"></span>Si</label>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-8 text-center col-form-label">Copas</label>
                                    <div class="switch">
                                        <label>No<input type="checkbox" checked name="Copas" id="Copas"><span
                                                class="lever"></span>Si</label>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-8 text-center col-form-label">Kilometraje</label>
                                    <div class="switch">
                                        <label>No<input type="checkbox" checked name="Kilometraje" id="Kilometraje"><span
                                                class="lever"></span>Si</label>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-8 text-center col-form-label">Mantenimiento</label>
                                    <div class="switch">
                                        <label>No<input type="checkbox" checked name="mantenimiento"
                                                id="mantenimiento"><span class="lever"></span>Si</label>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-8 text-center col-form-label">Lavado</label>
                                    <div class="switch">
                                        <label>No<input type="checkbox" checked name="lavado" id="lavado"><span
                                                class="lever"></span>Si</label>
                                    </div>
                                </div>
                            <br>
                            <button type="submit" class="btn btn-primary m-t-15 waves-effect">GUARDAR</button>
                        </form>
                    </div>
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

                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>
@endsection