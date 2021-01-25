<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/8c68426a6c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="estilos/index.css">
    <link rel="stylesheet" href="estilos/login.css">
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
                    <li class="nav-item">
                        <a class="nav-link" href="carrito.php"><i class="fas fa-shopping-cart"></i> Carrito</a>
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
  <form class="form-horizontal" action="servicios/RegistrarC.php" method="POST">

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



    
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>

 <!-- Pie de página-->

<footer class="main-footer">
    <div class="container container--flex">
        <div class="column column--33">
           <h2 class="column__title">ACERCA DE MIPHONE</h2>
           <p class="column__txt">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> 
        </div>
        <div class="column column--33">
           <h2 class="column__title">Contáctanos</h2>
           <p class="column__txt">Teléfono: 999-999-999</p>
           <p class="column__txt">consultas@miphone.com</p> 
        </div>
        <div class="column column--33">
           <h2 class="column__title">Síguenos en nuestras redes</h2>
           <p class="column__txt"><a href="" class="icon-facebook">Facebook</a></p>
           <p class="column__txt"><a href="" class="icon-twitter">Síguenos en Twiter</a></p>
           <p class="column__txt"><a href="" class="icon-yotube">Visita nuestro canal</a></p>
        </div>
        <p class="copy">© 2021 - MiPhone.pe | Todos los derecho reservados </p>    
    </div>    
</footer>
</html>


