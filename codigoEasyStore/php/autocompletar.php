<?php
require_once 'connection.php';


$conn = new conectar();
$conexion = $conn->conexion();


$nombres = $_POST['nombre'];

if(!empty($nombres)){
    $query = "SELECT * FROM usuarios WHERE nombre LIKE '$nombres%'";
    $result = mysqli_query($conexion, $query);
    if(!$result){
        die('Error de consulta '. mysqli_error($conexion));

    }

    $json = array();
    while($row = mysqli_fetch_array($result)){
        $json[] = array(
            'id' => $row['id_usuario'],
            'nombre' => $row['nombre'],
            'apellido' => $row['apellido']
        );  

    }
    $jsonstring = json_encode($json);
    echo $jsonstring;

}

?>
