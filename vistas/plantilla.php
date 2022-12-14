<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sistema deporte</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="UTF-8" />

    <!--/Style-CSS -->
    <link rel="stylesheet" href="/css/style.css" type="text/css" media="all" />
    <!--//Style-CSS -->
    <link rel="stylesheet" href="/css/font-awesome.min.css" type="text/css" media="all">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- PLUGGINS JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/0b4b023277.js" crossorigin="anonymous"></script>


</head>
<!-- 0568C1 -->

<body style="background-color: #e3f2fd;">
    <!-- BOTONERA -->

    <div class="pt-5 container-fluid" style="background-color: #e3f2fd;">
        <div class="container">
            <ul class="nav justify-content-center nav-pills">

                <?php if (isset($_GET["pagina"])) : ?>
                    <?php if ($_GET["pagina"] == "registro") : ?>
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php?pagina=registro">Registro</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="index.php?pagina=ingreso">Ingreso</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?pagina=principal">Principal</a>
                        </li>
                        <!-- Muestrta los distritos en el select del registro  -->
                        <?php
                        require_once('controladores/controlador.actividades.php');
                        ctrActividades::ctrMostrarActividades();
                        ?>
                        <?php
                        require_once('controladores/controlador.distrito.php');
                        ctrDistrito::ctrMostrarDistritos();
                        ?>

                    <?php endif ?>

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
                        <?php
                        require_once('controladores/controlador.asistecia.php');
                        controladorUsuario::ctrAsistencia();
                        ?>
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
                    header('location: ../index.php?pagina=registro');
                ?>
                <?php endif  ?>


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

                    $_GET["pagina"] == "salir"
                ) {

                    include_once "paginas/" . $_GET["pagina"] . ".php";
                } else {
                    include_once "paginas/error404.php";
                }
            } else {
                include_once "paginas/registro.php";
            }

            ?>
        </div>
    </div>

</html>