<?php
session_start();
error_reporting(0);
?>
<!-- form section start -->
<section class="w3l-hotair-form" style="background-color: #e3f2fd;">
    <div class="container">
        <!-- /form -->
        <div class="workinghny-form-grid ">
            <div class="main-hotair1">
                <div class="content-wthree">
                    <h2> Agregar usuario al sistema </h2>

                    <?php
                    if ($_SESSION['cuilRepetido'] == true) {
                    ?>
                        <div class="alert alert-danger text-center" role="alert">
                            Usuario repetido <br>
                            por favor inicie sesion.
                        </div>
                    <?php
                        unset($_SESSION["cuilRepetido"]);
                    }
                    ?>

                    <form class="align-items: center"action="vistas/inicio.php?c=controladorRegistro&a=registrarUsuario" method="post" autocomplete="off">
                        <input type="text" style="width: 100%" placeholder="Ingrese su nombre" name="nombre" required="" autofocus>
                        <input type="text" style="width: 100%" placeholder="Ingrese su apellido" name="apellido" required="" autofocus>
                        <input type="text" style="width: 100%" placeholder="Ingrese su DNI sin guiones ni puntos" name="cuil" required="" autofocus>
                        <input type="text" style="width: 100%" placeholder="Ingrese su telefono" name="telefono" required="" autofocus>
                        <!-- <input type="text" placeholder="Ingrese el distrito al que pertenece" name="domicilio" required="" autofocus> -->

                        <select aria-label="Default select example" name="actividades" required>
                            <option selected>Seleccione la actividad</option>
                            <?php
                            foreach ($listaActividades as $actividades) {
                            ?>
                                <option value="<?= $actividades['actividad_id'] ?>"> <?= $actividades['nombre'] ?></option>
                            <?php
                            }
                            ?>
                        </select> <br>

                        <select aria-label="Default select example" name="distritos" required="">
                            <option selected>Seleccione su distrito</option>
                            <?php
                            foreach ($listaDistritos as $distritos) {
                            ?>
                                <option value="<?= $distritos['id'] ?>"> <?= $distritos['nombre'] ?></option>
                            <?php
                            }
                            ?>
                        </select> <br>

                        <!-- Roles -->

                        <select aria-label="Default select example" name="roles" required="">
                            <option selected>Seleccione el rol</option>
                            <?php
                            foreach ($listaRoles as $roles) {
                            ?>
                                <option value="<?= $roles['id'] ?>"> <?= $roles['nombre'] ?></option>
                            <?php
                            }
                            ?>
                        </select> <br>


                        <button class="btn" type="submit">Inscribite</button>
                    </form>

                </div>
                
                <!-- </div> -->
            </div>
        </div>

    </div>

</section>