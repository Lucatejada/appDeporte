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