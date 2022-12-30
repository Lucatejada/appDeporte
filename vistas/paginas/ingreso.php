<?php
error_reporting(E_ALL ^ E_WARNING);
session_start();
?>

<!-- form section start -->
<section class="w3l-hotair-form" style="background-color: #e3f2fd;">
    <div class="container">
        <!-- /form -->
        <div class="workinghny-form-grid">
            <div class="main-hotair">
                <div class="content-wthree">
                    <h2>Ingresar </h2>

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

                    <form action="controladores/controlador.login.php" method="post" autocomplete="off" autofocus>
                        <input style="width: 100%" type="text" placeholder="Ingrese su nombre" name="nombre" required="">
                        <input style="width: 100%" type="text" placeholder="Ingrese su apellido" name="apellido" required="" autofocus>
                        <input style="width: 100%" type="text" placeholder="Ingrese su cuil" name="cuil" required="" autofocus>
                        <button class="btn" type="submit">Ingresar</button>
                    </form>

                 <!-- <p class="account">¿No tienes una cuenta? <a href="index.php?pagina=registro">Registrate</a></p> -->
                </div>
                <div class="w3l_form align-self">
                    <div class="left_grid_info">
                        <img src="images/1.png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

