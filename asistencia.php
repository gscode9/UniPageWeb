<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
    <script src="https://kit.fontawesome.com/49d04c18f2.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row min-vh-100 flex-column flex-md-row">
          <aside class="col-12 col-md-3 col-xl-2 p-0 bg-dark flex-shrink-1">
            <nav class="navbar navbar-expand-md navbar-dark bd-dark flex-md-column flex-row align-items-center py-0 text-center sticky-top h-100" id="sidebar">
                <!--Nav Header-->
                <div class="text-center p-3 px-4 d-none d-sm-block d-md-none">
                    <a href="index.html" class="navbar-brand mx-0 font-weight-bold text-nowrap">
                        <img src="./img/logo-uni1.png" alt="perfil" class="img-fluid my-2 p-1" style="width: 2rem;">
                        <span class="fs-6 text-nowrap">UNI EARPFIM DOCENTE</span>
                    </a>
                </div>
                <!--Sidebar Header-->
                <div class="text-center p-3 px-4 bg-light d-sm-none d-md-block">
                    <a href="index.html" class="navbar-brand mx-0 font-weight-bold text-nowrap">
                        <img src="./img/logo-uni1.png" alt="perfil" class="img-fluid my-2 p-1" style="width: 2rem;">
                        <span class="fs-6 text-nowrap text-dark">UNI EARPFIM DOCENTE</span>
                    </a>
                </div>
                <button type="button" class="navbar-toggler border-0 order-1" data-bs-toggle="collapse" data-bs-target="#nav" aria-controls="nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse order-last w-100" id="nav">
                    <ul class="navbar-nav flex-column w-100 h-100 d-flex">
                        <li class="nav-item mt-4">
                            <a href="./datospersonales.html" class="nav-link">
                                <i class="far fa-user"></i>
                                Datos Personales
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="asistencia.html" class="nav-link">
                                <i class="far fa-calendar"></i>
                                Asistencia
                            </a>
                        </li>
                        <li class="d-grid gap-3 mt-auto">
                            <a href="./iniciosesion.html" class="p-4 bg-light border position-relative text-decoration-none d-none d-sm-block d-md-none">
                                <!--Nav-Cerrar Sesión-->
                                <div class="text-dark fst-italic font-monospace">
                                    <i class="fas fa-sign-out-alt"></i>
                                    <span>Cerrar Sesión</span>
                                </div>
                            </a>
                            <a href="./iniciosesion.html" class="p-4 bg-light border position-relative text-decoration-none d-none d-md-block">
                                <img src="./img/mujer.png" alt="foto perfil" class="img-fluid rounded-circle position-absolute top-0 start-0 w-25 m-1 d-none d-md-block">
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
              <div class="container py-4">
                <div class="row">
                  <div class="col-sm-12 col-lg-6">
                    <div class="card text-center">
                      <div class="card-header">
                        ASISTENCIA DEL DOCENTE
                      </div>
                      <div class="card-body" >
                        <h5 class="card-title">Angela Ramirez Lozano</h5>
                        <img src="./img/mujer.png" class="img-fluid" alt="foto de perfil" style="width: 17.5rem;">
                        <p class="card-text">Marcar Asistencia</p>
                        <div>
                          <a href="#" class="btn btn-primary">Entrada</a>
                          <span class="fw-bold">00:00:00 </span>
                          <a href="#" class="btn btn-primary">Salida</a>
                          <span class="fw-bold">00:00:00</span>
                          <a href="#" class="btn btn-warning btn-sm">Justificar</a>
                        </div>
                      </div>
                      <div class="card-footer text-muted">
                        <p>
                          <span>Resumen de Asistencia</span>
                          <span>
                            <a class="fst-italic text-primary text-decoration-none" href="asistencia-mensualdocente.html">vista mensual</a>
                          </span>
                        </p>
                        <span class="fw-bold">P: 0 T: 0 F:0</span>
                      </div>
                    </div>
                  </div>  
                  <div class="col-sm-12 col-lg-6 pt-2">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Alumnos
                          </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                          <form class="accordion-body">
                            <div class="row">
                              <div class="col-sm-3">
                                <label for="inputState">Ciclo</label>
                                <select id="inputState" class="form-control">
                                  <option selected></option>
                                  <option>CICLO I</option>
                                  <option>CICLO II</option>
                                  <option>CICLO V</option>
                                </select>
                              </div>
                              <div class="col-sm-3">
                                <label for="inputState">Seccion</label>
                                <select id="inputState" class="form-control">
                                  <option selected></option>
                                  <option>A</option>
                                  <option>B</option>
                                  <option>C</option>
                                </select>
                              </div>
                              <div class="col-sm-6">
                                <label for="inputState">Curso</label>
                                <select id="inputState" class="form-control">
                                  <option selected></option>
                                  <option>TECNOLOGIA DE LA SOLDADURA I</option>
                                  <option>PROCESOS DE MANOFACTURA II</option>
                                  <option>MECANICO I</option>
                                  <option>MECANICO II</option>
                                  <option>DINAMICA</option>
                                  <option>ESTADISTICA Y PROBABILIDAD</option>
                                </select>
                              </div>
                              <div class="my-3">
                                <button type="submit" class="btn btn-secondary">Asistencia</button>
                                <button type="submit" class="btn btn-secondary">Justificación</button>
                              </div>
                            </form>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                              Practicantes
                            </button>
                          </h2>
                          <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <form class="accordion-body">
                              <div class="row">
                                <div class="col-sm-6">
                                  <label for="inputState">Turno</label>
                                  <select id="inputState" class="form-control">
                                    <option selected></option>
                                    <option>MAÑANA</option>
                                    <option>TARDE</option>
                                  </select>
                                </div>
                                <div class="col-sm-6">
                                  <label for="inputState">Carrera</label>
                                  <select id="inputState" class="form-control">
                                    <option selected></option>
                                    <option>ING DE SOFTWARE</option>
                                    <option>DISEÑO GRAFICO</option>
                                  </select>
                                </div>
                            </div>
                            <div class="my-3">
                              <button type="submit" class="btn btn-secondary">Asistencia</button>
                              <button type="submit" class="btn btn-secondary">Justificación</button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </main>
          </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>