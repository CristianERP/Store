<?php
session_start();
 require_once 'connection.php';
 require_once 'usuario.php';

 $user = new usuario();

 $email = $_POST['email'];
 $pass = hash('sha512', $_POST['password']);

 $datos = array(
     $email,
     $pass
 );

 echo $user -> loginUser($datos);

?>