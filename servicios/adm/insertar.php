<?php

$nombreP = $_POST['nombreP'];
$precio = $_POST['precio'];
$stock = $_POST['stock'];
$descripción = $_POST['descripción'];
$idmarca = $_POST['idmarca'];
$estado = $_POST['estado'];
$nombreimagen = $_FILES['imagen']['name']; //obtiene el nombre de la imagen
$imagen = $_FILES['imagen']['tmp_name']; //captura la imagen
$ruta = "../../assets/productos"; //nombre de la carpeta de la imagen

$ruta = $ruta."/".$nombreimagen; //define la ruta de la imagen
move_uploaded_file($imagen,$ruta);

include("../conexion.php");
//se crea la insulta
$instruccion = "INSERT INTO producto (nombreP, precio, stock, imagen, descripción, idmarca, estado) VALUES ('$nombreP','$precio','$stock','$nombreimagen','$descripción', '$idmarca', '$estado' ) ";


$consulta = mysqli_query($conn,$instruccion);

mysqli_close($conn);

if ($consulta) {
    echo "<script> alert('Se agregaron los datos correctamente');
    window.location='insertar.html'; </script>";
}

    
?>
