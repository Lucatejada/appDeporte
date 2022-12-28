<?php
session_start();
// if (isset($_SESSION['ingreso'])) {
?>
<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="#" />
    <title>Tabla de datos</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <!-- CSS personalizado -->
    <link rel="stylesheet" href="../../js/main.js">

    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="../../datatables/datatables.min.css" />
    <!--datables estilo bootstrap 4 CSS-->
    <!-- <link rel="stylesheet"  type="text/css" href="datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css"> -->

    <!--font awesome con CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="../../jquery/jquery-3.3.1.min.js"></script>
    <script src="../../popper/popper.min.js"></script>
    <script src="../../bootstrap/js/bootstrap.min.js"></script>

    <!-- datatables JS -->
    <script type="text/javascript" src="../../datatables/datatables.min.js"></script>

    <!-- para usar botones en datatables JS -->
    <script src="../../datatables/Buttons-1.5.6/js/dataTables.buttons.min.js"></script>
    <script src="../../datatables/JSZip-2.5.0/jszip.min.js"></script>
    <script src="../../datatables/pdfmake-0.1.36/pdfmake.min.js"></script>
    <script src="../../datatables/pdfmake-0.1.36/vfs_fonts.js"></script>
    <script src="../../datatables/Buttons-1.5.6/js/buttons.html5.min.js"></script>

    <!-- código JS propìo-->
    <script type="text/javascript" src="../../js/main.js"></script>

</head>

<body>

    <!--Ejemplo tabla con DataTables-->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>


                                <th scope="col">Nombre completo</th>
                                <th scope="col">DNI</th>
                                <th scope="col">Telefono</th>
                                <th scope="col">Sangre</th>
                                <th scope="col">Peso (kg)</th>
                                <th scope="col">Talle (m)</th>
                                <th scope="col">El que se suscribe</th>
                                <th scope="col">Tel. Emergencia</th>
                                <th scope="col">Accion</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($listaRespuestas as $asistencia) {
                            ?>
                                <tr>

                                    <td><?= $asistencia["nombre"] . " " . $asistencia["apellido"] ?></td>
                                    <td> <?= $asistencia["cuil"] ?></td>
                                    <td><?= $asistencia["telefono"] ?></td>
                                    <td><?= $asistencia["sangre"] ?></td>
                                    <td><?= $asistencia["peso"] ?></td>
                                    <td><?= $asistencia["talle"] ?></td>
                                    <td><?= $asistencia["nombre_tutor"] ?></td>
                                    <td><?= $asistencia["telEmergencia"] ?></td>
                                    
                                    <td>
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalMasInfo<?= $asistencia['cuil'] ?>">
                                            Launch demo modal
                                        </button>
                                    </td>

                                </tr>
                                <div class="modal fade" id="modalMasInfo<?= $asistencia['cuil'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <p class="modal-title fs-5" id="exampleModalLabel">Modal title</p>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Nombre completo</label>
                                                    <input type="text" class="form-control" value="<?= $asistencia["nombre"] . " " . $asistencia["apellido"] ?>" aria-describedby="helpId" placeholder="" disabled>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Enfermedades dentro de los 60 dias</label>
                                                    <input type="text" class="form-control" value="<?= $asistencia["uno"] ?>" aria-describedby="helpId" placeholder="" disabled>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Problemas cardiovasculares</label>
                                                    <input type="text" class="form-control" value="<?= $asistencia["dos"] ?>" aria-describedby="helpId" placeholder="" disabled>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Problemas respiratorios</label>
                                                    <input type="text" class="form-control" value="<?= $asistencia["tres"]?>" aria-describedby="helpId" placeholder="" disabled>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Alergias</label>
                                                    <input type="text" class="form-control" value="<?= $asistencia["cuatro"] ?>" aria-describedby="helpId" placeholder="" disabled>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Enfermedades sufridas</label>
                                                    <input type="text" class="form-control" value="<?= $asistencia["cinco"] ?>" aria-describedby="helpId" placeholder="" disabled>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Operaciones</label>
                                                    <input type="text" class="form-control" value="<?= $asistencia["seis"] ?>" aria-describedby="helpId" placeholder="" disabled>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Fracturas</label>
                                                    <input type="text" class="form-control" value="<?= $asistencia["siete"] ?>" aria-describedby="helpId" placeholder="" disabled>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Problemas en la columna vertebral</label>
                                                    <input type="text" class="form-control" value="<?= $asistencia["ocho"] ?>" aria-describedby="helpId" placeholder="" disabled>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Problemas de vision</label>
                                                    <input type="text" class="form-control" value="<?= $asistencia["nueve"] ?>" aria-describedby="helpId" placeholder="" disabled>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Problemas endocrinos</label>
                                                    <input type="text" class="form-control" value="<?= $asistencia["diez"] ?>" aria-describedby="helpId" placeholder="" disabled>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Problemas en el sistema nervioso</label>
                                                    <input type="text" class="form-control" value="<?= $asistencia["once"]?>" aria-describedby="helpId" placeholder="" disabled>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Posee limitaciones para realizar actividad fisica</label>
                                                    <input type="text" class="form-control" value="<?= $asistencia["trece"] ?>" aria-describedby="helpId" placeholder="" disabled>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="" class="form-label">En la actualidad vive con: </label>
                                                    <input type="text" class="form-control" value="<?= $asistencia["catorce"] ?>" aria-describedby="helpId" placeholder="" disabled>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Sugerencias</label>
                                                    <input type="text" class="form-control" value=""<?= $asistencia["quince"] ?>" aria-describedby="helpId" placeholder="" disabled>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                            </div>
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


</body>

</html>