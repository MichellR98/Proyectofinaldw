
<?php
include_once('config/config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quienes somos</title>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>
<body>
<?php  
include('menu.php')
?>
<div class="col-lg-10 col-md-10 col-sm-12 justify-content-center" >
    <h1 class="text-center">QUIENES SOMOS</h1>  
</div>


<br>

<div class="col-lg-8 col-md-10 col-sm-12 align-items-center justify-content-center">
  <div class="container mp-8 mt-1">
    <div class="col-lg-8 col-md-10 col-sm-12" >
      <div class="card width=300px 30rem">
          <img src="./images/imagenmujer1.webp" class="card-img-top" alt="...">
          <div class="card-body">
              <p class=""> <h4> ¡Hola! Mi nombre es Michell y te ayudaré con tus auditorias para que mejores la eficiencia de tu empresa, empecemos. </p></h4>
          </div>
      </div>
    </div>
  </div>
</div>
<br>
<br>
<div class="center">
<h5> Aqui encontrarás algunos de los testimonios de quienes han adquirido nuestros productos para que evalues la calidad que manejamos y la calidad que dejaremos en tu compañía. Nuestro lema siempre será la excelencia, ya que ése siempre será el objetivo. Nosotros ya somos los mejores en auditorias y queremos que tu tambien lo seas, asi que bienvenido al cambio.</h5>
</div>
<br>
<br>
  <h2 class="text-center">TESTIMONIOS</h2>

  <br>
<div class="justify-content-center">
  <div class="text-center">

    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="card w-75 h-60">
          <img src="./images/hombretestimonio1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Carlos Torres</h5>
            <p class="card-text">Debo decir que después de la auditoría realizada por Michell, mi empresa mejoró muchísimo. Vendemos más, los empleados están contentos y mejoramos los indicadores de productividad.</p>
          </div>
        <div class="card-footer">
        <small class="text-muted">Carlos, aditoría financiera</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card w-75 h-60">
      <img src="./images/mujertestimonio1.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Adriana Suárez</h5>
        <p class="card-text">Antes tenía inconvenientes con la calidad de mis productos, pero después de la  auditoría de Michell, la calidad ya no es problema, las quejas disminuyeron casi a cero y somos los mejores en nuestra área.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Adriana, auditoría general</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card w-75 h-60">
      <img src="./images/mujertestimonio2.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Beatríz Ibañez</h5>
        <p class="card-text">Teniendo en cuenta la calidad de mi empresa, pensé que nada podía mejorar, pero al realizar la auditoría personalizada me dí cuenta que la excelencia es el objetivo ya que siempre hay algo que mejorar, siempre estaré muy agradecida.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Beatríz, auditoría personalizada</small>
      </div>
    </div>
  </div>
</div>
</div>

</div>
<br>
<br>


<div class="card">
  <h5 class="card-header">Somos reconocidos por nuestros resultados</h5>
  <div class="card-body">
    <h5 class="card-title">Siempre buscando que mejores hasta el minimo detalle</h5>
    <p class="card-text">Ven y hagamos que tu compañía sea la mejor, no lo dudes, siempre hay algo que mejorar y el objetivo es la excelencia.</p>
    <a href="./servicios.php" target="_blank" class="btn btn-primary">Empecemos</a>
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