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
            $sql = "INSERT INTO alumnos VALUES ('$nc', '$n', '$pa', '$sa', $e, $s, '$c')";
            $res = mysqli_query($this->conexion->getConexion(), $sql);
            return $res;

        }
        
        public function agregarProducto($id, $n, $idP, $idC, $cu, $pu, $us, $d){
             $sql = "INSERT INTO productos (IdProducto, NombreProducto, IdProveedor, IdCategoria,
             CantidadPorUnidad, PrecioUnitario, UnidadesEnStock, Descontinuado) VALUES (?,?,?,?,?,?,?,?)";
             $resultado = mysqli_prepare($this->conexion->getConexion(), $sql);
             $res = mysqli_stmt_bind_param($resultado, "isiisdis", $id, $n, $idP, $idC, $cu, $pu, $us, $d);
             $res = mysqli_stmt_execute($resultado);
             return $res;
         }

         public function mostrarProductos(){
            $sql = "SELECT * FROM productos";
            $res = mysqli_query($this->conexion->getConexion(), $sql);
            return $res;
        }
        public function mostrarProductosPorId($nc){
            $sql = "SELECT * FROM productos where IdProducto ='$nc'";
            $res = mysqli_query($this->conexion->getConexion(), $sql);
            return $res;
        }

        public function modificarProducto($id, $n, $idP, $idC, $cu, $pu, $us, $d){
         $sql = "UPDATE productos SET NombreProducto = '$n', IdProveedor = $idP,
          IdCategoria = $idC, CantidadPorUnidad = '$cu', PrecioUnitario = $pu,
         UnidadesEnStock = $us, Descontinuado = '$d' WHERE IdProducto = $id;";
         $res = mysqli_query($this->conexion->getConexion(), $sql);
         return $res;
        
        }
        
        public function eliminarProducto($id){
            $sql = "DELETE FROM productos WHERE idProducto ='$id'";
            $res = mysqli_query($this->conexion->getConexion(), $sql);
            return $res;
        }

        public function mostrarCategorias(){
            $sql = "SELECT IdCategoria FROM categorias";
            $res = mysqli_query($this->conexion->getConexion(), $sql);
            return $res;
            
        }
        public function mostrarProveedores(){
            $sql = "SELECT IdProveedor FROM proveedores";
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
        public function mostrarAlumnos(){
            $sql = "SELECT * FROM alumnos";
            $res = mysqli_query($this->conexion->getConexion(), $sql);
            return $res;
        }
        public function mostrarAlumnosPorNc($nc){
            $sql = "SELECT * FROM alumnos where Num_Control ='$nc'";
            $res = mysqli_query($this->conexion->getConexion(), $sql);
            return $res;
        }

        
        public function modificarPedido($nc, $n, $pa, $sa, $e, $s, $c){
        
            $sql = "UPDATE alumnos SET Nombre = '$n', Primer_Ap = '$pa', Segundo_AP = '$sa',
             Edad = $e, Semestre = $s, Carrera = '$c' WHERE Num_Control = '$nc'";
             $res = mysqli_query($this->conexion->getConexion(), $sql);
             return $res;
            }

    }//class Alumno

    

?>  