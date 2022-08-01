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
    <title>Document</title>
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
 <h2 class="text-center mb-2" > Registrar Cliente</h2>

 <form method="POST" enctype="multipart/form-data" >

    <div class="row mb-2" >
        <div class="col">

            <input type="text" name="nombrecompleto" id="nombrecompleto" placeholder="Nombres del cliente" class="form-control" />
        </div>
        <div>
            <input type="text" name="celular" id="celular" placeholder="celular del cliente" class="form-control">
        </div>
    </div>

    <div class="row mb-2" >
        <div class="col">

            <input type="email" name="correo" id="correo" placeholder="Correo del cliente" class="form-control" />
        </div>
      <!--   <div>
            <input type="email" name="email" id="email" placeholder="email del paciente" class="form-control">
        </div> -->
    </div>

    <div class="row mb-2" >
        <div class="col">

            <textarea name="descripcion" id="descripcion" placeholder="descripcion de la solicitud" class="form-control" >
            </textarea>
        </div>
        
    </div>
        <button class="btn btn-success" > Registrar </button>
 </form>


</div>

</body>
</html>