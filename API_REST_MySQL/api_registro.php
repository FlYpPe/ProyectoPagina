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
        $contraseña = sha1($datos['contrasena']);


        $sql = "INSERT INTO Usuarios VALUES('$usuario','$contraseña')";
        $sql2 = "SELECT * FROM Usuarios WHERE usuario='$usuario'";
        $res = mysqli_query($conexion, $sql);
        $res2 = mysqli_query($conexion, $sql2);

        $respuesta =array();

        if($res){
            $respuesta['exito']= true;
            $respuesta['Mensaje']= "Insercion correcta";
            $resJSON = json_encode($respuesta);
        }else{
            $respuesta['exito']= false;
            if ($res2) {
                $respuesta['Mensaje']= "Registro existente";
            }else {
                $respuesta['Mensaje']= "error en la Insercion";
            }
            
            $resJSON = json_encode($respuesta);
        }
        echo $resJSON;
    }

}

?>
