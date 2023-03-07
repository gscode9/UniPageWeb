<?php
include("app/view/plantilla/sidebar.php");
?>
            <main class="col px-0 flex-grow-1">
                <div class="container py-5">
                    <div class="row">
                        <div class="col-sm-12 col-lg-4">
                            <div class="form-row row justify-content-md-center mb-9">
                                <div class="card" style="width: 17.5rem;">
                                    <img src="http://localhost/uni/assets/img/mujer.png" alt="foto de perfil">
                                    <div class="card-body">
                                        <button type="button" class="btn btn-danger btn-sm">Cambiar</button>
                                    </div>
                                </div>
                        
                            <!-- 
                            Modelo
                            $sql = "select * from docentes where idDocente='" . $idDocente . "'";
                            $resultado = mysqli_query($conexion, $sql);
                            
                            Controller
                            $idDocente = $_GET['idDocente'];
                            $dato = mysqli_fetch_assoc($resultado);

                            View
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
                            $tipoSangre = $dato["tipoSangre"]; -->
                        
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
                                        <label for="sexo">Genero</label>
                                        <input type="text" class="form-control" name="sexo"
                                            value="<?php echo $genero; ?>">
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