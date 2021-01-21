<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="registro.css">
    <title>Registro de usuario</title>
</head>
<body>
<!-- MENU DE NAVEGACIÓN -->
<nav class="menu navbar sticky-top navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            <a class="img navbar-brand" href="index.php">logo</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="login.php">Iniciar sesión</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="carrito.php">Carrito</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>


    <!-- Aqui va el registro de los usuarios -->

    <div class="container">
  <h2>Crear una cuenta</h2>

  <form class="form-horizontal" action="servicios/RegistrarC.php" role="form" method="POST">


    <div class="input">
      <label class="sr-only">ID: </label>
      <input type="hidden" class="form-control"  name="idcliente" >
    </div>

    <div class="input">
          <label >Nombres: </label>
          <input type="text" name="nombreC" id="nombreC" class="form-control"  required placeholder="Ingrese el nombre">
    </div>

    <div class="input">
       <label >Apellidos: </label>
          <input type="text" name="apellidoC" id="apellidoC" class="form-control"   required  placeholder="Ingrese los apellidos">     
    </div>

    <div class="input">
      <label >Direccion: </label>
          <input type="text" name="dirección" id="dirección" class="form-control"  required placeholder="Ingrese la dirección">
     </div>

    <div class="input">
      <label>Correo: </label>
          <input type="text" name="correo" id="correo" class="form-control" required placeholder="name@email.com">
    </div>

    <div class="input">
        <label >Celular: </label>
          <input type="text" name="celular" id="celular" class="form-control" required placeholder="Ingrese el número telefonico">
       </div>
 
    <div class="input">
        <label >DNI: </label>
          <input type="text" name="DNI" id="DNI" class="form-control" required placeholder="Ingrese el DNI">
       </div>

    <div class="input">
        <label >Contraseña: </label>
          <input type="password" name="contraseña" id="contraseña" class="form-control" required placeholder="Ingrese una contraseña">
       </div>

    <div class="input">
      <label class="sr-only">Estado : </label>
      <input type="hidden" class="form-control"  name="estado" >
    </div>

  

    


<p></p>
<p></p>

    <button type="submit" name="submit" class="btn btn-success">Registrar</button>

    

    
  </form>


</body>
</html>