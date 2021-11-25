<?php

    include('../conexiones_BD/conexion_bd_escuela.php');

    class AlumnoDAO{

        private $conexion;

        public function __construct(){
            $this->conexion = new ConexionBDEscuela();
        }

        //------------------------ METODOS ABCC --------------------------------

        // ========= ALTAS 
        public function agregarAlumno($nc, $n, $pa, $sa, $e, $s, $c){
            $sql = "INSERT INTO Alumnos VALUES ('$nc', '$n', '$pa', '$sa', $e, $s, '$c')";
            $res = mysqli_query($this->conexion->getConexion(), $sql);
            return $res;
        }

        //====== BAJAS
        public function eliminarAlumno($nc){
            $sql = "DELETE FROM Alumnos WHERE Num_Control='$nc'";
            $res = mysqli_query($this->conexion->getConexion(), $sql);
            return $res;
        }



        //======CAMBIOS


        //======CONSULTAS
        public function mostrarAlumnos(){
            $sql = "SELECT * FROM Alumnos";
            $res = mysqli_query($this->conexion->getConexion(), $sql);
            return $res;
        }

    }//class Alumno

?>