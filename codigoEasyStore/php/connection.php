<?php
    class conectar{
        private $host="localhost";
        private $usuario="20201B105";
        private $password="iFGOkOOE10";
        private $bd="20201B105";
        public function conexion(){
            $conexion=mysqli_connect($this->host,$this->usuario,$this->password,$this->bd);
            return $conexion;
        }
        
    };


?>