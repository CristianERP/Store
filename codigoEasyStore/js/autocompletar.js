$(document).ready(function () {

    $("#nombre").keyup(function () {
      if($('#nombre').val()){
        let nombre = $("#nombre").val();
      $.ajax({
        type: "POST",
        data: {nombre},
        url: "autocompletar.php",
        success: function (r) {
          console.log(r);

          
            let names = JSON.parse(r);
            let template = "";
          names.forEach((n) => {
            console.log(n);
            template += `<li> 
                        ${n.nombre}
                    </li>`;
          });
          $("#autocompletar").html(template);
         
        }
      });

      }
        
      
    });
  });


