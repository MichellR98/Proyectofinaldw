
<link rel="stylesheet" href="./css/style.css" />
<?php 
include_once('../config/config.php');
include('formularios.php');


if (isset($_POST) && !empty($_POST)){

    $p = new Cliente();

    $save = $p->save($_POST);

    if($save){

        $mensaje = '<div class="alert alert-success"> Usuario registrado </div>';
    } else{
        $mensaje = '<div class="alert alert-danger"> Error al registrar </div>';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversemos</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>


<body>
    <?php  
    include('../menu.php')

    ?>
<div class="container" >
    <?php
        if(isset($mensaje)){
            echo $mensaje;
        }

    ?>
 <h2 class="text-center mb-2" > ¡Te Asesoramos! </h2>
<br>
 <form method="POST" enctype="multipart/form-data" >

    <div class="row mb-2" >

        <div class="col">

            <input type="text" name="nombrecompleto" id="nombrecompleto" placeholder="Tu nombre completo" class="form-control" />
        </div>
            
    
    <div class="row mb-2 mt-2">

        <div class="col">

            <input type="text" name="celular" id="celular" placeholder="Tu numero de celular" class="form-control">
        </div>

    </div>

    </div>

    <div class="row mb-2">
        <div class="col">

            <input type="email" name="correo" id="correo" placeholder="Tu correo electronico" class="form-control" />
        </div>
     
    </div>

    <div class="row mb-2">
        <div class="col">

            <textarea name="descripcion" id="descripcion" placeholder="Indicanos en que te podemos ayudar" class="form-control" >
            </textarea>
        </div>
        
    </div>
        <button class="btn btn-primary" > Enviar </button>
 </form>


</div>

</body>

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
      <a class="text-white" href="https://mdbootstrap.com/"
         >MichellRodriguez</a
        >
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
</div>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</html>