<?php
session_start();

if(isset($_SESSION['usuario'])){
    $user = $_SESSION['username'];
    


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Easy Store</title>
  <!-- CSS bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/StyleSheets.css">
  <!-- Iconos -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="icon" href="../../datosEasyStore/img/logo.jpeg" sizes="32x32">
</head>

<body>




  <!-- Header contiene el icono nombre y la barra de busqueda -->
  <div class="header-main">

    <header>
      <div class="container">

        <div class="row" id="encabezado">
          <!-- Logo -->
          <a class="navbar-brand" id="logo" href="#"><img
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
      <nav class="navbar navbar-expand-sm navbar-dark " id="navbar-main">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="collapsibleNavbar">
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"> Categoria</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="codigoEasyStore/categoria.html">Vehículos</a>
                <a class="dropdown-item" href="codigoEasyStore/categoria.html">Tecnología</a>
                <a class="dropdown-item" href="codigoEasyStore/categoria.html">Hogar y Electrodomesticos</a>
                <a class="dropdown-item" href="codigoEasyStore/categoria.html">Deporte</a>
                <a class="dropdown-item" href="codigoEasyStore/categoria.html">Belleza</a>
                <a class="dropdown-item" href="codigoEasyStore/categoria.html">Juguetes</a>
                <a class="dropdown-item" href="codigoEasyStore/categoria.html">Videojuegos</a>
                <a class="dropdown-item" href="codigoEasyStore/categoria.html">Rejoles</a>
                <a class="dropdown-item" href="codigoEasyStore/categoria.html">Camaras</a>
                <a class="dropdown-item" href="codigoEasyStore/categoria.html">Música</a>
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

            <li class="navbar-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><?php echo $user; ?> </a>
              <div class="dropdown-menu">
                  <a href="#" class="dropdown-item">Perfil</a>   
                  <a href="cerrar.php" class="dropdown-item">Cerrar Sesión</a>
                  
              </div>
            </li>

            <li class="navbar-item">
              <a href="" class="nav-link" data-toggle="tooltip" data-placement="bottom" title="Carrito"><i
                  class="fa fa-shopping-cart" aria-hidden="true"></i></a>
            </li>




        </div>


        </ul>
    </div>

    </nav>

  
  </div>



  <!-- Carrusel principal -->
  <div class="">

    <div id="carrusel" class="carousel slide carousel-fade" data-ride="carousel">

      <!-- Indicadores -->
      <ul class="carousel-indicators">
        <li data-target="#carrusel" data-slide-to="0" class="active"></li>
        <li data-target="#carrusel" data-slide-to="1"></li>
        <li data-target="#carrusel" data-slide-to="2"></li>
        <li data-target="#carrusel" data-slide-to="3"></li>
      </ul>

      <!-- Carrusel -->
      <div class="carousel-inner" id="carrusel-main">
        <div class="carousel-item active">
          <img
            src="https://http2.mlstatic.com/optimize/o:f_webp/resources/exhibitors/MCO-especial-home/d9942750-bfe6-11ea-868c-330e52091dc5-home-slider_desktop.jpg"
            alt="Los Angeles" width="100%">
        </div>
        <div class="carousel-item">
          <img
            src="https://http2.mlstatic.com/optimize/o:f_webp/resources/deals/exhibitors_resources/mco-home-desktop-slider-picture-68bbb3ec-8963-45bb-81de-f7cf92cc7005.jpg"
            width="100%">
        </div>
        <div class="carousel-item">
          <img
            src="https://http2.mlstatic.com/optimize/o:f_webp/resources/deals/exhibitors_resources/mco-home-desktop-slider-picture-684c0fb6-7efc-4498-93ed-f9c70d42669f.jpg"
            width="100%">
        </div>
        <div class="carousel-item">
          <img
            src="https://http2.mlstatic.com/optimize/o:f_webp/resources/deals/exhibitors_resources/mco-home-desktop-slider-picture-a3112ed6-c0ef-4e5d-a749-d503412db305.jpg"
            width="100%">
        </div>
      </div>

      <!--Controles derecha e izquierda -->
      <a class="prev carousel-control" href="#carrusel" data-slide="prev">
        <i class="fa fa-chevron-circle-left fa-3x" aria-hidden="true"></i>
      </a>
      <a class="next carousel-control" href="#carrusel" data-slide="next">
        <i class="fa fa-chevron-circle-right fa-3x" aria-hidden="true"></i>
      </a>
    </div>
  </div>



  <!-- Carrusel de productos -->
  <div class="container mt-5 mb-5">
    <div id="producto" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner p-4" id="carrusel-productos">
        <div class="carousel-item active">
          <div class="row">

            <div class="col-md-4 produc">
              <img class="my-2 imgproduc" src="https://http2.mlstatic.com/D_Q_NP_810527-MCO42646885931_072020-AB.webp"
                alt="pc">

              <h2 class="text-center">Heading</h2>
              <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras
                mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris
                condimentum nibh.</p>
              <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
            </div>
            <div class="col-md-4 produc">
              <img class="my-2 imgproduc" src="https://http2.mlstatic.com/D_Q_NP_805388-MCO32468813014_102019-AB.webp"
                alt="">

              <h2 class="text-center">Heading</h2>
              <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras
                mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris
                condimentum nibh.</p>
              <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
            </div>
            <div class="col-md-4 produc">
              <img class="my-2 imgproduc" src="https://http2.mlstatic.com/D_Q_NP_695205-MCO42422694231_062020-AB.webp"
                alt="">

              <h2 class="text-center">Heading</h2>
              <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula
                porta felis euimdod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut
                fermentum massa justo sit amet risus.</p>
              <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
            </div>
          </div>

        </div>
        <div class="carousel-item ">
          <div class="row">

            <div class="col-md-4 produc">
              <img class="my-2 imgproduc" src="https://http2.mlstatic.com/D_Q_NP_825863-MCO31025670107_062019-AB.webp"
                alt="">

              <h2 class="text-center">Heading</h2>
              <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euimdod. Nullam id dolor id nibh ultricies
                vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo
                cursus magna.</p>
              <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
            </div>
            <div class="col-md-4 produc">
              <img class="my-2 imgproduc" src="https://http2.mlstatic.com/D_Q_NP_719607-MCO32008808117_082019-AB.webp"
                alt="">

              <h2 class="text-center">Heading</h2>
              <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras
                mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris
                condimentum nibh.</p>
              <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
            </div>
            <div class="col-md-4 produc">
              <img class="my-2 imgproduc" src="https://http2.mlstatic.com/D_Q_NP_732762-MCO32986538774_112019-AB.webp"
                alt="">

              <h2 class="text-center">Heading</h2>
              <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula
                porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut
                fermentum massa justo sit amet risus.</p>
              <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
            </div>
          </div>

        </div>

      </div>
      <a class="prev carousel-control" href="#producto" data-slide="prev">
        <i class="fa fa-chevron-circle-left fa-3x btn" aria-hidden="true"></i>
      </a>
      <a class="next carousel-control" href="#producto" data-slide="next">
        <i class="fa fa-chevron-circle-right fa-3x btn " aria-hidden="true"></i>
      </a>

    </div>

  </div>

  <!-- Categorias populares -->
  <div class="container mb-5" >
    <h2>Categorias Populares</h2>
    <div class="row row-cols-4">
      <div class="col p-1 categ" style="text-align: center;"><i class="fa fa-car fa-3x" aria-hidden="true"></i>
        <p>Vehiculo</p>
      </div>
      <div class="col p-1 categ" style="text-align: center;"><i class="fa fa-laptop fa-3x" aria-hidden="true"></i>
        <p>Computación</p>
      </div>
      <div class="col p-1 categ" style="text-align: center;"><i class="fa fa-mobile fa-3x" aria-hidden="true"></i>
        <p>Telefonos</p>
      </div>
      <div class="col p-1 categ" style="text-align: center;"><i class="fa fa-futbol-o fa-3x" aria-hidden="true"></i>
        <p>Deporte</p>
      </div>
      <div class="col p-1 categ" style="text-align: center;"><i class="fa fa-gamepad fa-3x" aria-hidden="true"></i>
        <p>Videojuegos</p>
      </div>
      <div class="col p-1 categ" style="text-align: center;"><i class="fa fa-music fa-3x" aria-hidden="true"></i>
        <p>Música</p>
      </div>
      <div class="col p-1 categ" style="text-align: center;"><i class="fa fa-camera fa-3x" aria-hidden="true"></i>
        <p>Cámaras</p>
      </div>
      <div class="col p-1 categ" style="text-align: center;"><i class="fa fa-clock-o fa-3x" aria-hidden="true"></i>
        <p>Relojes</p>
      </div>
    </div>
  </div>


  <!-- Pie de pagina -->
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

          <!-- <div class="dropup">
            <button type="button" class="btn btn-outline-light btn-block dropdown-toggle my-5" data-toggle="dropdown"
              id="button-footer">Redes</button>
            <div class="dropdown-menu text-center" id="redes">
              <a href="https://twitter.com" class="dropdown-item btn btn-block"><i class="fa fa-twitter-square" aria-hidden="true"></i>
                Twitter</a>
              <a href="https://facebook.com" class="dropdown-item btn btn-block"><i class="fa fa-facebook-official" aria-hidden="true">
                  Faceboook</i></a>
              <a href="https://linkedin.com" class="dropdown-item btn btn-block"><i class="fa fa-linkedin-square" aria-hidden="true"></i>
                Linkedin</a>

            </div>
          </div> -->



        </div>
      </div>

    </div>

  </footer>

  <!-- AJAX -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

 <!-- Jquery -->
 
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

<?php
}
else{
    header('Location: ../login.html');
}
?>