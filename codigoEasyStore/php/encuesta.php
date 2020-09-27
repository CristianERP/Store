<?php
include('autocompletar.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    
    <link rel="stylesheet" href="../css/Styleencuesta.css">
</head>

<body>
    <div class="contenedor">
        <a href="../../index.html"><img class="mb-4 rounded-circle" src="../../datosEasyStore/img/logo.jpeg" alt=""
            width="72" height="72 "></a>
        <form action="procesarencuesta.php" autocomplete="off" id="formEncuesta" method='POST'>
      
        <label for="">Nombre:
        <input type="text" class="form-control" name="nombre" id="nombre">
        <label for="">Apellido:
        <input type="text" class="form-control" name="apellido" id="apellido">
        <label for="">Documento:
        <input type="text" class="form-control" name="documento" id="documento">
        <label for="">Fecha de Nacimineto
        <input type="date" max="2004-01-01" min="1960-01-01" name="nacimiento" id="nacimiento">
        <label for="">Edad
        <input type="number" class="form-control" name="edad" id="edad">
        <label for="">Estado Civil:</label><br>
        <input type="radio" name="estado" value="Soltero" id="soltero" class="estado" >
        <label for="">Soltero/a</label><br>
        <input type="radio" name="estado" value="Casado" id="casado" class="estado" >
        <label for="">Casado/a</label><br>
        <input type="radio" name="estado" value="Union" id="union" class="estado" >
        <label for="">Union Libre</label><br>
        <input type="radio" name="estado" value="Separado" id="separado" class="estado" >
        <label for="">Separado/a</label><br>
        <input type="radio" name="estado" value="Divorciado" id="divorciado" class="estado" >
        <label for="">Divorciado/a</label><br>
        <input type="radio" name="estado" value="Viudo" id="viudo" class="estado" >
        <label for="">Viudo/a</label><br>
        <label for="">Sexo:</label><br>
        <input type="radio" name="sexo" value="masculino" id="masculino" class="sexo">
        <label for="">Masculino</label><br>
        <input type="radio" name="sexo" value="femenino" id="femenino" class="sexo">
        <label for="">Femenino</label><br>
        <input type="radio" name="sexo" value="otro" id="otro" class="sexo">
        <label for="">Otro</label><br>
        <label for="">Favoritos:<br>
        <input type="checkbox" name="favorito1" value="Tecnologia" id="tecnologia" class="favo">
        <label for="">Tecnología</label><br>
        <input type="checkbox" name="favorito2" value="Salud" id="salud" class="favo">
        <label for="">Salud</label><br>
        <input type="checkbox" name="favorito3" value="Videojuegos" id="videojuegos" class="favo">
        <label for="">Videojuegos</label><br>
        <input type="checkbox" name="favorito4" value="Smartphones" id="smarthphones" class="favo">
        <label for="">Smarthphones</label><br>
        <label for="">Prefiere realizar sus compras de forma virtual o presencial?</label>
        <input type="radio" name="virt" value="virtual" id="virtual" class="vp">
        <label for="">Virtual</label><br>
        <input type="radio" name="virt" value="presencial" id="presencial" class="vp">
        <label for="">Presencial</label><br>
        <label for="">Que categoría le gustaría añadir?</label>
        <input type="text" class="form-control" name="masCate" id="masCate">
        <button type="submit" class="btn btn-primary my-2" id="enviar">Enviar</button>
        
        </form>
       



    </div>




    <script src="http://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
    

    <script type="text/javascript">
  
     var nombres = <?= $nombresJson ?>;
     var apellidos =  <?= $apellidosJson ?>;
        $("#nombre").autocomplete({
         source:nombres
     })
     $("#apellido").autocomplete({
         source:apellidos
     })

    </script>
    
</body>

</html>