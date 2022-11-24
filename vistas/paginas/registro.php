<?php
error_reporting(E_ALL ^ E_WARNING);
?>

<!-- form section start -->
<section class="w3l-hotair-form" style="background-color: #e3f2fd;">
    <h1 style="color: black;"> Prueba registro deporte </h1>
    <div class="container">
        <!-- /form -->
        <div class="workinghny-form-grid " >
            <div class="main-hotair">
                <div class="content-wthree">
                    <h2>Registrate </h2>
                    

                    <form action="../../controladores/controlador.registro.php" method="post" autocomplete="off">
                        <input type="text" placeholder="Ingrese su nombre" name="nombre" required="" autofocus>
                        <input type="text" placeholder="Ingrese su apellido" name="apellido" required="" autofocus>
                        <input type="text" placeholder="Ingrese su DNI" name="dni" required="" autofocus>
                        <input type="text" placeholder="Ingrese su telefono" name="telefono" required="" autofocus>
                        <input type="text" placeholder="Ingrese su domicilio" name="domicilio" required="" autofocus>
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