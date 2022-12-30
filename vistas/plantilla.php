<!DOCTYPE html>
<html lang="es">

<head>
    <title>Sistema deporte</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="UTF-8" />

    <!--/Style-CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>





</head>
<!-- 0568C1 -->

<body style="background-color: #e3f2fd;">
    <!-- BOTONERA -->

    <div class="pt-5 container-fluid" style="background-color: #e3f2fd;">
        <div class="container">

            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.php?pagina=ingreso">Deporte</a>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <?php if (isset($_GET["pagina"])) : ?>

                                <?php if ($_GET["pagina"] == "registro") : ?>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="index.php?pagina=registro">Registro</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php?pagina=ingreso">Ingreso</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php?pagina=principal">Principal</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php?pagina=formulario">Formulario</a>
                                    </li>
                                <?php endif  ?>

                                <?php if ($_GET["pagina"] == "ingreso") : ?>

                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php?pagina=registro">Registro</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="index.php?pagina=ingreso">Ingreso</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php?pagina=principal">Principal</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php?pagina=formulario">Formulario</a>
                                    </li>

                                <?php endif  ?>
                                <?php if ($_GET["pagina"] == "formulario") : ?>

                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php?pagina=registro">Registro</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php?pagina=ingreso">Ingreso</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php?pagina=principal">Principal</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="index.php?pagina=formulario">Formulario</a>
                                    </li>
                                <?php endif  ?>

                                <?php if ($_GET["pagina"] == "principal") : ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php?pagina=registro">Registro</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php?pagina=ingreso">Ingreso</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="index.php?pagina=principal">Principal</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php?pagina=salir">Salir</a>
                                    </li>
                                <?php endif  ?>

                                <?php if ($_GET["pagina"] == "salir") : ?>

                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php?pagina=registro">Registro</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php?pagina=ingreso">Ingreso</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="index.php?pagina=principal">Principal</a>
                                    </li>
                                <?php endif  ?>
                            <?php else :
                                header('location: ../index.php?pagina=formulario');
                            ?>
                            <?php endif  ?>
                        </ul>
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="No funciona :)" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit" href=#>Search</button>
                        </form>

                    </div>
                </div>
            </nav>

            </ul>
        </div>
    </div>


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
                include_once "paginas/formulario.php";
            }

            ?>
        </div>
    </div>

</html>