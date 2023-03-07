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
                                        <h5 class="card-title text-center">Adriana Losano</h5>
                                        <p class="card-text text-center">76092925</p>
                                        <button type="button" class="btn btn-danger btn-sm">PDF</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-8">
                            <form class="bg-light p-4 rounded">
                            <?php
                            foreach($docente as $profesor){
                            ?>
                                <div class="form-row row justify-content-md-center">
                                    <div class="form-group col-md-4">
                                        <label for="nombre">Nombre</label>
                                        <p class="text-dark bg-white p-2 rounded"><?php echo $profesor['nombre']?></p>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="apellido_paterno">Apellido Paterno</label>
                                        <p class="text-dark bg-white p-2 rounded"><?php echo $profesor['apellidoPaterno']?>
                                        </p>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="apellido_materno">Apellido Materno</label>
                                        <p class="text-dark bg-white p-2 rounded"><?php echo $profesor['apellidoMaterno']?>
                                        </p>
                                    </div>
                                </div>
                                <div class="form-row row justify-content-md-center">
                                    <div class="form-group col-md-12">
                                        <label for="email">Correo electronico</label>
                                        <p class="text-dark bg-white p-2 rounded"><?php echo $profesor['email']?></p>
                                    </div>
                                </div>
                                <div class="form-row row justify-content-md-center">
                                    <div class="form-group col-md-4">
                                        <label for="fecha_nacimiento">Fecha Nacimiento</label>
                                        <p class="text-dark bg-white p-2 rounded"><?php echo $profesor['fecNacimiento']?>
                                        </p>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="dni">Dni</label>
                                        <p class="text-dark bg-white p-2 rounded"><?php echo $profesor['dni']?></p>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="celular">Celular</label>
                                        <p class="text-dark bg-white p-2 rounded"><?php echo $profesor['celular']?></p>
                                    </div>
                                </div>
                                <div class="form-row row justify-content-md-center">
                                    <div class="form-group col-md-4">
                                        <label for="ciudad">Ciudad</label>
                                        <p class="text-dark bg-white p-2 rounded"><?php echo $profesor['ciudad']?></p>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="provincia">Provincia</label>
                                        <p class="text-dark bg-white p-2 rounded"><?php echo $profesor['provincia']?></p>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="departamento">Distrito</label>
                                        <p class="text-dark bg-white p-2 rounded"><?php echo $profesor['distrito']?></p>
                                    </div>
                                </div>
                                <div class="form-row row justify-content-md-center">
                                    <div class="form-group col-md-6">
                                        <label for="sexo">Genero</label>
                                        <p class="text-dark bg-white p-2 rounded"><?php echo $profesor['genero']?></p>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="sexo">Estado Civil</label>
                                        <p class="text-dark bg-white p-2 rounded"><?php echo $profesor['estadoCivil']?></p>
                                    </div>
                                </div>
                                <div class="form-row row justify-content-md-center">
                                    <div class="form-group col-md-4">
                                        <label for="direccion">Dirección</label>
                                        <p class="text-dark bg-white p-2 rounded"><?php echo $profesor['direccion']?></p>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="ruc">Ruc</label>
                                        <p class="text-dark bg-white p-2 rounded"><?php echo $profesor['ruc']?></p>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="tipo_sangre">Tipo Sangre</label>
                                        <p class="text-dark bg-white p-2 rounded"><?php echo $profesor['tipoSangre']?></p>
                                    </div>
                                </div>
                                <div class="form-row row justify-content-md-center">
                                    <?php echo "<a class='btn btn-secondary text-decoration-none text-white' href='editardatos.php?idDocente=".$profesor['idDocente']."'>Editar</a>";?>
                                </div>
                                <?php
                                }
                                ?>
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