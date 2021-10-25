

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