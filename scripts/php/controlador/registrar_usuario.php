<?php

    //

    include('usuario_DAO.php');

    //codigo para obtener los datos del formulario

    //Validacion ...(PENDIENTE)

    $aDAO = new UsuDAO();

    $a = $_POST["caja_usuario"];
    $b = $_POST["caja_contraseña"];



    $res = $aDAO->agregarusuario(sha1($a),sha1($b));

    //var_dump($res);
    if($res){
        //echo '<script type="text/javascript">alert("Registro eliminado"); window.location.href="../vista/formulario_altas.php";</script>';
        echo "<script type='text/javascript'>
        alert('Ingresa los datos correspondientes');
        window.location.href='form_registr.php';
        </script>";
        //echo "YA CASI SOY INGENIERO INMORTAL !!!!";
        header('location:../vista/log.php');
        //OPCION 1
        //<form
        //<input type=hidden value=exito |fallo 

        //OPCION 2
        //enviar un mensaje de EXITO a traves de SESIONES




    }
    else{
        //echo "MEJOR ME DEDICO A LAS REDES 😢   ";
        header('location:../vista/log.php');
        //enviar un mensaje de FALLO a traves de SESIONES
    }


?>