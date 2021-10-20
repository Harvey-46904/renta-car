

$('#cedula_usuario').keyup(function() {
    var texto = $("#cedula_usuario").val();
    
    $.get( "obtener_nombre/"+texto, function( data ) {
       
        if(data.data =="error"){
            $("#usuario").val("existe");
        }else{
           
            $("#usuario").val(data.data.nombres+" "+data.data.apellidos);
        }
      });

    
   });