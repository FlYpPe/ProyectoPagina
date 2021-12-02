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
        require_once('headAdm.php');
    ?>

    <h3 style="background-color:lightgreen;
                text-align: center;
                padding: 15px;
                
                "> Agregar ALUMNOS </h3>

<div class="alert alert-success" role="alert" 
    style="width: 50%; margin: auto;">
  This is a success alert—check it out!
</div>


    <form action="../controlador/procesar_altas.php" method="POST" >
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputEmail4">Id Producto</label>
          <input type="number" class="form-control" id="inputEmail4" placeholder="Solo numeros">
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">Nombre Producto</label>
          <input type="text" class="form-control" id="inputPassword4" placeholder="Solo letras">
        </div>
        </div>
        <div class="form-row">
        <div class="form-group col-md-6">
          <label for="semestre">ID Proveedor</label>
          <select id="semestre" class="form-control">
            <?php

                  include('../controlador/alumno_DAO.php');
                  $aDAO = new AlumnoDAO();
                  
                  $res = $aDAO->mostrarCategorias();
                  

                  if(mysqli_num_rows($res)>0){
                    while($fila = mysqli_fetch_assoc($res)){
                      echo "<option>". $fila["IdCategoria"] ."</option>";
                    }

                  }else{
                    
                }

            ?>
          </select>
        </div>
        <div class="form-group col-md-6">
          <label for="semestre">Numero de Categoria</label>
          <select id="semestre" class="form-control">
            <?php


                  $res = $aDAO->mostrarProveedores();
                                    

                  if(mysqli_num_rows($res)>0){
                    while($fila = mysqli_fetch_assoc($res)){
                      echo "<option>". $fila["IdProveedor"] ."</option>";
                    }

                  }else{
                    
                  }
            ?>
          </select>
          </div>
        </div>

      <div class="form-group">
        <label for="inputAddress">Cantidad por unidad</label>
        <input type="number" class="form-control" id="inputAddress" placeholder="1234 Main St">
      </div>
      <div class="form-group">
        <label for="inputAddress2">Precio unitario</label>
        <input type="number" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputCity">Unidades En Stock</label>
          <input type="number" class="form-control" id="inputCity">
        </div>

        <div class="form-group col-md-4">
          <label for="semestre">Descontinuado</label>
          <select id="semestre" class="form-control">
            <?php
                echo "<option>No</option>";
                echo "<option>Si</option>";
                
            ?>
          </select>
        </div>
        
      </div>
      
      <button type="submit" class="btn btn-primary"> AGREGAR </button>
    </form>


</body>
</html>