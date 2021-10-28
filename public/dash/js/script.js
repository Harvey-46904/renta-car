
window.onload=function() {
   $(".dropdown-toggle").hide();
   $(".lugar").hide();
}

let vehiculo_solo;

$('#cedula_usuario').keyup(function() {
    var texto = $("#cedula_usuario").val(); 
    $.get( "obtener_nombre/"+texto, function( data ) {
       
        if(data.data =="error"){
            $("#mensaje").val("Cliente No Encontrado");
            $("#mensaje").removeClass("bg-info")
            $("#mensaje").addClass("bg-warning")
        }else{
            $("#mensaje").val("Cliente Encontrado");
          
            asignar_datos_cliente(data.data.id_cliente,data.data.numero_documento,data.data.nombres,data.data.apellidos,data.data.direccion,data.data.telefono)
            $("#mensaje").removeClass("bg-warning")
            $("#mensaje").addClass("bg-success")
           
        }
      });
   });

   function asignar_datos_cliente(id,cedula,nombre,apellidos,direccion,telefono){
    $("#id").val(id); 
    $("#documento").val(cedula);
    $("#nombres").val(nombre);
    $("#apellidos ").val(apellidos);
    $("#direccion").val(direccion);
    $("#telefono").val(telefono);
   }

  $('#gridCheck2').change(function () {
   
    var comprobador= $('#gridCheck2').is(':checked')
    if(comprobador){
        $("#lava").val(vehiculo_solo.precio_lavado)
    }
    else{
        $("#lava").val(0)
    }
    });
$('#gridCheck1').change(function () {
   var comprobador= $('#gridCheck1').is(':checked')
    if(comprobador){
        $(".lugar").show();
    }
    else{
        $("#ubicacion").text("")
        $("#transporte").val(0)
        $(".lugar").hide();
        $('#gridRadios1').prop("checked", false);
        $('#gridRadios2').prop("checked", false);
    }
});
$('#gridRadios1').change(
    function(){
        $("#ubicacion").text("Pasto")
        $("#transporte").val(35000)
    }
)
$('#gridRadios2').change(
    function(){
        $("#ubicacion").text("Ipiales")
        $("#transporte").val(120000)
    }
)



//cambios calendario

$("#desde").change(
    function(){
       fecha_desde= $("#desde").val();
        console.log(fecha_desde);
        $("#hasta").prop("min",fecha_desde)
    }
)
$("#hasta").change(
    function (){
        fecha_desde= moment($("#desde").val());
        fecha_hasta=moment($("#hasta").val());
        diferencia=fecha_hasta.diff(fecha_desde,'days')
        $("#dias").val(diferencia-1)
        $("#des").text($("#desde").val())
        $("#has").text($("#hasta").val())
    }
)
//obtener info del vehiculo 

$("select#vehiculo").change(
    function(){
     var valor=$(this)[0].selectedIndex;
    if(valor!=0){
        $.get( "obtener_carro/"+valor, function( data ) {
       
            if(data.data =="error"){
            console.log("error");
            }else{
                vehiculo_solo=data.data;
                $("#precio_alquiler").val(vehiculo_solo.precio_alquiler)
                $("#name_car").val(vehiculo_solo.marca)
                var dias=  $("#dias").val();
                var reserva=vehiculo_solo.precio_alquiler;
                var total_reserva=((reserva*dias)*30)/100
                $("#reserva").val(total_reserva);
            }
          });
    }
    }
)