<?php
include('../scripts/php/conexiones_BD/conexion_bd_usuarios.php');
$con = new ConexionBDUsuarios();
$conexion = $con->getConexion();


if($_SERVER['REQUEST_METHOD']=='POST'){
    $cadenaJSON = file_get_contents('php://input');

    if($cadenaJSON==false){
        echo "No Hay cadena JSON";
    }else{
        $datos = json_decode($cadenaJSON, true);
        $usuario = sha1($datos['usuario']);
        $contrasena = sha1($datos['contrasena']);


        $sql = "SELECT * FROM usuarios WHERE usuario='$usuario' AND password='$contrasena'";


        $res = mysqli_query($conexion, $sql);

        $respuesta =array();

        if(!empty($res) AND mysqli_num_rows($res)==1){
            $respuesta['valido']= true;
            $resJSON = json_encode($respuesta);
        }else{
            $respuesta['valido']= false;
            $resJSON = json_encode($respuesta);
        }
        echo $resJSON;
    }

}

?>