<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/uni/assets/css/estilos.css">
    <script src="https://kit.fontawesome.com/49d04c18f2.js" crossorigin="anonymous"></script>
    <title>Asistencia mensual del docente </title>
</head>
<body>
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
                <div class="col-lg-9 container pt-5">
                    <div class="form-row row md-center">
                        <div class="form-group col-auto">
                            <select class="form-select zonal_select w-35" aria-label="Default select example">
                                <option selected>Año</option>
                                <option value="1">2020</option>
                                <option value="2">2021</option>
                                <option value="3">2022</option>
                            </select>
                        </div>
                        <div class="form-group col-auto">
                            <select class="form-select zonal_select w-35" aria-label="Default select example">
                                <option selected>Mes</option>
                                <option value="1">Enero</option>
                                <option value="2">Febrero</option>
                                <option value="3">Marzo</option>
                                <option value="3">Abril</option>
                                <option value="3">Mayo</option>
                                <option value="3">Junio</option>
                                <option value="3">Julio</option>
                                <option value="3">Agosto</option>
                                <option value="3">Septiembre</option>
                                <option value="3">Octubre</option>
                                <option value="3">Noviembre</option>
                                <option value="3">Diciembre</option>
                            </select>
                        </div>
                    </div>
                    <table class="table table-striped table-hover text-nowrap">
                        <thead>
                          <tr>
                            <th scope="col">N°</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Hora Entrada</th>
                            <th scope="col">Hora Salida</th>
                            <th scope="col">Estado</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Martes</td>
                            <td>1:50:00 PM</td>
                            <td>7:50:00 PM</td>
                            <td>Puntual</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Miercoles</td>
                            <td>1:50:00 PM</td>
                            <td>7:50:00 PM</td>
                            <td>Puntual</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Jueves</td>
                            <td>1:50:00 PM</td>
                            <td>7:50:00 PM</td>
                            <td>Puntual</td>
                          </tr>
                        </tbody>
                      </table>
                </div>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>