<?php
session_start();
if (isset($_SESSION['ingreso'])) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Principal</title>
    </head>

    <body style="background-color: #e3f2fd;">

        <div class="container text-center pt-4">
            <div>
                <div>
                    <h2>Prueba pagina Principal</h2> <br><br>
                    <table class="table ">
                        <thead>
                            <tr>
                                <th scope="col">Cuil</th>
                                <th scope="col">Nombre completo</th>
                                <th scope="col">Entrada</th>
                                <th scope="col">Asistencia</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            foreach ($listadoAsistencia as $asistencia) {
                            ?>
                                <tr>
                                    <td> <?= $asistencia["cuil"] ?></td>
                                    <td><?= $asistencia["nombre"] . " " . $asistencia["apellido"] ?></td>
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

        
    </body>

    </html>

<?php
} else {
    $_SESSION['sessionexpirada'] = true;
    header('Location: index.php?pagina=ingreso');
}
?>