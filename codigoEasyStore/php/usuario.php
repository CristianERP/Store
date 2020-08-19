<?php
class usuario{
    public function registrousuario($datos){
        $conn = new conectar();
        $conexion = $conn->conexion();
        $fecha = date('Y-m-d');
  

        $query = "INSERT into usuarios (nombre, apellido, email, password, fechaRegistro) values ('$datos[0]', '$datos[1]','$datos[2]','$datos[3]','$fecha')";

        return mysqli_query($conexion,$query);

    }

    public function loginUser($datos){
        $conn = new conectar();
        $conexion = $conn->conexion();
        $_SESSION['usuario']=$datos[0];
        $_SESSION['username'] = self :: userName($datos);

        $query = "SELECT email, password FROM usuarios WHERE email='$datos[0]' and password='$datos[1]'";

        $res = mysqli_query($conexion,$query);

        if(mysqli_num_rows($res)>0){
            return 1;
        }else{
            return 0;
        }

    }
    public function userName($datos){
        $conn = new conectar();
        $conexion = $conn->conexion();
        
        $query = "SELECT nombre FROM usuarios WHERE email='$datos[0]' and password='$datos[1]'";

        $res = mysqli_query($conexion,$query);

        return mysqli_fetch_row($res)[0];

    }

    public function recuperar($datos){
        $conn = new conectar();
        $conexion = $conn->conexion();

        $query = "SELECT email FROM usuarios WHERE email='$datos[0]'";

        $res = mysqli_query($conexion,$query);

        if(mysqli_num_rows($res) > 0){
            $pass = substr(md5(microtime()),1,10);

            $sql = "UPDATE usuarios SET password='$pass' WHERE email ='$datos[0]'";

            $request = mysqli_query($conexion,$sql);

            // $to = $datos[0];
            // $subject = "Recuperar Contraseña";
            // $msg = "Su nueva contraseña para iniciar sesión es: ". $pass;
            // mail($to, $subject, $msg); 

            // return $request;
  
            if($request == 1){
                $to = $datos[0];
                $subject = "Recuperar Contraseña";
                $msg = "Su nueva contraseña para iniciar sesión es: ". $pass;
                mail($to, $subject, $msg); 
                return 1;
            }
            else{
                return 0;
            }
        
        }else{
            return 0;
        }

    }
public function correo($datos){
    $to = $datos[0];
    $subject = "Recuperar Contraseña";
    $msg = "Su nueva contraseña para iniciar sesión es: ". $pass;
    mail($to, $subject, $msg);
}


}

?>