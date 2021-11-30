<?php

include('../conexiones_BD/conexion_bd_escuela.php');

    class ProductoDAO{

        private $conexion;

        public function __construct(){
            $this->conexion = new ConexionBDEscuela();
        }

                //------------------------ METODOS ABCC --------------------------------

        // ========= ALTAS 
        public function agregarAlumno($nc, $n, $pa, $sa, $e, $s, $c){
            $sql = "INSERT INTO alumnos VALUES ('$nc', '$n', '$pa', '$sa', $e, $s, '$c')";
            $res = mysqli_query($this->conexion->getConexion(), $sql);
            return $res;

            $sql = "INSERT INTO productos Values ('$15', 'C. Cerdo 2', '1', '1', '15', '10', '100', 'no')";
        }


        public function agregarProducto($id, $n, $idP, $idC, $cu, $pu, $us, $d){
           $sql = "INSERT INTO productos Values ('$id', '$n', '$idP', '$idC', '$cu', '$pu', '$us', '$d')";
            $res = mysqli_query($this->conexion->getConexion(), $sql);
            return $res;

            
        }

        //====== BAJAS
        public function eliminarAlumno($nc){
            $sql = "DELETE FROM alumnos WHERE Num_Control='$nc'";
            $res = mysqli_query($this->conexion->getConexion(), $sql);
            return $res;
        }



        //======CAMBIOS

        //======CONSULTAS

    }

?>