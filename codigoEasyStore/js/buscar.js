$(buscar_datos());


function buscar_datos(buscar){
    $.ajax({
        type: "POST",
        data: {buscar},
        url: "busqueda.php",
        success: function (r) {
            console.log(r);
          $("#resultado").html(r);
         
        }
      });

}

$("#buscar").keyup(function (){
    if($('#buscar').val() != ""){
        let valor = $('#buscar').val()
        buscar_datos(valor);
    } else{
        buscar_datos();
    }
});


