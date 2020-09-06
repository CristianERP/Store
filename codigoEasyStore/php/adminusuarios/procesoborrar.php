<?php
require_once '../connection.php';

$conn = new conectar();
$conexion = $conn->conexion();
$id = $_POST['id'];

$query = "DELETE FROM usuarios WHERE id_usuario ='$id'";
$result = mysqli_query($conexion,$query)
    or die ("Error al extraer datos");

if($result){
    header("Location: borrar.php");
}

?>