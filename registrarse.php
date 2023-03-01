<?php
    include 'conexion.php';

    $nombre = $_POST['nombre'];
    $apodo = $_POST['apodo'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    $query = "INSERT INTO users(nombre, apodo, email, password, confirm_password)
              VALUES('$nombre','$apodo', '$email', '$password','$confirm_password')";
    
    //Verificar que el correo no se repita en la DB
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM users WHERE email = '$email'");
    if(mysqli_num_rows($verificar_correo) > 0){
        echo '
        <script>
            alert("Este correo ya esta registrado, intenta con otro diferente");
            window.location = "index.php";
        </script>
        ';
        exit();
    }

    //Verificar que el apodo no se repita en la DB
    $verificar_apodo = mysqli_query($conexion, "SELECT * FROM users WHERE apodo = '$apodo'");
    if(mysqli_num_rows($verificar_apodo) > 0){
        echo '
        <script>
            alert("Este apodo ya esta registrado, intenta con otro diferente");
            window.location = "index.php";
        </script>
        ';
        exit();
    }
          
    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
        <script>
        alert("Usuario registrado exitosamente");
        window.location = "index.php";
        </script>
        ';
    }else{
        echo '
        <script>
        alert("Intentelo de nuevo, usuario no registrado");
        window.location = "index.php";
        </script>
        ';
    }
    mysqli_close($conexion);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./img/inicio.png" type="image/x-icon">
    <title>Registrarse</title>
    <link rel="stylesheet" href="./css/estilos-registrarse.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>

<body>
    <form action="" method="POST">
        <label for="name">
            <span>Nombre</span>
            <input type="text" placeholder="Escribe tu nombre" name="nombre">
        </label>
        <label for="nickname">
            <span>Apodo</span>
            <input type="text" name="apodo">
        </label>
        <label for="email">
            <span>Correo electronico</span>
            <input type="email" name="email">
        </label>
        <label for="password">
            <span>Contraseña</span>
            <input type="password" name="password">
        </label>
        <label for="confirm_password">
            <span>Confirma contraseña</span>
            <input type="password" name="confirm_password">
        </label>
        
        <input type="submit" value="Registrarse">
    </form>
</body>

</html>