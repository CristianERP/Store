$(document).ready(function () {
  generateCapatcha();
});
// Generados del CAPTCHA
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
// Funcion para validadar el captcha
function validateCaptcha() {

  var first = document.getElementById("nombre-registro").value;
  var last = document.getElementById("apellido-registro").value;
  var email = document.getElementById("correo-registro").value;
  var pass = document.getElementById('contraseña').value;
  var pass2 = document.getElementById('contraseña2').value;
  
  if (first == "" || last == "" || email == "") {
    alert("Por favor llene los campos")
    document.getElementById("message").innerHTML = "Por favor llene los campos";
    document.getElementById("message").style.color = "#ff0000ed";
  } else {
    var image = document.getElementById("captcha-img").value;
    var captchaText = document.getElementById("captch-text").value;
    if (image == captchaText) {
      
      if(pass == pass2){
        document.getElementById("message").innerHTML =
        "";
      document.getElementById("message").style.color = "#0a756b";
      document.getElementById("reg").disabled = false;
      }
      else{
        document.getElementById("message").innerHTML =
        "Contraseña Incorrecta";
      document.getElementById("message").style.color = "#ff0000ed";
      }
      
    } else {   
      document.getElementById("message").innerHTML =
        "Por favor ingrese un captcha valido";
      document.getElementById("message").style.color = "#ff0000ed";
    }
   
  }
}
