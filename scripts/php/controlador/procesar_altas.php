<?php

    //

    include('alumno_DAO.php');

    //codigo para obtener los datos del formulario

    //Validacion ...(PENDIENTE)

    $aDAO = new AlumnoDAO();
    $res = $aDAO->agregarProducto(2, 'C. Cerdo 3', 1, 1, '15', 10, 100, 'no');
    if($res){
        //echo "YA CASI SOY INGENIERO INMORTAL !!!!";
        header('location:../vista/fomulario_altas.php');
        //OPCION 1
        //<form
        //<input type=hidden value=exito |fallo 

        //OPCION 2
        //enviar un mensaje de EXITO a traves de SESIONES
           
    }
    else{
        //echo "MEJOR ME DEDICO A LAS REDES ='(   ";
        header('location:../vista/fomulario_altas.php');
        //enviar un mensaje de FALLO a traves de SESIONES
    }
        

?>