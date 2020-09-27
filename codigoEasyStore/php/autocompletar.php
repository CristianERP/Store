<?php

    require_once 'connection.php';


    $conn = new conectar();
    $conexion = $conn->conexion();





    $query = "SELECT * FROM usuarios";
    $result = mysqli_query($conexion, $query);
    $array = array();
    $array2 = array();
    if($result){
        while($row = mysqli_fetch_array($result)){
            $nombres = utf8_encode($row['nombre']);
            $apellidos = utf8_encode($row['apellido']);
            array_push($array,$nombres);
            array_push($array2,$apellidos);
        }
    }
    $nombresJson = json_encode($array);
    $apellidosJson = json_encode($array2);
    return [$nombresJson,$apellidosJson];

?>