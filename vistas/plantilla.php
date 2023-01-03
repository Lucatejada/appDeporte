<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE);
error_reporting(E_ALL ^ E_WARNING);

?>

<!DOCTYPE html>

<html lang="es">

<head>
    <title>Sistema deporte</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="UTF-8" />

    <!--/Style-CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <!-- Iconos bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>


</head>
<!-- 0568C1 -->

<body style="background-color:#ffffff"">
    <!-- BOTONERA -->

    <div class=" container-fluid">
    <nav class=" navbar navbar-expand-lg mb-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col d-flex align-items-center">
                    <img src="images/logo.png" alt="Logo" width="30" height="30">
                    <a class="navbar-brand px-2">Deporte y Salud</a>
                </div>
            </div>
        </div>

        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <?php if (isset($_GET["pagina"])) : ?>
                <?php if ($_GET["pagina"] == "registro") : ?>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person-circle"></i>
                            <?= $_SESSION['userName'] ?> </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="nav-link active" href="index.php?pagina=registro">Registrar usuario</a>
                                <hr class="dropdown-divider">
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="index.php?pagina=formulario">Formulario</a>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a class="nav-link active" href="index.php?pagina=salir">Salir</a>
                                <!-- <hr class="dropdown-divider"> -->
                            </li>
                        </ul>

                    </li>
                <?php endif  ?>

                <?php if ($_GET["pagina"] == "principal") : ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person-circle"></i>
                            <?= $_SESSION['userName'] ?> </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="nav-link active" href="index.php?pagina=registro"><i class="bi bi-person-add"></i> Registrar usuario </a>
                                <hr class="dropdown-divider">
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="index.php?pagina=formulario"> <i class="bi bi-ui-radios"></i> Formulario</a>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a class="nav-link active" href="index.php?pagina=salir"> <i class="bi bi-box-arrow-left"></i> Salir</a>
                                <!-- <hr class="dropdown-divider"> -->
                            </li>
                        </ul>

                    </li>
                <?php endif  ?>

               
            <?php else :
                header('location: ../index.php?pagina=formulario');
            ?>
            <?php endif  ?>
        </ul>


    </nav>




    <!------------- Contenido ------------->

    <div class="container-fluid">
        <div class="container">

            <?php

            #ISSET : isset ( ) Determina si una variable está definida y no es NULL 
            #LISTA BLANCA DE URL


            if (isset($_GET["pagina"])) {

                if (
                    $_GET["pagina"] == "registro" ||
                    $_GET["pagina"] == "ingreso" ||
                    $_GET["pagina"] == "principal" ||
                    $_GET["pagina"] == "formulario" ||
                    $_GET["pagina"] == "subirArchivo" ||
                    $_GET["pagina"] == "verArchivos" ||
                    $_GET["pagina"] == "salir"
                ) {

                    include_once "paginas/" . $_GET["pagina"] . ".php";
                } else {
                    include_once "paginas/error404.php";
                }
            } else {
                // echo '<script>  window.history.go(-1) </script>';
                include_once "paginas/formulario.php";
            }

            ?>
        </div>
    </div>

</html>