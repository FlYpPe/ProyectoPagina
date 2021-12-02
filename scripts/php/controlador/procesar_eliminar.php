<?php
include('../controlador/alumno_DAO.php');

    $id = $_GET['id'];

    $aDAO = new AlumnoDAO();

    $resu = $aDAO->eliminarProducto($id);

    if ($resu) {
        header('location:../vista/formulario_consultas.php');
    }else {
        header('location:../vista/formulario_consultas.php');
    }

?>