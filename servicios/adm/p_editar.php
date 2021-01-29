<?php
include("../conexion.php");

$id =$_POST['idproducto'];
$nombreP =$_POST['nombreP'];
$precio =$_POST['precio'];
$stock =$_POST['stock'];
$descripción =$_POST['descripción'];
$idmarca =$_POST['idmarca'];
$estado =$_POST['estado'];
$nombreimagen = $_FILES['imagen']['name'];
$imagen = $_FILES['imagen']['tmp_name'];
$ruta = "assets/productos";

$ruta = $ruta."/".$nombreimagen;
move_uploaded_file($imagen,$ruta);


//creamos la consulta

$instruccion = "UPDATE producto SET nombreP = '$nombreP', precio = '$precio', stock = '$stock', imagen = '$ruta', descripción = '$descripción', idmarca = '$idmarca', estado = '$estado' WHERE idproducto = '$id' ";

$consulta = mysqli_query($conn,$instruccion) or die ("Fallo de conexion");

if ($consulta) {
    echo "<script> alert('Producto actualizado'); 
    window.location='root.php'; </script>" ;
}
?>