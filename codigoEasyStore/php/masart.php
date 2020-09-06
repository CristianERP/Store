<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Easy Shop</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/StyleRegistro.css">
    <link rel="icon" href="../../datosEasyStore/img/logo.jpeg" sizes="32x32">
</head>

<body class="text-center">
    <!-- Formato registro -->
    <div class="form-signin">
    <form action="articulo.php" method="post" enctype="multipart/form-data" class="" 
    >
        <a href="../index.html"><img class="mb-4 rounded-circle"
                src="../../datosEasyStore/img/logo.jpeg" alt="EASY" width="72"
                height="72 "></a>
        <h1 class="h3 mb-3 font-weight-normal">Añadir Artículo</h1>
        <label for="" class="sr-only">Nombre</label>
        <input type="text" class="form-control"   name="nombre" placeholder="Nombre" required
            autofocus="">
        <label for="" class="sr-only">Descripción</label>
        <input type="text" class="form-control"  name="descripcion" placeholder="Descripción" required>
        <label for="" class="sr-only">Cantidad</label>
        <input type="text" class="form-control"   name="cantidad" placeholder="Cantidad"
            required>
        <label for="" class="sr-only">Precio</label>
        <input type="text" class="form-control"   name="precio" placeholder="Precio" required>
        <label for="" class="sr-only">Categoria</label>
        <select id="cars" class="form-control" name="categoria">
        <option value="veh">Vehículos</option>
        <option value="tecn">Tecnología</option>
        <option value="">Hogar y Electrodomesticos</option>
        <option value="">Deporte</option>
        <option value="">Belleza</option>
        <option value="">Juguetes</option>
        <option value="">Videojuegos</option>
        <option value="">Rejoles</option>
        <option value="">Camaras</option>
        <option value="">Música</option>
        </select>
        <label for="" class="sr-only">Foto</label>
        <input type="file" class="form-control"  name="foto1" 
            required>    
        <label for="" class="sr-only">Foto</label>
        <input type="file" class="form-control"  name="foto2" 
            required>  
        <label for="" class="sr-only">Foto</label>
        <input type="file" class="form-control"  name="foto3" 
            required>          
        

        <input type="submit" value="Submit" class="btn btn-primary my-2">
        

    </form>
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
    <script src="js/registro.js"></script>

</body>

</html>