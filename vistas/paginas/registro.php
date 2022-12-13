<?php
error_reporting(E_ALL ^ E_WARNING);
?>

<!-- form section start -->
<section class="w3l-hotair-form" style="background-color: #e3f2fd;">
    <div class="container">
        <!-- /form -->
        <div class="workinghny-form-grid ">
            <div class="main-hotair">
                <div class="content-wthree">
                    <h2> Registrate </h2>


                    <form action="../../controladores/controlador.registro.php" method="post" autocomplete="off">
                        <input type="text" placeholder="Ingrese su nombre" name="nombre" required="" autofocus>
                        <input type="text" placeholder="Ingrese su apellido" name="apellido" required="" autofocus>
                        <input type="text" placeholder="Ingrese su cuil sin guiones ni puntos" name="cuil" required="" autofocus>
                        <input type="text" placeholder="Ingrese su telefono" name="telefono" required="" autofocus>
                        <input type="text" placeholder="Ingrese el distrito al que pertenece" name="domicilio" required="" autofocus>
                        <select aria-label="Default select example" name="actividades" require="">
                            <option selected>Seleccione la actividad</option>
                            <option value="1">Basquet</option>
                            <option value="2">Futbol</option>
                            <option value="3">Voley</option>
                            <option value="3">Handball</option>
                            <option value="3">Natacion</option>
                            <option value="3">Otro</option>
                        </select> <br>
                        <button class="btn" type="submit">Registrate</button>
                    </form>

                    <p class="account">Ya tienes una cuenta? <a href="index.php?pagina=ingreso">Ingresa</a></p>
                </div>
                <div class="w3l_form align-self text-center">
                    <div class="left_grid_info">
                        <img src="../../images/muni.png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>

    </div>

</section>