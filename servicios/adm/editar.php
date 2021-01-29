<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../../estilos/estilosInsertar.css">
    <title>Formulario</title>
</head>
<body>
  
<?php
 include("../conexion.php");

    $idproducto = $_GET["idproducto"];
   $instruccion = "select * from  producto where idproducto = '$idproducto'";
   $consulta = mysqli_query($conn,$instruccion) or die ("Fallo en la consulta");

 ?>


    <div class="caja">
        
        <h3>EDITAR PRODUCTO</h3>
        <div class="formulario-hijo">
          <?php  $resultado = mysqli_fetch_array($consulta);
          ?>
    <form action="p_editar.php" method="POST" ENCTYPE="multipart/form-data">
    <input type="hidden" value="<?php echo $resultado['idproducto']; ?>" name="idproducto">
      <table class="table table-md table-info table-border ">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Descripción</th>
                <th>idmarca</th>
                <th>Estado</th>
                <th>Foto</th>
                <th>Agregar</th>
            </tr>
        </thead>
        <tr>
          <td>
          <label for=""><input type="text" class="form-control" id="NombreP" name="nombreP" required value="<?php echo $resultado['nombreP']; ?>"></label></td> 

          <td>
          <label for=""><input type="text" class="form-control" id="precio" name="precio" required value="<?php echo $resultado['precio']; ?>"></label></td>


         <td><label for=""><input type="text" class="form-control" id="stock" name="stock" required value="<?php echo $resultado['stock']; ?>"></label></td>
          
          <td><label for=""><textarea name="descripción" id="descripción" ><?php echo $resultado['descripción']; ?></textarea></label></td>

         <td><label for=""><input type="text" class="form-control" id="idmarca" name="idmarca" required value="<?php echo $resultado['idmarca']; ?>"></label></td>

         <td><label for=""><input type="text" class="form-control" id="estado" name="estado" required value="<?php echo $resultado['estado']; ?>"></label></td>

         <td>
            <label for=""><input type="file" name="imagen" required></label></td>
          
        
          <td><input type="submit" class="btn btn-warning" name="insertar" value="Guardar"></input></td>  
        
        </tr>
    </table>


      </form>
    </div><a href="root.php"><button>Regresar</button></a></div>

    
 
    

  

    
    
    

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>