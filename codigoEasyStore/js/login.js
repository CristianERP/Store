$(document).ready(function () {
    

    $("#ingreso_login").click(function () {
        
      let email = $("#inputEmail").val();
      let password = $("#inputPassword").val();
      $.ajax({
        type: "POST",
        data: { email, password },
        url: "php/login.php",
        success: function (r) {
          if (r == 1) { 
            alert("Registro Exitoso");
          location.href ="php/inicio.php";
  
          } else {
         
            alert("No se puede acceder.");
            // location.reload();
          }
        }
      });
    });
  });
