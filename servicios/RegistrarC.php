<?php 

require('conexion.php');
session_start();

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
    
    header("location:ty.php");

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?> 

