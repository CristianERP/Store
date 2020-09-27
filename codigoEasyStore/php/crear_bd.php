<?php
$host = "localhost";
$user = "20201B105";
$pass = "iFGOkOOE10";
$db = "20201B105";
$usuarios = "usuarios";
$categoria = "articulos";
$cliente  = "cliente";
$ventas = "ventas";
$articulo = "articulo";

$connection=mysqli_connect(
    $host,
    $user,
    $pass
);
if(!$connection){
    die( "<h3>...Error aL Conectar</h3>");
}
echo "<h3>Creando Base de Datos: $db</h3>";
$sql="CREATE DATABASE IF NOT EXISTS $db";

if (!$res=mysqli_query($connection,$sql)) {
    die( "<h3>...Error a CREAR</h3>".mysqli_error($connection));
}
echo "<h3>Seleccionando Base de Datos: $db</h3>";
if (!mysqli_select_db($connection,$db)) {
    die("Error al seleccionar").mysqli_error($connection);
}
echo "<h3>Creando Tabla: $name_table </h3>";

$sql="CREATE TABLE IF NOT EXISTS $usuarios(
    id_usuario int auto_increment,
    nombre varchar(50),
    apellido varchar(50),
    email varchar(50),
    password text(10),
    fechaRegistro date,
    primary key(id_usuario)
)";

if (!$resul=mysqli_query($connection,$sql)) {
    die("Error al ejecutar: $sql").mysqli_error($db);
}


$sql="CREATE TABLE IF NOT EXISTS $categoria(
    id_categoria int auto_increment,
	id_usuario int not null,
	nombreCategoria varchar(150),
	fechaCaptura date
    primary key(id_categoria)
)";

if (!$resul=mysqli_query($connection,$sql)) {
    die("Error al ejecutar: $sql").mysqli_error($db);
}


$sql="CREATE TABLE IF NOT EXISTS $articulo(
    id int auto_increment,
    nombre varchar(50),
    foto1 varchar(100),
    foto2 varchar(100),
    foto3 varchar(100),
    descripcion varchar(150),
    cantidad int,
    precio int,
    categoria varchar(50),
    primary key(id)
)";

if (!$resul=mysqli_query($connection,$sql)) {
    die("Error al ejecutar: $sql").mysqli_error($db);
}

$sql="CREATE TABLE IF NOT EXISTS $venta(
    id_venta int not null,
	id_cliente int,
	id_producto int,
	id_usuario int,
	precio float,
	fechaCompra date
)";

if (!$resul=mysqli_query($connection,$sql)) {
    die("Error al ejecutar: $sql").mysqli_error($db);
}

$sql="CREATE TABLE IF NOT EXISTS $cliente(
    id_cliente int auto_increment,
	id_usuario int not null,
	nombre varchar(200),
	apellido varchar(200),
	direccion varchar(200),
	email varchar(200),
	telefono varchar(200),
	rfc varchar(200),
	primary key(id_cliente)
)";

if (!$resul=mysqli_query($connection,$sql)) {
    die("Error al ejecutar: $sql").mysqli_error($db);
}



echo("<h2 style='color:red'>BD CREADA</h2>");
echo("<a href='index.html'>Regredar al menu</a>")

?>