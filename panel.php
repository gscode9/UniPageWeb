<?php
session_start();


if (!isset($_SESSION['nombre'])){
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bienvenido a su cuengta</h1>
    <a href="logout.php">CERRAR SESION</a>
</body>
</html>