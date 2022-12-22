<?php
session_start();
if (isset($_SESSION['ingreso'])) {
?>
    <!doctype html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="shortcut icon" href="#" />
        <title>Tutorial DataTables</title>

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

        <div style="height:50px"></div>

        <!--Ejemplo tabla con DataTables-->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th scope="col">Cuil</th>
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


    </body>

    </html>

<?php
} else {
    $_SESSION['sessionexpirada'] = true;
    header('Location: index.php?pagina=ingreso');
}
?>