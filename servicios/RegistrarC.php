<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<link href="CSS/registro.css" rel="stylesheet" type="text/css"/>
<title> </title>
</head>
<body>
  <div class="container">
<?php
require('conexion.php');


  
  $nombreC = $_POST['nombreC'];
  $apellidoC = $_POST['apellidoC'];
  $dirección = $_POST['dirección'];
  $correo = $_POST['correo'];
  $celular = $_POST['celular'];
  $DNI = $_POST['DNI'];
  $contraseña = $_POST['contraseña'];
  $estado = 'A';




$sql = "INSERT INTO cliente ( nombreC, apellidoC, dirección , correo, celular, DNI, contraseña, estado)
VALUES ('$nombreC', '$apellidoC', '$dirección',  '$correo','$celular', '$DNI', '$contraseña', '$estado')";



if (mysqli_query($conn, $sql)) {
    echo " Datos grabados satisfactoriamente
<br><br> 
<tr >
    <td><a class='btn btn-success' href='TiendaCelulares/login.php'>Atrás</a></td>
 </tr>"
;


  




} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?> 

<br>