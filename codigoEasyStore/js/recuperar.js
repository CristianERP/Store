$(document).ready(function () {
    $("#rec").click(function () {
      let email = $("#emailrec").val();
      $.ajax({
        type: "POST",
        data: {email},
        url: "php/recuperar.php",
        success: function (r) {
          if (r == 1) { 
            alert("Por favor revise su correo.");
            location.reload();
          } else {
          $('#message').show();
          $("#message").css("color", "#ff0000ed");
          $('#message').text("No existe usuario.");
            alert("No existe usuario.");
            // location.reload();
          }
        }
      });
    });
  });
  