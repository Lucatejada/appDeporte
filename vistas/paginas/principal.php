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
        <!-- <link rel="shortcut icon" href="#" /> -->
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
                        'excel', 'print'
                    ],
                    "language": {
                        "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
                    },
                });
            }, );
        </script>


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