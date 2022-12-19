<?php
session_start();
error_reporting(0);
?>
<!-- form section start -->
<section class="w3l-hotair-form" style="background-color: #e3f2fd;">
    <div class="container">
        <!-- /form -->
        <div class="workinghny-form-grid ">
            <div class="main-hotair">
                <div class="content-wthree">
                    <h2> Pre-Inscripcion </h2>

                    <?php
                    if ($_SESSION['cuilRepetido'] == true) {
                    ?>
                        <div class="alert alert-danger text-center" role="alert">
                            Usuario registrado <br>
                            por favor inicie sesion.
                        </div>
                    <?php
                        unset($_SESSION["cuilRepetido"]);
                    }
                    ?>

                    <form action="vistas/inicio.php?c=controladorRegistro&a=registrarUsuario" method="post" autocomplete="off">
                        <input type="text" placeholder="Ingrese su nombre" name="nombre" required="" autofocus>
                        <input type="text" placeholder="Ingrese su apellido" name="apellido" required="" autofocus>
                        <input type="text" placeholder="Ingrese su cuil sin guiones ni puntos" name="cuil" required="" autofocus>
                        <input type="text" placeholder="Ingrese su telefono" name="telefono" required="" autofocus>
                        <!-- <input type="text" placeholder="Ingrese el distrito al que pertenece" name="domicilio" required="" autofocus> -->

                        <select aria-label="Default select example" name="actividades" require="">
                            <option selected>Seleccione la actividad</option>
                            <?php
                            foreach ($listaActividades as $actividades) {
                            ?>
                                <option value="<?= $actividades['actividad_id'] ?>"> <?= $actividades['nombre'] ?></option>
                            <?php
                            }
                            ?>
                        </select> <br>

                        <select aria-label="Default select example" name="distritos" require="">
                            <option selected>Seleccione su distrito</option>
                            <?php
                            foreach ($listaDistritos as $distritos) {
                            ?>
                                <option value="<?= $distritos['id'] ?>"> <?= $distritos['nombre'] ?></option>
                            <?php
                            }
                            ?>
                        </select> <br>


                        <button class="btn" type="submit">Inscribite</button>
                    </form>

                </div>
                <div class="w3l_form align-self text-center">
                    <div class="left_grid_info">
                        <img src="../../images/1.png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>

    </div>

</section>