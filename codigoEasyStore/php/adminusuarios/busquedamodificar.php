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
    <th>Id Usuario</th>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Email</th>
    <th>Fecha Registro</th>
    <th>Modificar</th>
    </tr>
    ";
    while ($datos = mysqli_fetch_array($result)){
        $salida.="<tr>
        <td>".$datos['id_usuario']."</td>
        <td>".$datos['nombre']."</td>
        <td>".$datos['apellido']."</td>
        <td>".$datos['email']."</td>
        <td>".$datos['fechaRegistro']."</td>
        <td><a  href='actualizar.php?id=".$datos['id_usuario']."'>Modificar</a></td>
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