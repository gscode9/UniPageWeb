<?php
// Usar condicionales(o estructura de control) para determinar que vista mostrar
// $array=["Inicio","Datos personales","Editar datos","Asistencia", "Asistencia mensual"];

// if(isset($_GET["datospersonales"])){
//     require("app/model/docentes.php");

//     $docente = new Docente();
//     $docente = $docente->MostarDatosDocente($idDocentes);
//     $title = $array[1];
//     require("app/view/datospersonales.php");
// }else{
//     require("app/view/inicio.php");
//     $title = $array[0];
// }
//-----------------------------------------------------------------------------------------------------------
// class Controller{
//     public function navegacion(){
        if(!isset($_GET["pagina"]) && empty($GET["pagina"])) return include("app/view/login.php");
//     }
// }
?>