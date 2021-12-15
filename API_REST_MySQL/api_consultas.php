<?php

include('../scripts/php/conexiones_BD/conexion_bd_escuela.php');
$con = new ConexionBDEscuela();
$conexion = $con->getConexion();


if($_SERVER['REQUEST_METHOD']=='POST'){
    $cadenaJSON =file_get_contents('php://input');

    if($cadenaJSON==false){
        echo "No Hay cadena JSON";
    }else{ 

        $filtro = json_decode($cadenaJSON, true);
        $a = $filtro['nc'];
        $sql = "SELECT * FROM productos where IdProducto like '%$a%' or NombreProducto like '%$a%' or IdProveedor like '%$a%' 
        or IdCategoria like '%$a%' or CantidadPorUnidad like '%$a%' or PrecioUnitario like '%$a%' 
        or UnidadesEnStock like '%$a%' or Descripcion like '%$a%'";
        $res = mysqli_query($conexion,$sql);
        $datos ['alumnos'] = array();
        if($res){
            while($fila = mysqli_fetch_assoc($res)){
                $alumno = array();
                        /*
        $id = $datos['id'];
        $nom = $datos['nom'];
        $prov = $datos['prov'];
        $cat = $datos['cat'];
        $cant = $datos['cant'];
        $pre = $datos['pre'];
        $stoc = $datos['stoc'];
        $desc = $datos['desc'];

                $producto = array();
                $producto['id'] =$fila['IdProducto'];
                $producto['nom'] =$fila['NombreProducto'];
                $producto['prov'] =$fila['IdProveedor'];
                $producto['cat'] =$fila['IdCategoria'];
                $producto['cant'] =$fila['CantidadPorUnidad'];
                $producto['pre'] =$fila['PrecioUnitario'];
                $producto['stoc'] =$fila['UnidadesEnStock'];
                $producto['desc'] =$fila['Descontinuado'];*/

                $alumno['nc'] =$fila['Num_Control'];
                $alumno['n'] =$fila['Nombre'];
                $alumno['pa'] =$fila['Primer_Ap'];
                $alumno['sa'] =$fila['Segundo_AP'];
                $alumno['e'] =$fila['Edad'];
                $alumno['s'] =$fila['Semestre'];
                $alumno['c'] =$fila['Carrera'];

                array_push($datos['alumnos'], $alumno);
            }
            echo json_encode($datos);


        }else{
            $respuesta['exito']= false;
            $respuesta['Mensaje']= "error en la consulta";
            $resJSON = json_encode($respuesta);
            echo $respuesta;
        }


   }
}

?>

<?php

include('../scripts/php/conexiones_BD/conexion_bd_escuela.php');
$con = new ConexionBDEscuela();
$conexion = $con->getConexion();


if($_SERVER['REQUEST_METHOD']=='POST'){
    $cadenaJSON =file_get_contents('php://input');

    if($cadenaJSON==false){
        echo "No Hay cadena JSON";
    }else{ 

        $filtro = json_decode($cadenaJSON, true);
        $a = $filtro['id'];
        $sql = "SELECT * FROM productos where IdProducto like '%$a%'";
        
        $res = mysqli_query($conexion,$sql);
        $datos ['objetos'] = array();
        if($res){

            while($fila = mysqli_fetch_assoc($res)){

                                   
                $producto = array();
                $producto['id'] = $fila['IdProducto'];
                $producto['nom'] =$fila['NombreProducto'];
                $producto['prov'] =$fila['IdProveedor'];
                $producto['cat'] =$fila['IdCategoria'];
                $producto['cant'] =$fila['CantidadPorUnidad'];
                $producto['pre'] =$fila['PrecioUnitario'];
                $producto['stoc'] =$fila['UnidadesEnStock'];
                $producto['desc'] =$fila['Descontinuado'];

                
                

                array_push($datos['objetos'], $producto);
            }
            echo json_encode($datos);


        }else{
            $respuesta['exito']= false;
            $respuesta['Mensaje']= "error en la consulta";
            $resJSON = json_encode($respuesta);
            echo json_encode($respuesta);
        }


   }
}

?>