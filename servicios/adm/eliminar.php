<?php

include("../conexion.php");

$idproducto = $_GET['idproducto'];

$instruccion = "DELETE FROM producto WHERE idproducto = '$idproducto'";
$consulta = mysqli_query($conn,$instruccion);

if ($consulta) {
    echo "<script> alert ('Se elimino el producto correctamente');
    window.location='root.php';
    </script>";
}
?>
