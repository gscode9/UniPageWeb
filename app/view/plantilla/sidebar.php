<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Estilos css -->
    <link rel="stylesheet" href="http://localhost/uni/assets/css/estilos.css">
    <script src="https://kit.fontawesome.com/49d04c18f2.js" crossorigin="anonymous"></script>
   <title><?php echo $title?></title> 
    <!-- <title>Inicio</title> -->
</head>
<body class="m-0">
    <div class="container-fluid">
        <div class="row min-vh-100 flex-column flex-md-row">
            <aside class="col-12 col-md-3 col-xl-2 p-0 bg-dark flex-shrink-1">
                <nav class="navbar navbar-expand-md navbar-dark bd-dark flex-md-column flex-row align-items-center py-0 text-center sticky-top h-100" id="sidebar">
                    <!--Nav Header-->
                    <div class="text-center p-3 px-4 d-none d-sm-block d-md-none">
                        <a href="./index.php?pagina=inicio" class="navbar-brand mx-0 font-weight-bold text-nowrap">
                            <img src="http://localhost/uni/assets/img/logo-uni1.png" alt="perfil" class="img-fluid my-2 p-1" style="width: 2rem;">
                            <span class="fs-6 text-nowrap">UNI EARPFIM DOCENTE</span>
                            
                        </a>
                    </div>
                    <!--Sidebar Header-->
                    <div class="text-center p-3 px-4 bg-light d-sm-none d-md-block">
                        <a href="./index.php?pagina=inicio" class="navbar-brand mx-0 font-weight-bold text-nowrap">
                            <img src="http://localhost/uni/assets/img/logo-uni1.png" alt="perfil" class="img-fluid my-2 p-1" style="width: 2rem;">
                            <span class="fs-6 text-nowrap text-dark">UNI EARPFIM DOCENTE</span>
                        </a>
                    </div>
                    <button type="button" class="navbar-toggler border-0 order-1" data-bs-toggle="collapse" data-bs-target="#nav" aria-controls="nav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse order-last w-100" id="nav">
                        <ul class="navbar-nav flex-column w-100 h-100 d-flex">
                            <li class="nav-item mt-4">
                                <!-- creacion de una variable en una ruta -->
                                <a href="./index.php?pagina=datospersonales" class="nav-link">
                                    <i class="far fa-user"></i>
                                    Datos Personales
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="./index.php?pagina=asistencia" class="nav-link">
                                    <i class="far fa-calendar"></i>
                                    Asistencia
                                </a>
                            </li>
                            <li class="d-grid gap-3 mt-auto">
                                <a href="./index.php?pagina=iniciosesion" class="p-4 bg-light border position-relative text-decoration-none d-none d-sm-block d-md-none">
                                    <!--Nav-Cerrar Sesión-->
                                    <div class="text-dark fst-italic font-monospace">
                                        <i class="fas fa-sign-out-alt"></i>
                                        <span>Cerrar Sesión</span>
                                    </div>
                                </a>
                                <a href="./index.php?pagina=iniciosesion" class="p-4 bg-light border position-relative text-decoration-none d-none d-md-block">
                                    <img src="http://localhost/uni/assets/img/mujer.png" alt="foto perfil" class="img-fluid rounded-circle position-absolute top-0 start-0 w-25 m-1 d-none d-md-block">
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