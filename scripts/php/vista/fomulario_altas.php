<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="validar.js"></script>
</head>
<body>
    
    <?php
        require_once('headAdm.php');
    ?>

    <h3 style="background-color:white;
                text-align: center;
                padding: 15px;
                
                "> </h3>


    <form action="../controlador/procesar_altas.php" method="POST" >
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputEmail4">Id Producto</label>
          <input type="number" class="form-control" id="Id" name="Id" placeholder="Solo numeros">
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">Nombre Producto</label>
          <input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Solo letras">
        </div>
        </div>
        <div class="form-row">
        <div class="form-group col-md-6">
          <label for="semestre">ID Proveedor</label>
          <select id="Provedor" class="form-control" name="Provedor">
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
        </div>
        <div class="form-group col-md-6">
          <label for="semestre">Numero de Categoria</label>
          <select id="Categoria" class="form-control" name="Categoria">
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
        <input type="number" class="form-control" name="Cantidad" id="Cantidad" placeholder="1234 Main St">
      </div>
      <div class="form-group">
        <label for="inputAddress2">Precio unitario</label>
        <input type="number" class="form-control" id="Precio" name="Precio" placeholder="Apartment, studio, or floor">
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputCity">Unidades En Stock</label>
          <input type="number" class="form-control" id="Stock" name="Stock">
        </div>

        <div class="form-group col-md-4">
          <label for="semestre">Descontinuado</label>
          <select id="semestre" class="form-control" id="Descont" name="Descont">
            <?php
                echo "<option>No</option>";
                echo "<option>Si</option>";
                
            ?>
          </select>
        </div>
        
      </div>
      
      <button type="submit" class="btn btn-primary" onclick="return validacion()"> AGREGAR </button>
    </form>


</body>
</html>