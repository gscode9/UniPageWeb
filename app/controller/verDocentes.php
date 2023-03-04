<?php
require("../model/docentes.php");
// require("../model/docentes.php");

$docente = new Docente();
$profesores = $docente->ObtenerDatosDocente();

require("../view/datospersonales.php");
// require("../view/datospersonales.php");
?>