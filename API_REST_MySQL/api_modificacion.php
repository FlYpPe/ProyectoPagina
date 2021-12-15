    <?php
    include('../scripts/php/conexiones_BD/conexion_bd_escuela.php');
    $con = new ConexionBDEscuela();
    $conexion = $con->getConexion();


    if($_SERVER['REQUEST_METHOD']=='POST'){
        $cadenaJSON =file_get_contents('php://input');

        if($cadenaJSON==false){
            echo "No Hay cadena JSON";
        }else{
            $datos = json_decode($cadenaJSON, true);
            
            $id = $datos['id'];
            $nom = $datos['nom'];
            $prov = $datos['prov'];
            $cat = $datos['cat'];
            $cant = $datos['cant'];
            $pre = $datos['pre'];
            $stoc = $datos['stoc'];
            $desc = $datos['desc'];
            

            
            $sql = "UPDATE productos SET NombreProducto = '$nom', IdProveedor = $prov,
            IdCategoria = $cat, CantidadPorUnidad = '$cant', PrecioUnitario = $pre,
            UnidadesEnStock = $stoc, Descripcion = '$desc' WHERE IdProducto = $id;";
            $res = mysqli_query($conexion, $sql);

            $respuesta =array();

            if($res){
                $respuesta['exito']= true;
                $respuesta['Mensaje']= "Modificacion correcta";
                $resJSON = json_encode($respuesta);
            }else{
                $respuesta['exito']= false;
                $respuesta['Mensaje']= "error en la Modificacion";
                $resJSON = json_encode($respuesta);
            }
            echo $resJSON;
        }

    }

    ?>

