<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Plantilla Correo Rentacar</title>
</head>

<body>
    <font style = "font-family:arial;">
    <div align="center">
        
        <img src="https://rentacarpasto.com/dash/images/banner-correo.png" alt="Logo" width="100%" height="250">
    </div>
    <div align="center">
        
        <img src="{{ url('/storage/vehiculo/', $vehiculo->foto_vehiculo) }}" alt="Logo" width="100%" height="250">
    </div>
    <div align="center">
        
        <img src="{!! asset('/storage/vehiculo/'.$vehiculo->foto_vehiculo)!!}" alt="Logo" width="100%" height="250">
    </div>

    <div align="center">
        <hr width=900 color=#C52121>
        <h3>INFORMACIÓN CLIENTE</h3>
        <hr width=900 color=#C52121>
    </div>

    <div align=center>
        <table width=850>

            <tr>
                <td>
                    <label>Tipo de Documento</label>
                </td>

                <td>
                    <b id="tipo_documento">{{$cliente->tipo_documento}}</b>
                </td>
            </tr>

            <tr>
                <td>
                    <label>Número de Documento</label>
                </td>
                <td>
                    <b id="numero_documento">{{$cliente->numero_documento}}</b>
                </td>
            </tr>

            <tr>
                <td>
                    <label>Nombres</label>
                </td>
                <td>
                    <b id="nombres">{{$cliente->nombres}}</b>
                </td>
            </tr>

            <tr>
                <td>
                    <label>Apellidos</label>
                </td>
                <td>
                    <b id="apellidos">{{$cliente->apellidos}}</b>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Dirección</label>
                </td>
                <td>
                    <b id="direccion"> {{$cliente->direccion}}</b>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Teléfono/Celular</label>
                </td>
                <td>
                    <b id="telefono">{{$cliente->telefono}}</b>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Nombre Conductor Adiconal</label>
                </td>
                <td>
                    <b id="conductor_adicional">{{$cliente->conductor_adicional}}</b>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Numero Documento Conductor Adicional</label>
                </td>
                <td>
                    <b id="documento_conductor_adicional">{{$cliente->documento_conductor_adicional}}</b>
                </td>
            </tr>
        </table>
    </div>
    <hr width=900 color=#C52121>

    <div align="center">
        <h3>INFORMACIÓN VEHÍCULO</h3>
        <hr width=900 color=#C52121>
    </div>

    <div align=center>
        <table width=850>

            <tr>
                <td>
                    <label>Nombre Vehículo</label>
                </td>

                <td>
                    <b id="nombre_vehiculo">{{$vehiculo->nombre_vehiculo}}</b>
                </td>

                <td rowspan="10">
                    <img src="escarabajo.jpg" width="400" height="280" />
                </td>
            </tr>

            <tr>
                <td>
                    <label>Placa Vehículo</label>
                </td>
                <td>
                    <b id="placa">{{$vehiculo->placa}}</b>
                </td>
            </tr>

            <tr>
                <td>
                    <label>Marca Vehículo</label>
                </td>
                <td>
                    <b id="marca">{{$vehiculo->marca}}</b>
                </td>
            </tr>

            <tr>
                <td>
                    <label>Modelo Vehículo</label>
                </td>
                <td>
                    <b id="modelo">{{$vehiculo->modelo}}</b>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Color Vehículo</label>
                </td>
                <td>
                    <b id="color">{{$vehiculo->color}}</b>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Vigencia SOAT</label>
                </td>
                <td>
                    <b id="vigencia_soat">{{$vehiculo->vigencia_soat}}</b>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Vigencia Tecnomecánica (CDA)</label>
                </td>
                <td>
                    <b id="vigencia_tecnomecanica">{{$vehiculo->vigencia_tecnomecanica}}</b>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Valor Alquiler Vehículo</label>
                </td>
                <td>
                    <b id="precio_alquiler">{{$vehiculo->precio_alquiler}}</b>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Precio Lavado Vehículo</label>
                </td>
                <td>
                    <b id="precio_lavado">{{$vehiculo->precio_lavado}}</b>
                </td>
            </tr>
           

        </table>
    </div>
    <hr width=900 color=#C52121>
    <div align="center">
        <h3>INFORMACIÓN RESERVA</h3>
        <hr width=900 color=#C52121>
    </div>
    <div>
        <div align="center">
            <table border=3 width=850>
                <tr>
                    <th>VEHÍCULO</th>
                    <th>VALOR</th>
                    <th>TOTAL</th>
                </tr>

                <tr>
                    <td><label id="nombre_vehiculo">Alquiler {{$vehiculo->nombre_vehiculo}}
                    <br>Desde {{$reservas->fecha_inicio}} <br> Hasta {{$reservas->fecha_fin}} 
                    </label></td>

                    <td>
                        <b id="precio_alquiler">{{$vehiculo->precio_alquiler}} x {{$reservas->dias_reserva}} dias</b>
                    </td>
                    <td>
                        <b>
                            <?php $total=$vehiculo->precio_alquiler*$reservas->dias_reserva;?>
                            {{$total}}
                        </b>
                    </td>
                </tr>
                <tr>
                    <td>TRANSPORTE {{$reservas->lugar}}</td>
                    <td><b id="">{{$reservas->precio_transporte}}</b></td>
                    <td>
                        <b>
                            {{$reservas->precio_transporte}}
                        </b>
                    </td>
                </tr>
                @if ($reservas->lavado==1)
                    <tr>
                        <td>LAVADO VEHÍCULO</td>
                        <td><b id="precio_lavado">{{$vehiculo->precio_lavado}}</b></td>
                        <td>
                            <b>
                                {{$vehiculo->precio_lavado}}
                            </b>
                        </td>
                    </tr>
                @endif
                <tr>
                    <td>RESERVA</td>
                    <td>
                        <b id="">30% </b>
                    </td>
                    <td>
                        <b>
                            {{$reservas->valor_reserva}}
                        </b>
                    </td>
                </tr>

                <tr>
                    <td>DESCUENTO</td>
                    <td>
                        <b id=""></b>
                    </td>
                    <td>
                        <b>
                            {{$reservas->descuento}}
                        </b>
                    </td>
                </tr>


                <tr>
                    <td>SALDO</td>
                    <td>
                        <b id=""></b>
                    </td>
                    <td>
                        <b>
                            {{$reservas->saldo}}
                        </b>
                    </td>
                </tr>
               
            </table>
            <hr width=900 color=#C52121>
        </div>
    </div>

    <div>
        <div align="center">
            <table width=850>
                <tr>
                    <th align="justify">
                        <p style = "font-family:arial;">
                            El vehículo estará sujeto a las fechas solicitadas para los desplazamientos, por
                            esta razón se debe comunicar lo antes posible los días exactos de los recorridos
                            para no ceder el vehículo que usted escoja a otras actividades.
                            <br><br>
                            Con anticipación se debe hacer una reserva de los vehículos por medio de una
                            consignación a una cuenta bancaria del 30% del total de la renta, que se indicaría
                            posteriormente y el excedente se pagará contra entrega.
                            <br><br>
                            Si el vehículo lo necesita en el aeropuerto el costo adicional será de 35.000 por
                            trayecto.
                            <br><br>
                            Recuerde que son días de 24 horas, a la hora de entrega el 1er día será la misma
                            hora para la devolución el último día. Si lo dejan más tiempo del acordado, se
                            hará un acuerdo de pago por el tiempo adicional.
                            <br><br>
                            Los vehículos cuentan con los seguros correspondientes, incluidos en el precio. El
                            kilometraje es libre según a la zona que vayan, son 200 km por día.
                            <br><br>
                            Para la renta pedimos una garantía de 1.000.000 con tarjeta de crédito por vehículo,
                            y 1.500.000 por las camionetas.
                            <br><br>
                            Quedo atenta a sus comentarios y solicitudes.
                        </p>
                    </th>
                </tr>

            </table>
        </div>
    </div>

    <div>
        <div align="center">
            <table width=850>
                <tr>
                    <th align="justify">
                        <p>
                            ___________________________________
                            <br>
                            AMANDA ELIZABETH BASTIDAS
                            <br>
                            Gerente administrativo
                            <br>
                            Cel. 3204408344
                        </p>
                    </th>
                </tr>

            </table>
            <hr width=900 color=#C52121>
        </div>
    </div>

    <div align="center">
        RENT A CAR PASTO. Cel: 320 440 8344 www.rentacarpasto.com
    </div>
</font>
</body>

</html>