$(document).ready(function () {

    $("#ingreso_login").click(function () {
        
      let email = $("#inputEmail").val();
      let password = $("#inputPassword").val();
      var remember = $("#remember").prop('checked');
      $.ajax({
        type: "POST",
        data: { email, password, remember },
        url: "php/login.php",
        success: function (r) {
          if (r == 1) { 
            alert("Acceso Exitoso");
          location.href ="php/inicio.php";
  
          } else {  
            alert("No se puede acceder.");
            location.href = "../index.html"
            // location.reload();
          }
        }
      });
    });
  });
