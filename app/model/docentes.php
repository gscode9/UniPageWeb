<?php
include("app/model/conexion.php");

class Docente{
    //Declaración de las variables
    private $conexion;
    // private $idDocente;
    // private $nombre;
    // private $apodo;
    // private $email;
    // private $password;
    // private $confirm_password;
    // private $apellidoPaterno;
    // private $apellidoMaterno;
    // private $fecNacimiento;
    // private $dni;
    // private $celular;
    // private $ciudad;
    // private $provincia;
    // private $distrito;
    // private $genero;
    // private $estadoCivil;
    // private $direccion;
    // private $ruc;
    // private $tipoSangre;

    public function __construct(){
        $this->conexion= new Conexion;
        $this->conexion=$this->conexion->conectar();
    }
    public function login($email,$password){
        $consulta = $this->conexion->query("SELECT * FROM docentes WHERE email ='".$email."' AND password ='".$password."'");
        return $consulta;
    }
    public function MostarDatosDocente($idDocentes){
        $consulta = $this->conexion->query("SELECT * FROM docentes WHERE idDocente ='".$idDocentes."'");
        // $retorno = [];

        // $i = 0;
        // while($datos = $consulta->fetch_assoc()){
        //     $retorno[$i] = $datos;
        //     $i++;
        // }

        // return $retorno;
        return $consulta;
    }
    public function EditarDatosDocente(){
        // Consulta update
    }
}
?>