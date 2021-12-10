
window.onload=function() {
   $(".dropdown-toggle").hide();
   $(".lugar").hide();
   $(".form_person").hide();
}

let vehiculo_solo;

$('#cedula_usuario').keyup(function() {
    var texto = $("#cedula_usuario").val();
    var tam=texto.length;
    if(tam>=6){

    

    $.get( "obtener_nombre/"+texto, function( data ) {
       
        if(data.data =="error"){
            $("#mensaje").val("Cliente No Encontrado");
            $("#mensaje").removeClass("bg-info")
            $("#mensaje").addClass("bg-warning")
        }else{
            var nombre_completo=data.data.nombres+" "+data.data.apellidos;
            $("#mensaje").val(nombre_completo);
          
            asignar_datos_cliente(data.data.id_cliente,data.data.numero_documento,data.data.nombres,data.data.apellidos,data.data.direccion,data.data.telefono)
            $("#mensaje").removeClass("bg-warning")
            $("#mensaje").addClass("bg-success")
           
        }
      });
    }

   });

   function asignar_datos_cliente(id,cedula,nombre,apellidos,direccion,telefono){
    $("#id_cliente").val(id); 
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
        asignar_saldo()
    }
    else{
        $("#lava").val(0)
        asignar_saldo()
    }
    });
$('#gridCheck1').change(function () {
   var comprobador= $('#gridCheck1').is(':checked')
    if(comprobador){
      
        $(".form_person").show();
        asignar_saldo()
    }
    else{
       
        $("#personas").val("")
        $("#ubicacion").text("")
        $("#transporte").val(0)
        $(".lugar").hide();
        $(".form_person").hide();
        $('#gridRadios1').prop("checked", false);
        $('#gridRadios2').prop("checked", false);
        asignar_saldo()
    }
});

let n_person=0;


$("#personas").on("input", function(e) {
  n_person= $(e.target).val() 
  if(n_person!=0){
    $(".lugar").show();
    asignar_saldo()
  }else{
    $(".lugar").hide();
    asignar_saldo()
  }

  });

$('#gridRadios1').change(
    function(){
        $("#ubicacion").text("Pasto")
        var p_transporte=35000*n_person
        $("#transporte").val(p_transporte)
        asignar_saldo()
    }
)
$('#gridRadios2').change(
    function(){
        $("#ubicacion").text("Ipiales")
        var p_transporte=120000*n_person
        $("#transporte").val(p_transporte)
        asignar_saldo()
    }
)




//cambios calendario

$("#desde").change(
    function(){
       fecha_desde= $("#desde").val();
       fechs=new Date(fecha_desde)
       fechs.setDate(fechs.getDate()+2)
       var formattedDate = moment(fechs).format('YYYY-MM-DD');
        
        $("#hasta").prop("min",formattedDate)
    }
)
$("#hasta").change(
    function (){
        fecha_desde= moment($("#desde").val());
        fecha_hasta=moment($("#hasta").val());
        diferencia=fecha_hasta.diff(fecha_desde,'days')
        $("#dias").val(diferencia)
       
        $("#des").text($("#desde").val())
        $("#has").text($("#hasta").val())
        asignar_saldo()
    }
)
//obtener info del vehiculo 

$("select#vehiculo").change(
    function(){
     var valor=$(this)[0].selectedIndex;
     borrar_datos_ticket_carro()
    if(valor!=0){
        $.get( "obtener_carro/"+valor, function( data ) {
       
            if(data.data =="error"){
            console.log("error");
            }else{
                $("#trans").show()
                $("#lav").show()
                vehiculo_solo=data.data;
                $("#precio_alquiler").val(vehiculo_solo.precio_alquiler)
                $("#name_car").val(vehiculo_solo.marca)
                var dias=  $("#dias").val();
                var reserva=vehiculo_solo.precio_alquiler;
                var total_reserva=((reserva*dias)*30)/100
                var t_vehiculo=dias*vehiculo_solo.precio_alquiler
                $("#t_vehiculo").val(t_vehiculo)
                $("#reserva").val(total_reserva);
                asignar_saldo()
            }
          });
    }
    else{
      borrar_datos_ticket_carro();
    }
    }
)

function borrar_datos_ticket_carro(){
    $("#trans").hide()
    $("#lav").hide() 
        $("#personas").val("")
        $("#ubicacion").text("")
        $("#transporte").val(0)
        $(".lugar").hide();
        $(".form_person").hide();
        $('#gridRadios1').prop("checked", false);
        $('#gridRadios2').prop("checked", false);
        $("#lava").val(0)
        $("#precio_alquiler").val(0)
        $("#name_car").val("Seleccione un vehículo")
        $("#t_vehiculo").val(0)
        $("#reserva").val(0)
        
        $('#gridCheck2').prop("checked", false);
        $('#gridCheck1').prop("checked", false);
        asignar_saldo()
    console.log("no hay carro");
}

function asignar_saldo(){
    var total_vehiculo =parseInt($("#t_vehiculo").val())
    var total_transporte =parseInt($("#transporte").val())
    var total_lavado =parseInt($("#lava").val())
    var total_reserva =parseInt($("#reserva").val())
    var saldo=(total_vehiculo+total_transporte+total_lavado)-total_reserva
    $("#saldo").val(saldo)
}

function saludar(d){
    alert("hola yo soy "+d)
}