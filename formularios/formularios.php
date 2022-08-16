<link rel="stylesheet" href="./css/style.css" />

<?php

include_once('../config/config.php');
include('../config/database.php');

class Cliente{

    public $conexion;

    function __construct()
    {
        $db = new Database();
        $this->conexion = $db->connectToDatabase();
    }

    function save($params){
        $nombrecompleto = $params['nombrecompleto'];
        $celular = $params['celular'];
        $correo = $params['correo'];
        $descripcion = $params['descripcion'];

        $insert = "INSERT INTO clientes VALUES(NULL, '$nombrecompleto', '$celular', '$correo', '$descripcion')";

        return mysqli_query($this->conexion, $insert);

    }
        function getAll(){
            $sql ="SELECT * FROM clientes";
            return mysqli_query($this->conexion, $sql);
        }

        function getOne($id){
            $sql = "SELECT * FROM clientes WHERE id = $id";
            return mysqli_query($this->conexion, $sql);
        }

        function update($params){
            $nombrecompleto = $params['nombrecompleto'];
            $celular = $params['celular'];
            $correo = $params['correo'];
            $descripcion = $params['descripcion'];
            $id = $params['id'];
            
            $update =" UPDATE Clientes SET nombrecompleto='$nombrecompleto', celular='$celular', correo='$correo', descripcion='$descripcion' WHERE id=$id ";
            return mysqli_query($this->conexion, $update);
        }
        function delete($id){

            $delete ="DELETE FROM Clientes WHERE id=$id";
            return mysqli_query($this->conexion, $delete);
        }
}

?>