<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Easy Store</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="css/StyleSheets.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="icon" href="../../datosEasyStore/img/logo.jpeg" sizes="32x32">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/StyleSheets.css">
</head>
<body>
	 <!-- Header contiene el icono nombre y la barra de busqueda -->
  <div class="header-main">

    <header>
      <div class="container">

        <div class="row">
          <!-- Logo -->
          <a class="navbar-brand" id="logo" href="../../index.html"><img
              src="../../datosEasyStore/img/logo.jpeg"
              class="rounded-circle my-2" alt="ES" style="width: 60px;"></a>
          <!-- Titulo -->
          <h2 class="my-4 mr-sm-0 text-light" id="titulo">Easy Store</h2>
          <!-- Barra de busqueda -->
          <div class="ml-auto my-auto">

            <form class="form-inline my-lg-0" id="buscador">
              <input type="search" id="search" placeholder="Search" class="form-control mr-1">
              <button class="btn btn-warning my-sm-0" type="submit"><i class="fa fa-search"
                  aria-hidden="true"></i></button>
            </form>
          </div>


        </div>
      </div>
    </header>
    <!-- Barra de navegacion -->
    <div class="container">
      <nav class="navbar navbar-expand-sm navbar-dark ">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="collapsibleNavbar">
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"> Categoria</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="categoriav.html">Vehículos</a>
                <a class="dropdown-item" href="categoriat.html">Tecnología</a>
                <a class="dropdown-item" href="categoria.html">Hogar y Electrodomesticos</a>
                <a class="dropdown-item" href="categoria.html">Deporte</a>
                <a class="dropdown-item" href="categoria.html">Belleza</a>
                <a class="dropdown-item" href="categoria.html">Juguetes</a>
                <a class="dropdown-item" href="categoria.html">Videojuegos</a>
                <a class="dropdown-item" href="categoria.html">Rejoles</a>
                <a class="dropdown-item" href="categoria.html">Camaras</a>
                <a class="dropdown-item" href="categoria.html">Música</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Historial</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Tiendas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Vender</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Ayuda</a>
            </li>

            <li class="navbar-item">
              <a href="registro.html" class="nav-link">Crear cuenta</a>
            </li>
            <li class="navbar-item">
              <a href="login.html" class="nav-link">Ingresa</a>
            </li>
            <li class="navbar-item">
              <a href="" class="nav-link" data-toggle="tooltip" data-placement="bottom" title="Carrito"><i
                  class="fa fa-shopping-cart" aria-hidden="true"></i></a>
            </li>




        </div>


        </ul>
        </nav>
    </div>



  
  </div>




  <div class="container">



  <div class="col-lg-12" style="margin-bottom: 10px">
		
		<div class="jumbotron mt-2" >
  		<div class="container-fluid">
  		<img   style="width: 100%; height: 80PX" src="../../datosEasyStore/img/vehiculos.jpeg">
    	</div>
		</div>

		

<div class="templade">
<?php
  include("pintamev.php");
?>
</div>

			
	
  </div>
  </div>


<footer>
    <div class="btn btn-outline-light" id="buttonfooter">Mas Información </div>
    <div class="footer container" id="footer">
      <div class="row">
        <div class="col-md">
          <h5 class="text-light">Acerca Easy Store</h5>
          <div>
            <p>
              <a href="#" class="text-light btn">¿Quiénes Somos?</a>

            </p>
            <p>
              <a href="#" class="text-light btn">Para proveedores</a>

            </p>
            <p>
              <a href="#" class="text-light btn">Términos de Uso</a>

            </p>
          </div>

        </div>
        <div class="col-md">
          <h5 class="text-light">Servicios</h5>
          <p>
            <a href="#" class="text-light btn">Preguntas Frecuentes</a>

          </p>
          <p>
            <a href="#" class="text-light btn">Aplicar mi garantía</a>

          </p>
          <p>
            <a href="#" class="text-light btn">Contacto</a>

          </p>

        </div>
        
        <div class="col-md text-center" id="redes">
          <div>
            <h4 class="text-light">Cristian Rojas Pedraza</h4>

            <a href="https://twitter.com/crojas_p" class="btn text-light"><i class="fa fa-twitter-square fa-lg" aria-hidden="true"></i>
              </a>
            <a href="https://facebook.com" class="btn text-light"><i class="fa fa-facebook-official fa-lg" aria-hidden="true">
                </i></a>
            <a href="https://www.linkedin.com/in/cristian-rojas-1a63871b2/" class="btn text-light"><i class="fa fa-linkedin-square fa-lg" aria-hidden="true"></i>
              </a>
           
           
          </div>
          <div class="mt-4">
            <h4 class="text-light">Sebastian Vargas</h4>
            <a href="https://twitter.com" class="btn text-light"><i class="fa fa-twitter-square fa-lg" aria-hidden="true"></i>
              </a>
            <a href="https://facebook.com" class="btn text-light"><i class="fa fa-facebook-official fa-lg" aria-hidden="true">
                </i></a>
            <a href="https://linkedin.com" class="btn text-light"><i class="fa fa-linkedin-square fa-lg" aria-hidden="true"></i>
              </a>
           
           
          </div>

        </div>
      </div>

    </div>

  </footer>



  <script src="http://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
    crossorigin="anonymous"></script>
  <script src="../js/app.js"></script>
</body>
</html>