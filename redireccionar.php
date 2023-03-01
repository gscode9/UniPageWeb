<?php
include("conex.php");

if(isset($_POST['enviar'])){
    $idDocente = $_POST['idDocente'];
    $nombre = $_POST['nombre'];
    $apellidoPaterno = $_POST['apellidoPaterno'];
    $apellidoMaterno = $_POST['apellidoMaterno'];
    $email = $_POST['email'];
    $fecNacimiento = $_POST['fecNacimiento'];
    $dni = $_POST['dni'];
    $celular = $_POST['celular'];
    $ciudad = $_POST['ciudad'];
    $provincia = $_POST['provincia'];
    $distrito = $_POST['distrito'];
    $sexo = $_POST['sexo'];
    $estadoCivil = $_POST['estadoCivil'];
    $direccion = $_POST['direccion'];
    $ruc = $_POST['ruc'];
    $tipoSangre = $_POST['tipoSangre'];

    $sql = "update docentes set nombre='".$nombre."',apellidoPaterno='".$apellidoPaterno."',apellidoMaterno='".$apellidoMaterno."',email='".$email."',fecNacimiento='".$fecNacimiento."',dni='".$dni."',celular='".$celular."',ciudad='".$ciudad."',provincia='".$provincia."',distrito='".$distrito."',sexo='".$sexo."',estadoCivil='".$estadoCivil."',direccion='".$direccion."',ruc='".$ruc."',tipoSangre='".$tipoSangre."' where idDocente='". $idDocente."'";
    $resultado = mysqli_query($conex, $sql);
    mysqli_close($conex);
}
header("Location: http://localhost/proyecto/uniPageweb/datospersonales.php");
?>