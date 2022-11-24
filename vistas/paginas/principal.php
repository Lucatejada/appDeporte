<?php
session_start();
if (isset($_SESSION['ingreso'])) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- //Meta tag Keywords -->
        <link href="//fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700;900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/css/style.css" type="text/css" media="all" />
        <link rel="stylesheet" href="/css/font-awesome.min.css" type="text/css" media="all">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <!-- PLUGGINS JS -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
        <!-- fontawesome -->
        <script src="https://kit.fontawesome.com/0b4b023277.js" crossorigin="anonymous"></script>
        <title>Principal</title>
    </head>

    <body style="background-color: #e3f2fd;">

        <!-- <script>
        alert('Bienvenido <?= $_SESSION["nombreSesion"] ?>');
    </script> -->
        <div class="container text-center pt-4">
            <div>
                <div>
                    <h2>Prueba pagina Principal</h2> <br><br>
                    <table class="table ">
                        <thead>
                            <tr>
                                <th scope="col">DNI</th>
                                <th scope="col">Nombre completo</th>
                                <th scope="col">Entrada</th>
                                <th scope="col">Salida</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($listadoAsistencia as $asistencia) {
                            ?>
                                <tr>
                                    <td> <?= $asistencia["dni"] ?></td>
                                    <td><?= $asistencia["nombre"] . " " . $asistencia["apellido"] ?></td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                            <?php
                            }

                            ?>

                        </tbody>
                    </table><br><br>
                    <a class="btn btn-primary" href="index.php?pagina=salir"> Regresar</a>
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