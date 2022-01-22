$('#exampleModal').modal('show');

var hoy=new Date();
var actual=moment(hoy).format('YYYY-MM-DD');
$("#desdes").prop("min",actual);

$("#desdes").change(
    function(){
       fecha_desde= $("#desdes").val();
       fechs=new Date(fecha_desde)
       fechs.setDate(fechs.getDate()+2)
       var formattedDate = moment(fechs).format('YYYY-MM-DD');
        
        $("#hastas").prop("min",formattedDate)
    }
)
$("#hastas").change(
    function (){
        fecha_desde= moment($("#desdes").val());
        fecha_hasta=moment($("#hastas").val());
        diferencia=fecha_hasta.diff(fecha_desde,'days')
        $("#dias").val(diferencia)
        console.log("diras fierentes "+diferencia);
    }
)



function mensaje_wpp_carro(auto){
    //con fecha
    var hasta= $("#hastas").val()
    var desde=$("#desdes").val()
    if(hasta!="" && desde!=""){
        window.open("https://api.whatsapp.com/send?phone=573227795422&text=Hola%20Rent%20a%20Car%20estoy%20interesado%20en%20alquilar%20el%20%20vehículo%20🚗%20"+auto+"%20desde%20fecha%20hasta%20fecha%20%0AGracias%20", "Diseño Web")

    }else{
        window.open("https://api.whatsapp.com/send?phone=573227795422&text= Hola%20Rent%20a%20Car%20estoy%20interesado%20en%20alquilar%20el%20%20vehículo%20🚗%20"+auto+"%20%2C%20necesito%20mas%20información.", "Diseño Web")

    }
    //sin fecha
   
}