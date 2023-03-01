<?php
include("conex.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
    <script src="https://kit.fontawesome.com/49d04c18f2.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row min-vh-100 flex-column flex-md-row">
            <aside class="col-12 col-md-3 col-xl-2 p-0 bg-dark flex-shrink-1">
                <nav class="navbar navbar-expand-md navbar-dark bd-dark flex-md-column flex-row align-items-center py-0 text-center sticky-top h-100"
                    id="sidebar">
                    <!--Nav Header-->
                    <div class="text-center p-3 px-4 d-none d-sm-block d-md-none">
                        <a href="index.html" class="navbar-brand mx-0 font-weight-bold text-nowrap">
                            <img src="./img/logo-uni1.png" alt="perfil" class="img-fluid my-2 p-1" style="width: 2rem;">
                            <span class="fs-6 text-nowrap">UNI EARPFIM DOCENTE</span>
                        </a>
                    </div>
                    <!--Sidebar Header-->
                    <div class="bg-light col-12 p-3 d-sm-none d-md-block">
                        <a href="index.html" class="navbar-brand mx-0 font-weight-bold text-nowrap">
                            <img src="./img/logo-uni1.png" alt="perfil" class="img-fluid my-2 p-1" style="width: 2rem;">
                            <span class="fs-6 text-nowrap text-dark">UNI EARPFIM DOCENTE</span>
                        </a>
                    </div>
                    <button type="button" class="navbar-toggler border-0 order-1" data-bs-toggle="collapse"
                        data-bs-target="#nav" aria-controls="nav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse order-last w-100" id="nav">
                        <ul class="navbar-nav flex-column w-100 h-100 d-flex">
                            <li class="nav-item mt-4">
                                <a href="./datospersonales.php" class="nav-link">
                                    <i class="far fa-user"></i>
                                    Datos Personales
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="asistencia.php" class="nav-link">
                                    <i class="far fa-calendar"></i>
                                    Asistencia
                                </a>
                            </li>
                            <li class="d-grid gap-3 mt-auto">
                                <a href="./iniciosesion.html"
                                    class="p-4 bg-light border position-relative text-decoration-none d-none d-sm-block d-md-none">
                                    <!--Nav-Cerrar Sesión-->
                                    <div class="text-dark fst-italic font-monospace">
                                        <i class="fas fa-sign-out-alt"></i>
                                        <span>Cerrar Sesión</span>
                                    </div>
                                </a>
                                <a href="./iniciosesion.html"
                                    class="p-4 bg-light border position-relative text-decoration-none d-none d-md-block">
                                    <picture>
                                        <img src="./img/mujer.png" alt="foto perfil"
                                            class="img-fluid rounded-circle position-absolute top-0 start-0 d-none d-md-block m-1"
                                            style="width: 60px;">
                                    </picture>

                                    <!--Sidebar-Cerrar Sesión-->
                                    <div class="ms-5 text-dark fst-italic fst-bold font-monospace text-nowrap">
                                        <i class="fas fa-sign-out-alt"></i>
                                        <span>Cerrar Sesión</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </aside>
            <main class="col px-0 flex-grow-1">
                <div class="container py-5">
                    <div class="row">
                        <div class="col-sm-12 col-lg-4">
                            <div class="form-row row justify-content-md-center mb-9">
                                <div class="card" style="width: 17.5rem;">
                                    <img src="./img/mujer.png" alt="foto de perfil">
                                    <div class="card-body">
                                        <button type="button" class="btn btn-danger btn-sm">Cambiar</button>
                                    </div>
                                </div>
                                <?php
                            $idDocente = $_GET['idDocente'];
                            $sql = "select * from docentes where idDocente='" . $idDocente . "'";
                            $resultado = mysqli_query($conex, $sql);

                            $dato = mysqli_fetch_assoc($resultado);
                            $nombre = $dato["nombre"];
                            $apellidoPaterno = $dato["apellidoPaterno"];
                            $apellidoMaterno = $dato["apellidoMaterno"];
                            $email = $dato["email"];
                            $fecNacimiento = $dato["fecNacimiento"];
                            $dni = $dato["dni"];
                            $celular = $dato["celular"];
                            $ciudad = $dato["ciudad"];
                            $provincia = $dato["provincia"];
                            $distrito = $dato["distrito"];
                            $sexo = $dato["sexo"];
                            $estadoCivil = $dato["estadoCivil"];
                            $direccion = $dato["direccion"];
                            $ruc = $dato["ruc"];
                            $tipoSangre = $dato["tipoSangre"];
                            mysqli_close($conex);
                        ?>
                                <div class="form-group col-md-9 mt-4">
                                    <label for="contraseña">Email y Contraseña</label>
                                    <p class="text-dark bg-light p-2 rounded"><?php echo $email; ?></p>
                                </div>
                                <div class="form-group col-md-9">
                                    <p>
                                        <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample"
                                            role="button" aria-expanded="false" aria-controls="collapseExample">
                                            Cambiar contraseña
                                        </a>
                                    </p>
                                    <div class="collapse" id="collapseExample">
                                        <div class="card card-body">
                                            <form>
                                                <div class="form-group">
                                                    <label for="contraseña_anterior">Contraseña Anterior</label>
                                                    <input type="password" class="form-control"
                                                        id="contraseña_anterior">
                                                </div>
                                                <div class="form-group">
                                                    <label for="nueva_contraseña">Nueva Contraseña</label>
                                                    <input type="password" class="form-control" id="nueva_contraseña">
                                                </div>
                                                <div class="form-group">
                                                    <label for="confirmar_contraseña">Confirmar Nueva Contraseña</label>
                                                    <input type="password" class="form-control"
                                                        id="confirmar_contraseña">
                                                </div>
                                                <button type="submit" class="btn btn-secondary mt-3">Guardar</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-8">
                            <form action="./redireccionar.php" method="post" class="bg-light p-4 rounded">
                                <div class="form-row row justify-content-md-center">
                                    <div class="form-group col-md-4">
                                        <label for="nombre">Nombre</label>
                                        <input type="text" class="form-control" name="nombre"
                                            value="<?php echo $nombre; ?>">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="apellido_paterno">Apellido Paterno</label>
                                        <input type="text" class="form-control" name="apellidoPaterno"
                                            value="<?php echo $apellidoPaterno; ?>">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="apellido_materno">Apellido Materno</label>
                                        <input type="text" class="form-control" name="apellidoMaterno"
                                            value="<?php echo $apellidoMaterno; ?>">
                                    </div>
                                </div>
                                <div class="form-row row justify-content-md-center">
                                    <div class="form-group col-md-12">
                                        <label for="email">Correo electronico</label>
                                        <input type="email" class="form-control" name="email"
                                            value="<?php echo $email; ?>">
                                    </div>
                                </div>
                                <div class="form-row row justify-content-md-center">
                                    <div class="form-group col-md-4">
                                        <label for="fecha_nacimiento">Fecha Nacimiento</label>
                                        <input type="date" class="form-control" name="fecNacimiento"
                                            value="<?php echo $fecNacimiento; ?>">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="dni">Dni</label>
                                        <input type="text" class="form-control" name="dni" value="<?php echo $dni; ?>">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="celular">Celular</label>
                                        <input type="text" class="form-control" name="celular"
                                            value="<?php echo $celular; ?>">
                                    </div>
                                </div>
                                <div class="form-row row justify-content-md-center">
                                    <div class="form-group col-md-4">
                                        <label for="ciudad">Ciudad</label>
                                        <input type="text" class="form-control" name="ciudad"
                                            value="<?php echo $ciudad; ?>">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="provincia">Provincia</label>
                                        <input type="text" class="form-control" name="provincia"
                                            value="<?php echo $provincia; ?>">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="distrito">Distrito</label>
                                        <input type="text" class="form-control" name="distrito"
                                            value="<?php echo $distrito; ?>">
                                    </div>
                                </div>
                                <div class="form-row row justify-content-md-center">
                                    <div class="form-group col-md-6">
                                        <label for="sexo">Sexo</label>
                                        <input type="text" class="form-control" name="sexo"
                                            value="<?php echo $sexo; ?>">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="sexo">Estado Civil</label>
                                        <input type="text" class="form-control" name="estadoCivil"
                                            value="<?php echo $estadoCivil; ?>">
                                    </div>
                                </div>
                                <div class="form-row row justify-content-md-center">
                                    <div class="form-group col-md-4">
                                        <label for="direccion">Dirección</label>
                                        <input type="text" class="form-control" name="direccion"
                                            value="<?php echo $direccion; ?>">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="ruc">Ruc</label>
                                        <input type="text" class="form-control" name="ruc" value="<?php echo $ruc; ?>">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="tipo_sangre">Tipo Sangre</label>
                                        <input type="text" class="form-control" name="tipoSangre"
                                            value="<?php echo $tipoSangre; ?>">
                                    </div>
                                    <input type="hidden" name="idDocente" value="<?php echo $idDocente; ?>">
                                </div>
                                <div class="form-row row justify-content-md-center pt-3">
                                    <input class="btn btn-secondary text-decoration-none text-white" type="submit"
                                        name="enviar" value="Guardar Cambios">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>

</html>