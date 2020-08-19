CREATE DATABASE 20201B105;

USE 20201B105;

CREATE TABLE usuarios(
				id_usuario int auto_increment,
				nombre varchar(50),
				apellido varchar(50),
				email varchar(50),
				password text(50),
				fechaRegistro date,
				primary key(id_usuario)
					);

CREATE TABLE categorias (
				id_categoria int auto_increment,
				id_usuario int not null,
				nombreCategoria varchar(150),
				fechaCaptura date,
				primary key(id_categoria)
						);

CREATE TABLE imagenes(
				id_imagen int auto_increment,
				id_categoria int not null,
				nombre varchar(500),
				ruta varchar(500),
				fechaSubida date,
				primary key(id_imagen)
					);
CREATE TABLE articulos(
				id_producto int auto_increment,
				id_categoria int not null,
				id_imagen int not null,
				id_usuario int not null,
				nombre varchar(50),
				descripcion varchar(500),
				cantidad int,
				precio float,
				fechaCaptura date,
				primary key(id_producto)

						);

CREATE TABLE clientes(
				id_cliente int auto_increment,
				id_usuario int not null,
				nombre varchar(200),
				apellido varchar(200),
				direccion varchar(200),
				email varchar(200),
				telefono varchar(200),
				rfc varchar(200),
				primary key(id_cliente)
					);
-- Recuerda agregar el id de usuario por favor 
CREATE TABLE ventas(
				id_venta int not null,
				id_cliente int,
				id_producto int,
				id_usuario int,
				precio float,
				fechaCompra date
					);