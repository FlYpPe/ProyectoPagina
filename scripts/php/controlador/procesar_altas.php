<?php

    //

    include('alumno_DAO.php');

    $uDAO = new AlumnoDAO();
    $id = $_POST["Id"];
    $nombre = $_POST["Nombre"];
    $provedor = $_POST["Provedor"];
    $categoria = $_POST["Categoria"];
    $cantidad = $_POST["Cantidad"];
    $precio = $_POST["Precio"];
    $stock = $_POST["Stock"];
    $descont = $_POST["Descont"];


    $aDAO = new AlumnoDAO();
    $res = $aDAO->agregarProducto($id, $nombre, $provedor, $categoria, $cantidad, $precio, $stock, $descont);
    if($res){
       
        header('location:../vista/fomulario_altas.php');

        
    }
    else{
        

        header('location:../vista/fomulario_altas.php');
        
    }
        

?>