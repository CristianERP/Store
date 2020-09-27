<?php
if ($_FILES["usuarios"]["error"] > 0)
  {
    echo "Error: " . $_FILES["usuarios"]["error"] . "<br>";
  }
else
  {
    // echo "Fichero subido correctamente<br>";
    // echo "Fichero subido: '" . $_FILES["usuarios"]["name"] . "'<br>";
    // echo "Tamaño: " . ($_FILES["usuarios"]["size"] / 1024) . " kB<br>";
    // echo "Almacenado en: " . $_FILES["usuarios"]["tmp_name"];
    
    // abrimos el fichero con su nombre temporal (el que está en el servidor)

    $archivo    =   fopen($_FILES["usuarios"]["tmp_name"], "r");
    
    // creamos la conexion a la BD
    $conexion =   new mysqli("localhost", "20201B105", "iFGOkOOE10", "20201B105");
  
    
    // creamos una variable booleana que nos controle si ha existido un error en la transacción
    $errorEnTransaccion =   false;
    
    
    // mientras haya lineas, las metemos en la variable $linea
    while( ($linea =   fgets($archivo)) !== false ){
            
            
            $arrayDatos =   explode(";", $linea);
            $nombre =  $arrayDatos[0];
            $apellido =  $arrayDatos[1];   
            $email = $arrayDatos[2];
            // CONTRASEÑA
            $random = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
            $pass = "";
       //Generar contraña 10 digitos
       for($i=0;$i<10;$i++) {
    
          $pass .= substr($random,rand(0,62),1);
       }
       $pass = hash('sha512',$pass);
           
            $fecha = date('Y-m-d');   
            
          
            $sql    =   "INSERT INTO usuarios (nombre, apellido, email, password, fechaRegistro)"
                    . " VALUES ('$nombre', '$apellido', '$email', '$pass', '$fecha');";
        
            
            // si hay un error en la operación de inserción, marco la variable
            // de error como true
            if (!$conexion->query($sql)){
                $errorEnTransaccion =   true;
            }
                
    } 
    
    // comprobamos si ha existido error, para hacer la transacción o volver atrás
    if ($errorEnTransaccion){
        $conexion->rollback();
        printf("Error durante la operación. No se han actualizado los datos.");
    } else {
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
            <h1>REGISTRO SATISFACTORIO</h1>

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
        $conexion->commit();
        
    }
    
    // cerramos la conexión con la BD
    $conexion->close();
    
    // cerrar el fichero
    fclose($archivo);
  }
?>
