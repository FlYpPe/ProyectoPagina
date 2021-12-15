<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="validar.js"></script>

<style>
  select.form-control:not([size]):not([multiple]) {
    height: calc(4.25rem + 2px);
}
</style>
</head>
<body>
    
    <?php
        require_once('headAdm.php');
        
        /* <span> class="error" style="color:red;"> 
        <?php 
        echo isset($_SESSION['nc'])?$_SESSION['nc']:""
        
        ?> </span> */
    ?>

    <h3 style="background-color:white;
                text-align: center;
                padding: 15px;
                
                "> </h3>


    <form action="../controlador/procesar_altas.php" method="POST" >
      <div class="form-row">
       
        <div class="form-group col-md-12">
          <label for="inputPassword4">Nombre Producto</label>
          <input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Ingrese el nombre"style="padding: 5px; font-size: 18px">
        </div>
        </div>
        <div class="form-row">
        <div class="form-group col-md-6">
          <label for="semestre">ID Proveedor</label>
          <select id="Provedor" class="form-control" name="Provedor" style="height: 35px;padding: 5px; font-size: 18px;">
            <?php
                  include('../controlador/alumno_DAO.php');
                  $aDAO = new AlumnoDAO();
                  $res = $aDAO->mostrarProveedores();
                  if(mysqli_num_rows($res)>0){
                    while($fila = mysqli_fetch_assoc($res)){
                      echo "<option>". $fila["IdProveedor"] ."</option>";
                    }
                  }else{    
                }

            ?>
          </select>
        </div >
        <div class="form-group col-md-6">
          <label for="semestre">Numero de Categoria</label>
          <select id="Categoria" class="form-control" name="Categoria" style="height: 35px; padding: 5px; font-size: 18px;">
            <?php
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
        </div>

      <div class="form-group">
        <label for="inputAddress">Cantidad por unidad</label>
        <input type="number" class="form-control" name="Cantidad" id="Cantidad" placeholder="Ingrese la cantidad" style="padding: 5px; font-size: 18px">
      </div>
      <div class="form-group">
        <label for="inputAddress2">Precio unitario</label>
        <input type="number" class="form-control" id="Precio" name="Precio" placeholder="Ingrese el precio" style="padding: 5px; font-size: 18px">
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputCity">Unidades En Stock</label>
          <input type="number" class="form-control" id="Stock" name="Stock" placeholder="Ingrese las unidades" style="padding: 5px; font-size: 18px">
        </div>

        <div class="form-group col-md-6">
          <label for="semestre">Descripcion</label>
          <input id="semestre" class="form-control" id="Descont" placeholder="Ingrese una descripción" name="Descont" style="padding: 5px; font-size: 18px">
            
                </input>
        </div>
        
      </div>
      
      <button type="submit" class="btn btn-primary" onclick="return validacion()" style="padding: 5px; font-size: 18px"> AGREGAR </button>
    </form>


</body>
</html>


<?php 

unset($_SESSION['error_nc']);

?>