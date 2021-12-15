<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include('../controlador/alumno_DAO.php');
session_start();
    $id = $_POST['id'];
    $n = $_POST['n'];
    $idP = $_POST['idP'];
    $idC = $_POST['idC'];
    $cu = $_POST['cu'];
    $pu = $_POST['pu'];
    $us = $_POST['us'];
    $d = $_POST['d'];

    $contador = 0;
    $datos_validos = false;
    $cadena_error = "";

    if (strlen($n)>0) {
        $datos_validos = true;
    }else {
        $cadena_error = $cadena_error . "-Error en nombre-";
        $contador = $contador +1;
        
    }

    if (strlen($cu)>0 && is_numeric($cu)) {
        $datos_validos = true;
    }else{
        $cadena_error = $cadena_error . "-Error en cantidad-";
        $contador = $contador +1;
        
    }
    
    
    if (strlen($pu)>0 && is_numeric($pu)) {
        $datos_validos = true;
    }else{
        $cadena_error = $cadena_error . "-Error en precio-";
        $contador = $contador +1;
       
    }
    
    
    if (strlen($us)>0 && is_numeric($us)) {
        $datos_validos = true;
    }else{
        $cadena_error = $cadena_error . "-Error en stock-";
        $contador = $contador +1;
        
    }
    
    
    if (strlen($d)>0 && ctype_alpha($d)) {
        $datos_validos = true;
    }else{
        $cadena_error = $cadena_error . "-Error en descripcion-";
        $contador = $contador +1;
        
    }

    if ($contador==0) {
        $aDAO = new AlumnoDAO();

       $resu = $aDAO->modificarProducto($id, $n, $idP, $idC, $cu, $pu, $us, $d);
        if ($resu) {
            header('location:../vista/formulario_consultas.php');
        }else {
            header('location:../vista/formulario_consultas.php');
        }
    }else {

        $_SESSION['dato_no'] = $cadena_error;
        header('location:../vista/formulario_modificacion.php?id='.$id);
        
    }

        

?>

<script></script>
</body>
</html>


