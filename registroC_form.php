<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/8c68426a6c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="estilos/portada.css">
    <link rel="stylesheet" href="estilos/registro.css">
    <title>Registro de usuario</title>
</head>
<body>
<!-- MENÚ DE NAVEGACIÓN -->
<nav class="menu navbar sticky-top navbar-expand-md navbar-light">
        <div class="container">
            <a class="img navbar-brand" href="portada.php"><img src="assets/contenido/logo1.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php"><i class="fas fa-sign-in-alt"></i> Iniciar sesión</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="registroC_form.php"><i class="fas fa-user"></i> Registrarse</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="carrito.php"><i class="fas fa-shopping-cart"></i> Carrito</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>


    <!-- Aqui va el registro de los usuarios -->

  <div class="form">
  <h2>Crear una cuenta</h2>
  <p>¿Ya tiene una cuenta? <a href="index.php">Inicie sesión</a></p>
  <div class="form-hijo">
  <form class="form-horizontal" action="servicios/RegistrarC.php" method="POST">

    <div class="input">
          <label >NOMBRES: </label>
          <input type="text" name="nombreC" id="nombreC" class=""  required >
    </div>

    <div class="input">
       <label >APELLIDOS: </label>
          <input type="text" name="apellidoC" id="apellidoC" class=""   required  >     
    </div>

    <div class="input">
      <label >DIRECCIÓN: </label>
          <input type="text" name="dirección" id="dirección" class=""  required >
     </div>

    <div class="input">
      <label>CORREO: </label>
          <input type="email" name="correo" id="correo" class="" required >
    </div>
    
    <div class="input">
        <label >CELULAR: </label>
          <input type="text" name="celular" id="celular" class="" required >
       </div>
 
    <div class="input">
        <label >DNI: </label>
          <input type="text" name="DNI" id="DNI" class="" required >
       </div>

    <div class="input">
        <label >CONTRASEÑA: </label>
          <input type="password" name="contraseña" id="contraseña" class="" required >
       </div>

    <div class="input">
      <label class="sr-only">Estado : </label>
      <input type="hidden" class=""  name="estado" >
    </div>
    <div class="boton">
    <button type="submit" name="submit" class="btn btn-success">Registrarse</button></div>
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