<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/vanilla-datatables@latest/dist/vanilla-dataTables.min.css" rel="stylesheet" type="text/css">
  <script src="https://cdn.jsdelivr.net/npm/vanilla-datatables@latest/dist/vanilla-dataTables.min.js" type="text/javascript"></script>
   
</head>
<body>
<?php
require_once('headAdm.php');
?>

<?php
        include('../controlador/alumno_DAO.php');
        $aDAO = new AlumnoDAO();
        $res = $aDAO->mostrarProductos();
       
        //var_dump($res);

        if(mysqli_num_rows($res)>0){

            //mysqli_fetch_row  => obtiene datos como un vector normal (indices numericos)
            //mysqli_fetch_assoc  => obtiene datos como un vector asociativo


                   echo "<div><div> <br><table id='tabla' class='display table table-hover text-nowrap' style='width:50%'>
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Proveedor</th>
                                <th>Categoria</th>
                                <th>Cant/Unidad</th>
                                <th>Precio Uitario</th>
                                <th>Unid. en Stock</th>
                                <th>Descontinuado</th>
                                <th>Modificacion</th>
                                
                            </tr>
                        </thead>";
            

            while($fila = mysqli_fetch_assoc($res)){
                printf("<tr id = >
                <td>".$fila['IdProducto']."</td>".
                "<td>".$fila['NombreProducto']."</td>".
                "<td>".$fila['IdProveedor']."</td>".
                "<td>".$fila['IdCategoria']."</td>".
                "<td>".$fila['CantidadPorUnidad']."</td>".
                "<td>".$fila['PrecioUnitario']."</td>".
                "<td>".$fila['UnidadesEnStock']."</td>".
                "<td>".$fila['Descontinuado']."</td>".
                "<td><a href='formulario_modificacion.php?id=". $fila["IdProducto"] ."'>Editar</a> |
                    <a href='../controlador/procesar_eliminar.php?id=". $fila["IdProducto"] ."' class='eliminar' >Eliminar</a>   </td>"
                                           
                );

            }

        }else{
            echo "SIN registros para mostrar";
        }
        echo "</table> </div> </div>";
    ?>
    <script src='confirmacion.js'></script>
    
    <script>
    var tabla = document.querySelector('#tabla');
    var dataTable = new DataTable(tabla);
</script>

</body>
</html>
