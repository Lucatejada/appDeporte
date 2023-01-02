<?php
error_reporting(E_ALL ^ E_WARNING);
// session_start();
?>

<div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="col-lg-4 ">


            <?php
            if ($_SESSION['usuarioRegistrado'] == true) {
            ?>
                <div class="alert alert-success text-center" role="alert">
                    Usuario registrado con exito! <br>
                    por favor inicie sesion.
                </div>
            <?php
                unset($_SESSION["usuarioRegistrado"]);
            }
            ?>
            <?php
            if ($_SESSION['sessionexpirada'] == true) {
            ?>
                <div class="alert alert-danger text-center" role="alert">
                    Sesion expirada! <br>
                    Ingrese nuevamente.
                </div>
            <?php
                unset($_SESSION['sessionexpirada']);
            }
            ?>

            <?php
            if ($_SESSION['datosMal'] == true) {
            ?>
                <div class="alert alert-danger text-center" role="alert">
                    Por favor
                    intente nuevamente.
                </div>
            <?php
                unset($_SESSION['datosMal']);
            }
            ?>
            <form action="controladores/controlador.login.php" method="post" class="border px-4 pt-3 pb-3" style="background-color: #ffffff">

                <div class="row">
                    <p class="fs-4">Acceder</p>
                </div>

                <div class="row mb-3">
                    <label for="" class="form-label">Nombre</label>
                    <input type="text" placeholder="Ingrese su nombre" aria-describedby="helpId" name="nombre" required="" class="form-control">
                </div>
                <div class="row mb-3">
                    <label for="" class="form-label">Apellido</label>
                    <input type="text" placeholder="Ingrese su apellido" name="apellido" required="" autofocus class="form-control">
                </div>
                <div class="row mb-3">
                    <label for="" class="form-label">DNI</label>
                    <input type="text" placeholder="Ingrese su DNI" name="cuil" required="" autofocus class="form-control">
                </div>

                <div class="row mb-3">
                    <button type="submit" class="btn btn-primary">Iniciar sesión</button>
                </div>
            </form>
        </div>
    </div>

</div>