$(document).ready(function () {
  $("#reg").click(function () {
    let nombre = $("#nombre-registro").val();
    let apellido = $("#apellido-registro").val();
    let email = $("#correo-registro").val();
    let password = $("#contraseña").val();
    $.ajax({
      type: "POST",
      data: { nombre, apellido, email, password },
      url: "php/registrousuario.php",
      success: function (r) {
        if (r == 1) { 
          alert("Registro Exitoso");
          location.href ="../index.html";

        } else {
        $('#message').show();
        $("#message").css("color", "#ff0000ed");
        $('#message').text("Cuenta de correo en uso.");
          alert("Cuenta de correo en uso.");
          // location.reload();
        }
      }
    });
  });
});
