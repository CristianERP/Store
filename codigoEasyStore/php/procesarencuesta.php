<?php

require_once 'connection.php';
error_reporting(0);
$conn = new conectar();
$conexion = $conn->conexion();

$nombre = $_REQUEST['nombre'];
$apellido = $_REQUEST['apellido'];
$documento = $_REQUEST['documento'];
$nacimiento = $_REQUEST['nacimiento'];
$edad = $_REQUEST['edad'];
$estado = $_REQUEST['estado'];
$sexo = $_REQUEST['sexo'];
$virt = $_REQUEST['virt'];
$masCate = $_REQUEST['masCate'];
$fav = $_REQUEST['favorito1'].$_REQUEST['favorito2'].$_REQUEST['favorito3'].$_REQUEST['favorito4'];


$query = "INSERT INTO encuesta (nombre, apellido, documento, edad, fechaNacimiento, estadoCivil, sexo, virtualpresencial, addcategoria, favoritos )
VALUES ('$nombre','$apellido','$documento','$edad','$nacimiento','$estado','$sexo','$virt','$masCate','$fav')";
$result = mysqli_query($conexion,$query);

if($result){
   ?>
       <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/StyleRegistro.css">
    <link rel="icon" href="../../datosEasyStore/img/logo.jpeg" sizes="32x32">
        </head>
        <body>
            <div class="form-signin">
            <a href="../../index.html"><img class="mb-4 rounded-circle"
                src="../../datosEasyStore/img/logo.jpeg" alt="EASY" width="72"
                height="72 "></a><br>
            <h1>ENCUESTA ENVIADA SATISFACTORIAMENTE</h1>

            </div>
           

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
  <?php  
}

?>
