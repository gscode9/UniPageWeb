<?php
class Conexion{
    private $host;
    private $user;
    private $pass;
    private $database;

    function __construct(){
        $this -> host = "localhost";
        $this -> user = "root";
        $this -> pass = "";
        $this -> database = "uni";
    }

    public function conectar(){
        $conexion = new mysqli($this->host, $this->user, $this->pass, $this->database);

        //Validar la conexión
        if($conexion->connect_error==""){
            return $conexion;
        }else{
            return null;
        }
    }
}
?>