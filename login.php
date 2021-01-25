<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/8c68426a6c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="estilos/login.css">
    <link rel="stylesheet" href="estilos/index.css">
    <title>Iniciar sesión</title>
</head>
<body>
<!-- MENU DE NAVEGACIÓN -->
<nav class="menu navbar sticky-top navbar-expand-md navbar-light">
        <div class="container">
            <a class="img navbar-brand" href="index.php"><img src="assets/contenido/logo1.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="login.php"><i class="fas fa-sign-in-alt"></i> Iniciar sesión</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="registroC_form.php"><i class="fas fa-user"></i> Registrarse</a>
                    </li>
                    
                    
                </ul>
            </div>
        </div>
    </nav>
    <!-- Aqui va el inicio de sesión -->

    <div class="form">
  <h2>Iniciar sesión</h2>
  <p>¿No tiene una cuenta? <a href="registroC_form.php">Registrese</a></p>
  <div class="form-hijo">
  <form class="form-horizontal" action="servicios/loguearC.php" method="POST">

  <div class="input">
      <label>CORREO: </label>
          <input type="email" name="correo" id="correo" class="" required >
    </div>
    <div class="input">
        <label >CONTRASEÑA: </label>
          <input type="password" name="contraseña" id="contraseña" class="" required >
    </div>
    <div class="boton">
    <button type="submit" name="submit" class="btn btn-success">Iniciar sesión</button></div>
  </form>
  </div>
  </div>


<!-- Pie de página-->

<footer class="footer">
    <div class="container">
        <div class="">
           <h3 class="titulos">ACERCA DE MIPHONE</h3>
           <p class="texto">MiPhone.pe es una empresa con más de 9 años de experiencia en el mercado ofreciendo productos de primera calidad al mejor precio.
           Cuenta con un equipo de venta que podrá asesorar tu compra y para mayor comodidad te ofrecemos el servicio de Delivery a toda la provincia de Lima.
           Apostamos a ser líder en el mercado en los próximos años diferenciándonos en la calidad de nuestro servicio, puntualidad y cordialidad.
           </p> 
        </div>
        <div class="">
           <h3 class="titulos">Contáctanos</h3>
           <p class="texto">Teléfono: 999-999-999</p>
           <p class="texto">consultas@miphone.com</p> 
        </div>
        <section class="redes-sociales">
            <h3 class="titulos">Nuestras Redes Sociales</h3>
            <div class="contenedor">
                <a href="https://www.facebook.com" target="blank" class="Facebook"><i
                        class="fa fa-facebook-square"></i></a>
                <a href="https://www.instagram.com" target="blank" class="Instagram"><i
                        class="fa fa-instagram"></i></a>
                <a href="https://api.whatsapp.com/send?phone" target="blank" class="Whatsapp"><i
                        class="fa fa-whatsapp"></i></a>
            </div>
        </section>
        <p class="copy">© 2021 - MiPhone.pe | Todos los derecho reservados </p>    
    </div>    
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>


