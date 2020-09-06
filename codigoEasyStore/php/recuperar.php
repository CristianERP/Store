<?php
require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';


    require_once 'connection.php';
    require_once 'usuario.php';

    $user = new usuario();
    $conn = new conectar();
    $conexion = $conn->conexion();

    $email = $_POST['email'];
    $query = "SELECT email FROM usuarios WHERE email='$email'";

    $res = mysqli_query($conexion,$query);
    if(mysqli_num_rows($res) > 0){
        $random = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
        $pass = "";
   //Generar contraña 10 digitos
   for($i=0;$i<10;$i++) {

      $pass .= substr($random,rand(0,62),1);
   }
        $passen = hash('sha512',$pass);

        $sql = "UPDATE usuarios SET password='$passen' WHERE email ='$email'";

        $request = mysqli_query($conexion,$sql);
        $mail = new PHPMailer\PHPMailer\PHPMailer(true);


    //Server settings
    $mail->SMTPDebug = 0;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.live.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'easystore_2020@hotmail.com';                     // SMTP username
    $mail->Password   = 'tiendafacil2020';                               // SMTP password
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 25;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('easystore_2020@hotmail.com', 'EasyStore');
    $mail->addAddress($email, $email);     // Add a recipient
    

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Cambio Contrasena';
    $mail->Body    = "Hola ha solicitado un cambio de contrasena para su cuenta de EASYSTORE:<br>
     Nueva contrasena: $pass";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo '1';
  
         
    }else{
        echo 0;
    }
    
    






?>