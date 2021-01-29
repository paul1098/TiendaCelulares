<?php
    require('conexion.php');
    session_start();

    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];

    $instruccion = "SELECT COUNT(*) as contar from cliente where correo = '$correo' and contraseña = '$contraseña' ";

    $consulta = mysqli_query($conn,$instruccion);

    $array = mysqli_fetch_array($consulta);
    

    

    if($array['contar']>0){
        $_SESSION['username'] = $correo;
        header("location:../portada.php");
    }else{
        echo "Datos incorrectos";
    }

?>