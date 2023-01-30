<?php
// session_start();
if (isset($_SESSION['ingreso'])) {
?>
    <!doctype html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="shortcut icon" href="../../images/logo.png">
        <!-- Link datatables -->
        <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.13.1/b-2.3.3/b-html5-2.3.3/b-print-2.3.3/datatables.min.css" />
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jszip-2.5.0/dt-1.13.1/b-2.3.3/b-html5-2.3.3/b-print-2.3.3/datatables.min.css" />
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
        <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script> -->
        <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jszip-2.5.0/dt-1.13.1/b-2.3.3/b-html5-2.3.3/b-print-2.3.3/datatables.min.js"></script>

        <script>
            $(document).ready(function() {
                $('#table').DataTable({
                    dom: 'Bfrtip',
                    buttons: [
                        'excel', 'print', 'pdf'
                    ],
                    "language": {
                        "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
                    },
                });
            }, );
        </script>


    </head>

    <body>

        <?php
        if ($_SESSION['rol'] == "Administrador") {
        ?>

            <div class="container fs-6 ">

                <p class="fs-6 fw-bold text-center"></p>

                <div class="row mb-3">

                    <div class=" mb-3">
                        <div class="rounded bg-light px-4 pt-3 pb-3">
                            <p class="fs-6">Bienvenido <?= $_SESSION['nombre'] ?></p>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">

                    <div class="col-lg-6 mb-3">

                        <div class="rounded bg-light px-4 pt-3 pb-3">

                            <!--  USUARIOS  -->

                            <p class="fs-6"> Personas Registradas </p>

                            <div class="row mb-3 justify-content-center">
                                <div class="col-lg-6">
                                    <div class="card border-success mb-3">
                                        <div class="card-header">Datos de Deporte</div>
                                        <a class="text-success" href="index.php?c=EstadisticasController&a=mostrarRtas">
                                            <div class="card-body text-center">

                                                <h5 class="card-title fs-2"> <?= $registroSalud ?> </h5>
                                                <p class="card-text "> Personas registadas en total</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>


                    <div class="col-lg-6 mb-3">

                        <div class="rounded bg-light px-4 pt-3 pb-3">

                            <!--  Distritos  -->

                            <p class="fs-6">Distritos de Guaymallén</p>

                            <div class="row mb-3 justify-content-center">
                                <div class="col-lg-6">
                                    <div class="card border-success mb-3">
                                        <div class="card-header">Cantidad</div>
                                        <a class="text-success" href="index.php?c=DistritosController&a=index">
                                            <div class="card-body text-center">
                                                <h5 class="card-title fs-2"><?= $cantDistritos ?></h5>
                                                <p class="card-text">En total</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="row justify-content-center">



                            </div>

                        </div>

                    </div>
                </div>



                <!--Segunda fila-->

                <div class="row mb-3">

                    <div class="col-lg-6 mb-3">

                        <div class="rounded bg-light px-4 pt-3 pb-3">



                            <p class="fs-6">Personas registradas</p>

                            <div class="row mb-3 justify-content-center">
                                <div class="col-lg-6">
                                    <div class="card border-success mb-3">
                                        <div class="card-header">Cantidad</div>
                                        <a class="text-success" href="index.php?c=UsuariosController&a=index">
                                            <div class="card-body text-center">
                                                <h5 class="card-title fs-2"><?= $cantPersonas ?></h5>
                                                <p class="card-text">En total</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="row justify-content-center">

                                <div class="col-lg-4">

                                    <div class="card border-success mb-3">
                                        <div class="card-header">Hombres</div>
                                        <a class="text-success" href="index.php?c=UsuariosController&a=index">
                                            <div class="card-body text-center">
                                                <h4 class="card-title fs-2"><?= $cantHombres ?></h4>
                                                <p class="card-text">Total</p>
                                            </div>
                                        </a>
                                    </div>

                                </div>

                                <div class="col-lg-4">

                                    <div class="card border-success mb-3">
                                        <div class="card-header">Mujeres</div>
                                        <a class="text-success" href="index.php?c=UsuariosController&a=index">
                                            <div class="card-body text-center">
                                                <h4 class="card-title fs-2"><?= $cantMujeres ?></h4>
                                                <p class="card-text">Total</p>
                                            </div>
                                        </a>
                                    </div>

                                </div>

                                <div class="col-lg-4">

                                    <div class="card border-success mb-3">
                                        <div class="card-header">No binario</div>
                                        <a class="text-success" href="index.php?c=UsuariosController&a=index">
                                            <div class="card-body text-center">
                                                <h4 class="card-title fs-2"><?= $cantNb ?></h4>
                                                <p class="card-text">Total</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-6 mb-3">

                        <div class="rounded bg-light px-4 pt-3 pb-3">

                            <p class="fs-6">Distritos de Guaymallén</p>

                            <div class="row mb-3 justify-content-center">
                                <div class="col-lg-6">
                                    <div class="card border-success mb-3">
                                        <div class="card-header">Cantidad</div>
                                        <a class="text-success" href="index.php?c=DistritosController&a=index">
                                            <div class="card-body text-center">
                                                <h5 class="card-title fs-2"><?= $cantDistritos ?></h5>
                                                <p class="card-text">En total</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>



            </div>








            <!--Ejemplo tabla con DataTables-->
            <div class="container">
                <h3 class="text-center"> Personal de Salud y Deporte</h3>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive">
                            <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th scope="col">DNI</th>
                                        <th scope="col">Nombre completo</th>
                                        <th scope="col">Actividad</th>
                                        <th scope="col">Distrito</th>
                                        <th scope="col">Roles</th>
                                        <th scope="col">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($listaAsistencia as $asistencia) {
                                    ?>
                                        <tr>
                                            <td> <?= $asistencia["cuil"] ?></td>
                                            <td><?= $asistencia["nombre"] . " " . $asistencia["apellido"] ?></td>
                                            <td><?= $asistencia["nombre_actividad"] ?></td>
                                            <td><?= $asistencia["nombre_distrito"] ?></td>
                                            <td><?= $asistencia["nombre_roles"] ?></td>
                                            <td>
                                                <button type="button" class="btn btn-success " data-bs-toggle="modal" data-bs-target="#editarUsuario<?= $asistencia['cuil'] ?>">
                                                    <i class="bi bi-pencil"></i>
                                                </button>

                                                <a class="btn btn btn-danger" href="vistas/inicio.php?c=controladorFormularios&a=ctrEliminarUsuario&dni=<?= $asistencia['cuil'] ?>">
                                                    <i class="bi bi-trash-fill"></i>
                                                </a>
                                            </td>
                                        </tr>

                                        <!-- MODAL EDITAR -->

                                        <div class="modal fade" id="editarUsuario<?= $asistencia['cuil'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <p class="modal-title fs-5" id="exampleModalLabel">Editar a <?= $asistencia["nombre"] . " " . $asistencia["apellido"] ?> </p>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <form action="vistas/inicio.php?c=controladorFormularios&a=ctrActualizarRegistro" method="post">
                                                        <div class="modal-body">
                                                            <div class="mb-3">
                                                                <label for="" class="form-label">Editar Nombre</label>
                                                                <input type="text" class="form-control" name="actualizarNombre" aria-describedby="helpId" value="<?= $asistencia["nombre"] ?>">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="" class="form-label">Editar Apellido</label>
                                                                <input type="text" class="form-control" name="actualizarApellido" aria-describedby="helpId" value="<?= $asistencia["apellido"] ?>">
                                                            </div>

                                                            <input type="hidden" value="<?= $asistencia['cuil'] ?>" name="cuil">
                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                            <button type="submit" class="btn btn-warning">Guardar cambios</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                    <?php
                                    }
                                    ?>


                                </tbody>

                            </table><br><br>
                            <a class="btn btn-primary" href="index.php?pagina=ingreso"> Regresar</a>
                        </div>
                    </div>
                </div>

            </div>
        <?php
        }
        ?>




        <!-- --------------------- PROFESOR --------------------------- -->
        <?php
        if ($_SESSION['rol'] == "Profesor") {
        ?>

            <!--Ejemplo tabla con DataTables-->
            <div class="container">
                <h3 class="text-center"> Tabla personal de Salud y Deporte</h3>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive">
                            <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th scope="col">DNI</th>
                                        <th scope="col">Nombre completo</th>
                                        <th scope="col">Actividad</th>
                                        <th scope="col">Distrito</th>
                                        <th scope="col">Roles</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($listaAsistencia as $asistencia) {
                                    ?>
                                        <tr>
                                            <td> <?= $asistencia["cuil"] ?></td>
                                            <td><?= $asistencia["nombre"] . " " . $asistencia["apellido"] ?></td>
                                            <td><?= $asistencia["nombre_actividad"] ?></td>
                                            <td><?= $asistencia["nombre_distrito"] ?></td>
                                            <td><?= $asistencia["nombre_roles"] ?></td>
                                        </tr>
                                    <?php
                                    }
                                    ?>


                                </tbody>

                            </table><br><br>
                            <a class="btn btn-primary" href="index.php?pagina=ingreso"> Regresar</a>
                        </div>
                    </div>
                </div>

            </div>
        <?php
        }
        ?>

    </body>

    </html>

<?php
} else {
    $_SESSION['sessionexpirada'] = true;
    header('Location: index.php?pagina=ingreso');
}
?>