<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/8c68426a6c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../estilos/estilosConsulta.css">
    <title>ConsultaProducto</title>
</head>
<body>
    <div class="caja">
    <div class="caja-hijo">   
    <h3>PRODUCTOS</h3>

    <?php
    include('../conexion.php');

    //se envia la consulta
    $instruccion = "select * from producto";
    $consulta = mysqli_query($conn,$instruccion)
    or die ("Fallo en la consulta");
    ?>
    
    

<table class="table table-md table-info table-border ">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>Descripción</th>
            <th>Estado</th>
            <th>Foto</th>
            <th>Editar</th>
            <th>Eliminar</th>
            
            
        </tr>
    </thead>


<?php
    $nfilas = mysqli_num_rows ($consulta);
    if ($nfilas>0) {
      
        for ($i=0; $i < $nfilas; $i++) { 
            $resultado = mysqli_fetch_array($consulta); ?>

            <tr >
                <td><?php echo $resultado['idproducto']; ?> </td>
                <td><?php echo $resultado['nombreP']; ?></td>
                <td><?php echo $resultado['precio']; ?></td>
                <td><?php echo $resultado['stock']; ?></td>
                <td><?php echo $resultado['descripción']; ?></td>
                <td><?php echo $resultado['estado']; ?></td>
                <td> <img title="<?php echo $resultado['nombreP']; ?>" class="card-img-top" src=" ../../<?php echo $resultado['imagen']; ?>"></td>

                <td><a href="editar.php?idproducto=<?php echo $resultado['idproducto']; ?>"><i class="editar far fa-edit"></i></a></td>
                <td><a href="eliminar.php?idproducto=<?php echo $resultado['idproducto']; ?>"><i class="eliminar far fa-trash-alt"></i></a></td>
                
            </tr>
            
        <?php } ?> </table> <?php }
        
        mysqli_close ($conn);
        ?>
        
        </div>
        <a href="insertar.html"><button>IngresarProducto</button></a>
        <a href="root.php"><button>Página Principal</button></a>
        </div>      
        
                






<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>