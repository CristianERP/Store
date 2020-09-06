<?php

require_once '../connection.php';

$conn = new conectar();
$conexion = $conn->conexion();
$salida= "";
$id = $_GET['id'];
$query = "SELECT * FROM usuarios WHERE id_usuario='$id'";


if(isset($_POST['buscar'])){
    $q = mysqli_real_escape_string($conexion,$_POST['buscar']);
    $query = "SELECT  id_usuario, nombre , apellido, email, fechaRegistro FROM usuarios 
    WHERE nombre LIKE '%".$q."%' OR apellido LIKE '%".$q."%'";
}
$result = mysqli_query($conexion,$query) or die ("Error al extraer datos");
if($res = mysqli_num_rows($result)>0){
    $salida.= "<div class='table-main'>
    <h2 class='text-center'>Modificar</h2>
    <table class='table table-dark table-hover'>
    <tr>
    <th>Id Usuario</th>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Email</th>
    <th>Fecha Registro</th>
    <th>Modificar</th>
    </tr>
    ";
    while ($datos = mysqli_fetch_array($result)){
        $salida.="<form action='actualizarproceso.php?id=".$datos['id_usuario']."' method='POST'><tr>
        <td>".$datos['id_usuario']."</td>
        <td><input type='text' name='nombr' value=".$datos['nombre']." ></td>
        <td><input type='text' name='apelli' value=".$datos['apellido']."></td>
        <td><input type='text' name='emai' value=".$datos['email']."></td>
        <td>".$datos['fechaRegistro']."</td>
        <td><button type='submit' class='btn btn-warning'>Realizar</button></td>
        </tr>
        </form>
        ";
    }

    $salida.="</table>
        </div>";

}else{
    $salida.= "No hay coincidencias.";

}

echo $salida;
mysqli_close($conexion);    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/StyleSheets.css">
    <link rel="icon" href="../../../datosEasyStore/img/logo.jpeg" sizes="32x32">
</head>
<body>


<script src="http://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
    crossorigin="anonymous"></script>
</body>
</html>