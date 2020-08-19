$(document).ready(function () { 
  generateCapatcha();
});
// Generador del CAPTCHA
function generateCapatcha() {
  var chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz";
  var string_length = 4;
  var randomstring = "";
  for (var i = 0; i <= string_length; i++) {
    var rnum = Math.floor(Math.random() * chars.length);
    randomstring += chars.substring(rnum, rnum + 1);
  }
  document.getElementById("captcha-img").value = randomstring;
}
// Funcion para validar el captcha y campos
function validateCaptcha() {
  var first = document.getElementById("nombre-registro").value;
  var last = document.getElementById("apellido-registro").value;
  var email = document.getElementById("correo-registro").value;
  var pass = document.getElementById("contraseña").value;
  var pass2 = document.getElementById("contraseña2").value;
  var correo = /\w+@+\w+\.[a-z]/; 
  var clave = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/;

  // Valida si los campos estan vacios

  if (first == "" || last == "" || email == "" || pass == "" || pass2 == "") {
    alert("Por favor llene los campos");
    document.getElementById("message").innerHTML = "Por favor llene los campos";
    document.getElementById("message").style.color = "#ff0000ed";
  } else {
    var image = document.getElementById("captcha-img").value;
    var captchaText = document.getElementById("captch-text").value;

    // Valida el captcha
    if (image == captchaText) {

      // Valida si las contraseñas coinciden
      if (pass == pass2) {

        // Valida el formato del correo
        if (correo.test(email)) {

          // Valida el formato del correo
          if (clave.test(pass)) {
            document.getElementById("message").innerHTML = "";
            document.getElementById("message").style.color = "#0a756b";
            document.getElementById("reg").disabled = false;
          } else {
            document.getElementById("message").innerHTML =
              "Ingrese una contraseña valida.";
            document.getElementById("message").style.color = "#ff0000ed";
          }
        } else {
          document.getElementById("message").innerHTML =
            "Ingrese un correo valido.";
          document.getElementById("message").style.color = "#ff0000ed";
        }
      } else {
        document.getElementById("message").innerHTML = "Contraseña Incorrecta";
        document.getElementById("message").style.color = "#ff0000ed";
      }
    } else {
      document.getElementById("message").innerHTML =
        "Por favor ingrese un captcha valido";
      document.getElementById("message").style.color = "#ff0000ed";
    }
  }
}

function validarCaptcha(){
  var image = document.getElementById("captcha-img").value;
  var captchaText = document.getElementById("captch-text").value;
  var emailrec = document.getElementById('emailrec').value;
  var correo = /\w+@+\w+\.[a-z]/;

  if(emailrec == ""){
    document.getElementById("message").innerHTML = "Por favor llene los campos";
    document.getElementById("message").style.color = "#ff0000ed";
  }
  else{
    if(!correo.test(emailrec)){
    document.getElementById("message").innerHTML = "Ingrese un correo valido.";
    document.getElementById("message").style.color = "#ff0000ed";

    }
    else{
      if(image==captchaText){
        document.getElementById("message").innerHTML = "";
        document.getElementById("rec").disabled = false;

      }
      else{
        document.getElementById("message").innerHTML = "Por favor ingrese un captcha valido.";
        document.getElementById("message").style.color = "#ff0000ed";
      }
    }
  }
}