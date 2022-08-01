<?php
include_once('../config/config.php');
include('formularios.php');

$p = new Cliente();
$data = $p->getAll();
if(isset($_GET['id']) && !empty($_GET['id']))
{
   $remove = $p->delete($_GET['id']);
   if($remove){
    header('Location: index.php');
   } else {
    $mensaje= '<div class="alert alert-danger" rol="alert"> Error al eliminar </div>';
   }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    
    , initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>


<body>
<?php  
    include('../menu.php')

?>    

<div class="container" >
<h2 class="text-center mb-2" > Clientes Registrados </h2>
    <div class="row" >
        <?php
        while($pt = mysqli_fetch_object($data)){
           
            echo "<div class='col-6'>";
            echo "<div class='border border-info p-2'>";
                    echo "<h5>Nombre:  $pt->nombrecompleto  </h5>";
                        echo "<p> <b> Celular: $pt->celular </b>  </p>";

                        echo "<div class='center'> <a class='btn btn-success' href='". ROOT ."/formularios/edit.php?id=$pt->id' >Modificar</a> - <a class='btn btn-danger' href='". ROOT ."/formularios/index.php?id=$pt->id' >Eliminar</a> </div>";;
                    
                        echo "</div>";
                    echo "</div>";
               

        }

        ?>

    </div>
</div>

</body>
</html>