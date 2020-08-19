<?php
    require_once 'connection.php';
    require_once 'usuario.php';

    $user = new usuario();

    $email = $_POST['email'];    
    $datos = array(
        $email    
    );

    echo $user -> recuperar($datos);



?>