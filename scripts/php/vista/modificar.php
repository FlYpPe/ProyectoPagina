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

    $id = $_POST['id'];
    $n = $_POST['n'];
    $idP = $_POST['idP'];
    $idC = $_POST['idC'];
    $cu = $_POST['cu'];
    $pu = $_POST['pu'];
    $us = $_POST['us'];
    $d = $_POST['d'];


        $aDAO = new AlumnoDAO();

       $resu = $aDAO->modificarProducto($id, $n, $idP, $idC, $cu, $pu, $us, $d);
        if ($resu) {
            header('location:../vista/formulario_consultas.php');
        }else {
            header('location:../vista/formulario_consultas.php');
        }

?>

<script></script>
</body>
</html>


