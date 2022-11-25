<?php
error_reporting(E_ALL ^ E_WARNING);
session_start();


?>

<!-- form section start -->
<section class="w3l-hotair-form" style="background-color: #e3f2fd;">
    <h1 style="color: black;">Prueba Ingreso Deporte</h1>
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
                    if ($_SESSION['usuarioRepetido'] == true) {
                    ?>
                        <div class="alert alert-danger text-center" role="alert">
                            Te re cuesta <br>
                            Ingrese nuevamente.
                        </div>
                    <?php
                        unset($_SESSION['sessionexpirada']);
                    }
                    ?>

                    <form action="/modelos/loginModelo.php" method="post" autocomplete="off">
                        <input type="text" placeholder="Ingrese su DNI" name="dni" required="" autofocus>
                        <input type="text" placeholder="Ingrese su nombre" name="nombre" required="" autofocus>
                        <input type="text" placeholder="Ingrese su apellido" name="apellido" required="" autofocus>
                        <button class="btn" type="submit">Ingresar</button>
                    </form>

                    <p class="account">¿No tienes una cuenta? <a href="index.php?pagina=registro">Registrate</a></p>
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
<?php




?>
