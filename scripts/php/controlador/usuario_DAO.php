<?php

    include('../conexiones_BD/conexion_bd_usuarios.php');

    class UsuDAO{

        private $conexion;

        public function __construct(){
            $this->conexion = new ConexionBDUsuarios();
        }

        //------------------------ METODOS ABCC --------------------------------

        // ========= ALTAS 
        public function agregarusuario($nc, $n){
            $sql = "INSERT INTO usuarios VALUES ('$nc', '$n')";
            $res = mysqli_query($this->conexion->getConexion(), $sql);
            return $res;
        }
    }

    ?>