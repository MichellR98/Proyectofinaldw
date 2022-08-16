
<link rel="stylesheet" href="./css/style.css" />
<?php

include('../config/config.php');
include('formularios.php');

$p = new Cliente();

$dp = mysqli_fetch_object($p->getOne($_GET['id']));

if (isset($_POST) && !empty($_POST)){

    $update = $p->update($_POST);
    if($update){
        $mensaje ='<div class="alert alert-success" role="alert"> Sesion modificada con exito </div>';
    } else{
        $mensaje ='<div class="alert alert-danger" role="alert"> Error! </div>';
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Sesion</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>


<body>

<?php  
    include('menuadmi.php')

?>
    
<div class="container" >
    <?php
        if(isset($mensaje)){
            echo $mensaje;
        }

    ?>
 <h2 class="text-center mb-2" > Detalles/Modificar datos</h2>

 <form method="POST" enctype="Multipart/form-data" >

    <div class="row mb-2" >
        <div class="col">

            <input type="text" name="nombrecompleto" id="nombrecompleto" placeholder="Nombres del cliente" class="form-control" value='<?= $dp->nombrecompleto ?>' />
            <input type="hidden" name="id" id="id" value="<?= $dp->id ?>">
        </div>
        <div>
            <input type="number" name="celular" id="celular" placeholder="celular del cliente" class="form-control" value= '<?= $dp->celular ?>'>
        </div>
    </div>

    <div class="row mb-2" >
        
        <div>
            <input type="correo" name="correo" id="celular" placeholder="correo del cliente" class="form-control" value= '<?= $dp-> correo ?>' >
        </div>
    </div>

    <div class="row mb-2" >
        <div class="col">

            <textarea name="descripcion" id="descripcion" class="form-control">
            <?= $dp->descripcion ?></textarea>
        </div>
        
    </div>
        <button class="btn btn-success"> Modificar </button>
 </form>


</div>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>