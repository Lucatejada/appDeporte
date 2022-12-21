<head>

    <meta charset="utf-8">
    <link href="../../css/style.css" rel='stylesheet' type='text/css' />
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <section class="w3l-hotair-form" style="background-color: #e3f2fd;">
        <div class="container">
            <div class="workinghny-form-grid ">
                <div class="main-hotair">
                    <div class="content-wthree">

                        <h6 class="text-left">MENORES DE 18 AÑOS</h6>
                        <h3 class="text-center">DECLARACION JURADA DE SALUD <br>
                            ACTIVIDADES DEPORTIVAS <br>
                            AÑO 2023 </h3>

                        <form action="" method="post" autocomplete="off">
                            <input type="text" placeholder="Ingrese su nombre" name="nombre" required="" autofocus>
                            <input type="text" placeholder="Ingrese su apellido" name="apellido" required="" autofocus>
                            <input type="text" placeholder="Ingrese su cuil sin guiones ni puntos" name="cuil" required="" autofocus>
                            <input type="text" placeholder="Ingrese su telefono" name="telefono" required="" autofocus>


                            <select name="sangre" require="">
                                <option selected>Seleccione su grupo sanguineo</option>
                                <?php
                                foreach ($listaActividades as $actividades) {
                                ?>
                                    <option value="<?= $actividades['actividad_id'] ?>"> <?= $actividades['nombre'] ?></option>
                                <?php
                                }
                                ?>
                            </select> <br>

                            <input type="text" placeholder="Ingrese su peso en kg" name="peso" required="" autofocus>
                            <input type="text" placeholder="Ingrese su talle en cm" name="talle" required="" autofocus>
                            <br>
                            <h4> Preguntas: </h4>
                            <br>


                            <div>
                                <label class="form-check-label" for="flexCheckIndeterminateDisabled">
                                   asdasdasdasda </label>
                                <input  type="radio" value="60" id="flexCheckIndeterminateDisabled" >
                                <input  type="radio" value="60" id="flexCheckIndeterminateDisabled" 
                                >
                                    
                            </div>
                            

                            <br><button class="btn" type="submit">Inscribite</button>
                        </form>

                    </div>


                </div>
            </div>
        </div>
    </section>

</body>

</html>