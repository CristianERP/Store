<?php
if($_POST['remember']==true){
    session_set_cookie_params(60*60*24*10);
    session_start();
}
else{
    session_start();
}



 require_once 'connection.php';
 require_once 'usuario.php';

 $user = new usuario();

 $email = $_POST['email'];
 $pass = hash('sha512', $_POST['password']);
 $recordar = $_POST['remember'];

 

 $datos = array(
     $email,
     $pass,
     $recordar
 );

 echo $user -> loginUser($datos);

?>