<?php

require_once '../connection.php';

$conn = new conectar();
$conexion = $conn->conexion();
$salida= "";
$query = "SELECT * FROM usuarios";


if(isset($_POST['buscar'])){
    $q = mysqli_real_escape_string($conexion,$_POST['buscar']);
    $query = "SELECT  id_usuario, nombre , apellido, email, fechaRegistro FROM usuarios 
    WHERE nombre LIKE '%".$q."%' OR apellido LIKE '%".$q."%'";
}
$result = mysqli_query($conexion,$query) or die ("Error al extraer datos");
if($res = mysqli_num_rows($result)>0){
    $salida.= "<div class='table-main'>
    <table class='table table-dark table-hover'>
    <tr>
    <th id='id'>Id Usuario</th>
    <th id='id'>Nombre</th>
    <th id='id'>Apellido</th>
    <th id='id'>Email</th>
    <th id='id'>Fecha Registro</th>
    </tr>
    ";
    while ($datos = mysqli_fetch_array($result)){
        $salida.="<tr>
        <td>".$datos['id_usuario']."</td>
        <td>".$datos['nombre']."</td>
        <td>".$datos['apellido']."</td>
        <td>".$datos['email']."</td>
        <td>".$datos['fechaRegistro']."</td>
        </tr>
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