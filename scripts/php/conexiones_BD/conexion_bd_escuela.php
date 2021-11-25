<?php
    class ConexionBDEscuela{
        private $conexion;
        private $host = 'localhost:3306';
        private $usuario = 'salvatore'; //MySQL
        private $contraseña = 'salvatore'; //MySQL
        private $bd = 'BD_Escuela';

        public function __construct(){
            //Java this.conexion =
            $this->conexion = mysqli_connect($this->host, $this->usuario, $this->contraseña, $this->bd);
            if(!$this->conexion)
                die("Error en conexion con MySQL" . mysqli_connect_error() . mysqli_connect_errno() );
            //else
                //echo "<h1>Exito!</h1>";
        }

        public function getConexion(){
            return $this->conexion;
        }
    }
?>