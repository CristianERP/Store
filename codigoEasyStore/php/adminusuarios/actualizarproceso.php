<?php

require_once '../connection.php';

$conn = new conectar();
$conexion = $conn->conexion();

$id=$_REQUEST['id'];
$nombre=$_POST['nombr'];
$apellido=$_POST['apelli'];
$email=$_POST['emai'];


$query = "UPDATE usuarios 
SET nombre='$nombre', apellido='$apellido', email='$email'
WHERE id_usuario='$id'";
$result = mysqli_query($conexion,$query)
    or die ("Error al extraer datos");

header('Location:modificar.php');
?>