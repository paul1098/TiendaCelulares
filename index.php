<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/8c68426a6c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="estilos/index.css">
    <title>MiPhone.pe</title>
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
                    <li class="nav-item">
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
    <!-- Carrousel de imagenes -->

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/contenido/oferta1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/contenido/oferta2.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/contenido/oferta3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>




<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

 <!-- mostrar produtos-->
 <!--<section class="">
    <h2 class="">Nuestros productos</h2>
    <div class="">
        <div class="">
            <img src="img/" alt="" class="">
            <div class="">nombre </div>
            <div class="">precio</div>
        </div>
    </div>
    <div class="">
        <div class="">
            <img src="img/" alt="" class="">
            <div class="">nombre </div>
            <div class="">precio</div>
        </div>
    </div>
    <div class="">
        <div class="">
            <img src="img/" alt="" class="">
            <div class="">nombre </div>
            <div class="">precio</div>
        </div>
    </div>



</section>-->

<?php include("diseños/_main-header.php"); ?>
  
  <script type="text/javascript" src="js/main-scripts.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $.ajax({
        url:'servicios/producto/get_all_products.php',
        type:'POST',
        data:{},
        success:function(data){
          console.log(data);
          let html='';
          for (var i = 0; i < data.datos.length; i++) {
            html+=
            '<div class="product-box">'+
              '<a href="producto.php?p='+data.datos[i].codpro+'">'+
                '<div class="product">'+
                  '<img src="assets/products/'+data.datos[i].marpro+'">'+
                  '<div class="detail-title">'+data.datos[i].nompro+'</div>'+
                  '<div class="detail-description">'+data.datos[i].despro+'</div>'+
                  '<div class="detail-price">'+formato_precio(data.datos[i].prepro)+'</div>'+
                '</div>'+
              '</a>'+
            '</div>';
          }
          document.getElementById("space-list").innerHTML=html;
        },
        error:function(err){
          console.error(err);
        }
      });
    });
    function formato_precio(valor){
      //10.99
      let svalor=valor.toString();
      let array=svalor.split(".");
      return "S/. "+array[0]+".<span>"+array[1]+"</span>";
    }
  </script>








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
</body>



</html>