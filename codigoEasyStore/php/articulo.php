<?php
$conexion =   new mysqli("localhost", "20201B105", "iFGOkOOE10", "20201B105");

$nom= $_REQUEST["nombre"];
$cant=$_REQUEST["cantidad"];
$des= $_REQUEST["descripcion"];
$pre=$_REQUEST["precio"];
$cat=$_POST["categoria"];

$foto1= $_FILES["foto1"]["name"];
$ruta1=$_FILES["foto1"]["tmp_name"];
$size1=$_FILES["foto1"]["size"];
$tipo1=$_FILES["foto1"]["type"];
$destino1 ="../../datosEasyStore/img/".$foto1;
copy($ruta1,$destino1);

$foto2= $_FILES["foto2"]["name"];
$ruta2=$_FILES["foto2"]["tmp_name"];
$size2=$_FILES["foto2"]["size"];
$tipo2=$_FILES["foto2"]["type"];
$destino2 ="../../datosEasyStore/img/".$foto2;
copy($ruta2,$destino2);

$foto3= $_FILES["foto3"]["name"];
$ruta3=$_FILES["foto3"]["tmp_name"];
$size3=$_FILES["foto3"]["size"];
$tipo3=$_FILES["foto3"]["type"];
$destino3 ="../../datosEasyStore/img/".$foto3;
copy($ruta3,$destino3);

if($size1<=7000000 && $size2<=7000000 && $size3<=7000000){ 
    if($tipo1=="image/jpeg" || $tipo1=="image/jpg" || $tipo1=="image/png" && $tipo2=="image/jpeg" || $tipo2=="image/jpg" || $tipo2=="image/png" && $tipo3=="image/jpeg" || $tipo3=="image/jpg" || $tipo3=="image/png"){

$insertar = "INSERT INTO articulo (nombre,foto1,foto2,foto3,descripcion,cantidad,precio,categoria) VALUES ('$nom','$destino1','$destino2','$destino3','$des','$cant','$pre','$cat')";

$resultado = mysqli_query($conexion, $insertar);

if(!$resultado){
    echo "Error al registrar el articulo";

}else{
    header('Location:masart.php');
    // echo "\n Articulo registrado con exito";
}
}
}else{
    header('Location:masart.php');
    echo "1";
   
}


mysqli_close($conexion);