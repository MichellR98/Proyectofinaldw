<?php

class database {

    public $host = 'localhost'; // servidor
    public $user = 'root'; // Usuario de phpMyadmin
    public $pass = ''; // contraseña de phpMyadmin
    public $db = 'actividadcuatro'; // base de datos
    public $conexion; 


    function __construct(){
        $this->conexion = $this->connectToDatabase(); /* Asignamos la funcion de conexion */
        return $this -> conexion; /* Me activa la conexion */
    }

    function connectToDatabase(){
        $conexion= mysqli_connect($this->host, $this->user, $this->pass, $this->db);

        if(mysqli_connect_error()){ /* Si hay un error que me lo muestre */
            echo "Tenemos un error de conexion " . mysqli_connect_error();
        }
        return $conexion; /* Me activa la conexion */

    }

}

?>
 

