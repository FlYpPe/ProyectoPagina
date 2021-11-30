<?php
  session_start();
  if($_SESSION['u_valido']==false){
    //header('location:pagina_acceso_prohibido.html');
    header('location: login.html');
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input{
            padding: 0;
            margin: 0;
            width: 100px;
        }
        
        th, td{
            
            padding: 0;
            margin: 0;
        }
        
    </style>
</head>
<body>
<?php
require_once('headAdm.php');
?>

<?php
        include('../controlador/alumno_DAO.php');
        $aDAO = new AlumnoDAO();
        $id = $_GET["id"];
        $res = $aDAO->mostrarProductosPorId($id);
        $ruta = "../controlador/modificar.php";
        //var_dump($res);

        if(mysqli_num_rows($res)>0){

            //mysqli_fetch_row  => obtiene datos como un vector normal (indices numericos)
            //mysqli_fetch_assoc  => obtiene datos como un vector asociativo


                   echo "<form action='modificar.php' method='post' ><br><table id='tabla' class='display table table-hover text-nowrap' style='width:50%'>
                        <thead>
                            <tr>
                            <th>Nombre</th>
                            <th>Proveedor</th>
                            <th>Categoria</th>
                            <th>Cant/Unidad</th>
                            <th>Precio Uitario</th>
                            <th>Unid. en Stock</th>
                            <th>Descontinuado</th>
                            <th>Modificar</th>
                            </tr>
                        </thead>";
            

            while($fila = mysqli_fetch_assoc($res)){
                printf("<tr>
                <td>

                <input type='hidden' value='". $fila["IdProducto"]."' name='num'></input>

                <input type='text' value='". $fila["NombreProducto"]."' name='nom'></input>
                
                </td>".

                "<td><input type='text' value='". $fila["IdProveedor"]."' name='pa'></input></td>".

                "<td><input type='text' value='". $fila["IdCategoria"]."' name='sa'></input></td>".

                "<td><input type='text' value='". $fila["CantidadPorUnidad"]."' name='e'></input></td>".

                "<td><input type='text' value='". $fila["PrecioUnitario"]."' name='s'></input></td>".

                "<td><input type='text' value='". $fila["UnidadesEnStock"]."'name='c'></input></td>".

                "<td><input type='text' value='". $fila["Descontinuado"]."'name='c'></input></td>".

                "<td><input type='submit' value='Actualizar'></input></td>"                       
                
            );

            }

        }else{
            echo "SIN registros para mostrar";
        }
        echo "</table> </form> ";
    ?>
    
</body>
</html>
