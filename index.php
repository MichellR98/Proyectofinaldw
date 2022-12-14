<?php
/*  en este index puedo crear todo el contenido multimedia */

include_once('config/config.php');


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>

<body>

<?php  
include('menu.php')
?>

<div class="container">

  <h1 class="text-center"> ¡Bienvenido a Auditorias Rodriguez S.A.S 
  <br>
  <br>
  Aquí encontraras las mejores auditorias para ti y tu empresa! </h1>
  <br>
</div>

<!-- Carrusel-->
<div class="d-flex justify-content-center">
  <div id="carouselExampleIndicators" class="carousel slide "style="width:80%" data-bs-ride="true">
  
      <div class="carousel-indicators">
        <button type="button" data-bs-target="carousel-indicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
         <button type="button" data-bs-target="carousel-indicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="carousel-indicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
        <a href="./servicios.php" target="_blank" title="Auditoria Financiera"> <img src="../images/asesoriasfinancieras.PNG"  class="d-block w-100" height="420px" alt="auditoria financieras"> </a>
        </div>
          <div class="carousel-item">
             <a href="./servicios.php" target="_blank" title="Auditoria personalizadas"> <img src="../images/asesoriaspersonalizadas.png" href="./servicios.php" class="d-block w-100"height="420px" alt="auditoria personalizadas"> </a>
          </div>
              <div class="carousel-item">
                <a href="./servicios.php"  target="_blank" title="Auditoria interna y externa"> <img src="../images/auditoriainternayexterna.jpg" href="./servicios.php" class="d-block w-100" height="420px" alt="auditoria interna y externa"> </a>
              </div>

    



      <button class="carousel-control-prev" type="button"   data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
      </button>
          <button class="carousel-control-next" type="button"   data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
          </button>

    </div>
  </div>
</div> 



<!-- Texto-->
<div>

    <div class="container col-lg-10 col-md-9 col-sm-12  justify-content-center">

        <div class="col-lg-10 col-md-9 col-sm-12  justify-content-center">
          <p>
            <br>
            <br>
           <h2> ¿En qué consiste una Auditoria?</h2>
           <br>
           <h5>Se trata de examinar, evaluar, controlar y dar seguimiento a la situación económica y operativa de una organización, de tal forma que se tenga visibilidad profunda de la situación de la empresa: cómo está operando, cuáles son sus procesos y si estos funcionan, en qué gasta, cómo y cuánto gasta, entre otros factores.</h5>
          </p>
        </div>
    
        <br>
        <div class="col-lg-10 col-md-9 col-sm-12  justify-content-center">
          <p>

          <h2>¿Cuáles son los beneficios de la auditoría? </h2>
            <br>    
            <h5>Las auditorías permiten identificar, analizar y corregir alguna deficiencia u omisión en los procesos. Muestra de manera tangible a terceros (inversionistas y clientes), el cumplimiento de normas de excelencia y calidad mundial.</h5>

          </p>
        </div>
    </div>
</div>  
 

  


<div class="card text-center">
  <div class="card-header">
    ¡No te conformes con resultados buenos, siempre hay algo mejor!
  </div>
  <div class="card-body">
    <h5 class="card-title">AQUI ENCONTRARÁS A TU MEJOR ALIADO</h5>
    <p class="card-text">Ven y conoce nuestros servicios.</p>
    <a href="./servicios.php" target="_blank" class="btn btn-primary">Vamos</a>
  </div>
  <div class="card-footer text-muted">
    Auditorias Rodríguez
  </div>
</div>

<br>
<br>


<div class=" my-0">
  <!-- Footer -->
  <footer
          class="text-center text-lg-start text-white"
          style="background-color: #F42BBB"
          >
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: Links -->
      <section class="">
        <!--Grid row-->
        <div class="row">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">
              Auditorias Rodriguez
            </h6>
            <p>
              Las auditorias son el camino a la excelencia, por eso, dejanos ayudarte, somos los mejores y pronto tu tambien lo serás!
            </p>
          </div>
          <!-- Grid column -->

          <hr class="w-100 clearfix d-md-none" />

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Nosotros</h6>
            <p>
              <a class="text-white" target="_blank"
               href="./index.php">Inicio</a>
            </p>
            <p>
              <a class="text-white" target="_blank"
               href="./quienes.php">Quienes somos</a>
            </p>
            <p>
              <a class="text-white" target="_blank"
               href="./servicios.php">Servicios</a>
            </p>
            <p>
              <a class="text-white" target="_blank"
               href="./formularios/add.php">Contactenos</a>
            </p>
          </div>
          <!-- Grid column -->

          <hr class="w-100 clearfix d-md-none" />

          <!-- Grid column -->
          <hr class="w-100 clearfix d-md-none" />

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Contáctanos</h6>
            <p><i class="fas fa-home mr-3"></i> Bogotá, Colombia</p>
            <p><i class="fas fa-envelope mr-3"></i> Auditoriasrodriguez@asr.com.co</p>
            <p><i class="fas fa-phone mr-3"></i> +57 3107632009</p>
            <p><i class="fas fa-print mr-3"></i> +57 3057891900</p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Siguenos</h6>

            <!-- Facebook -->
            <a
               class="btn btn-light btn-floating m-1"
               target="_blank"
               href="https://www.facebook.com/"

               role="button"
               ><i class="fa-brands fa-facebook"> Facebook </i
              ></a>

            <!-- Twitter -->
            <a
               class="btn btn-light btn-floating m-1"
               target="_blank"
               href="https://twitter.com/?lang=es"
               role="button"
               ><i class="fa-brands fa-twitter">Twitter</i>
              </a>

            <!-- Instagram -->
            <a
               class="btn btn-light btn-floating m-1"
               target="_blank"
               href="https://www.instagram.com/"
               role="button"
               ><i class="fa-brands fa-instagram"> Instagram</i
              ></a>

          </div>
        </div>
        <!--Grid row-->
      </section>
      <!-- Section: Links -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div
         class="text-center p-3"
         style="background-color: rgba(0, 0, 0, 0.2)"
         >
      © 2022 Copyright:
      <a class="text-white" 
         >MichellRodriguez</a
        >
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
</div>


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>