<?php
    require_once 'connection.php';
    require_once 'usuario.php';

    $user = new usuario();

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $pass = hash('sha512', $_POST['password']);

    $datos = array(
        $nombre,
        $apellido,
        $email,
        $pass
    );

    echo $user -> registrousuario($datos);



?>