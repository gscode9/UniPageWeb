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
    <title>Inicio</title>
</head>
<body class="m-0">
    <div class="container-fluid">
        <div class="row min-vh-100 flex-column flex-md-row">
            <aside class="col-12 col-md-3 col-xl-2 p-0 bg-dark flex-shrink-1">
                <nav class="navbar navbar-expand-md navbar-dark bd-dark flex-md-column flex-row align-items-center py-0 text-center sticky-top h-100" id="sidebar">
                    <!--Nav Header-->
                    <div class="text-center p-3 px-4 d-none d-sm-block d-md-none">
                        <a href="index.html" class="navbar-brand mx-0 font-weight-bold text-nowrap">
                            <img src="http://localhost/uni/assets/img/logo-uni1.png" alt="perfil" class="img-fluid my-2 p-1" style="width: 2rem;">
                            <span class="fs-6 text-nowrap">UNI EARPFIM DOCENTE</span>
                            
                        </a>
                    </div>
                    <!--Sidebar Header-->
                    <div class="text-center p-3 px-4 bg-light d-sm-none d-md-block">
                        <a href="index.html" class="navbar-brand mx-0 font-weight-bold text-nowrap">
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
                                <a href="./iniciosesion.php" class="p-4 bg-light border position-relative text-decoration-none d-none d-sm-block d-md-none">
                                    <!--Nav-Cerrar Sesión-->
                                    <div class="text-dark fst-italic font-monospace">
                                        <i class="fas fa-sign-out-alt"></i>
                                        <span>Cerrar Sesión</span>
                                    </div>
                                </a>
                                <a href="./iniciosesion.html" class="p-4 bg-light border position-relative text-decoration-none d-none d-md-block">
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
            <main class="col px-0 flex-grow-1">
                <div class="container py-3">
                    <article>
                        <h1 class="font-weight-light">Bienvenido, Adriana Losano</h1>
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                        <p>La Facultad de Ingeniería Mecánica de la Universidad Nacional de Ingeniería es líder en sus programas para formar ingenieros mecánicos, mecánicos eléctricos, navales y mecatrónicos los cuales promueven el desarrollo de la industria nacional e internacional considerando la investigación, innovación tecnológica y con sentido social.</p>
                        <img src="http://localhost/uni/assets/img/facultad-mecanica.png" alt="facultad de ingeniería mecánica" class="position-absolute top-20 start-50 translate-middle-x img-fluid rounded">
                    </article>
                </div>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>