<head>

    <meta charset="utf-8">
    <link href="../../css/style.css" rel='stylesheet' type='text/css' />
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <section class="w3l-hotair-form" style="background-color: #e3f2fd;">
        <div class="container">
            <div class="workinghny-form-grid ">
                <div class="main-hotair1">
                    <div class="content-wthree">

                        <h5 class="text-left">MENORES DE 18 AÑOS</h6> <br><br><br>
                            <h3 class="text-center">DECLARACION JURADA DE SALUD <br>
                                ACTIVIDADES DEPORTIVAS <br>
                                AÑO 2023 </h3>

                            <form action="" method="post" autocomplete="off">
                                <input style="width: 100%;" type="text" placeholder="Ingrese su nombre" name="nombre" required="" autofocus>
                                <input style="width: 100%;" type="text" placeholder="Ingrese su apellido" name="apellido" required="" autofocus>
                                <input style="width: 100%;" type="text" placeholder="Ingrese su DNI (solo numeros)" name="cuil" required="" autofocus>
                                <input style="width: 100%;" type="text" placeholder="Ingrese su telefono" name="telefono" required="" autofocus>


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

                                <input style="width: 100%;" type="text" placeholder="Ingrese su peso en kg" name="peso" required="" autofocus>
                                <input style="width: 100%;" type="text" placeholder="Ingrese su talle en cm" name="talle" required="" autofocus>
                                <br>
                                <h4> Preguntas: </h4>
                                <br>

                                <div>
                                    <p class="fs-5">01. ¿Tuvo enfermedades dentro de los 60 días anteriores al comienzo de clases?</p>
                                    <input class="form-check-input" type="radio" name="p1" value="si">
                                    <label class="form-check-label" for="inlineRadio1">SI</label>
                                    <input class="form-check-input" type="radio" name="p1" value="no">
                                    <label class="form-check-label" for="inlineRadio2">NO</label>

                                </div>
                                <div>
                                    <p class="fs-5">02. ¿Sufre algun problema cardiovascular?</p>
                                    <input class="form-check-input" type="radio" name="p2" value="si">
                                    <label class="form-check-label" for="inlineRadio1">SI</label>
                                    <input class="form-check-input" type="radio" name="p2" value="no">
                                    <label class="form-check-label" for="inlineRadio2">NO</label>

                                </div>
                                <div>
                                    <p class="fs-5">03. ¿Sufre algun problema respiratorio?</p>
                                    <input class="form-check-input" type="radio" name="p3" value="si">
                                    <label class="form-check-label" for="inlineRadio1">SI</label>
                                    <input class="form-check-input" type="radio" name="p3" value="no">
                                    <label class="form-check-label" for="inlineRadio2">NO</label>

                                </div>
                                <div>
                                    <p class="fs-5">04. ¿Sufre de alergia?</p>
                                    <input class="form-check-input" type="radio" name="p4" value="si">
                                    <label class="form-check-label" for="inlineRadio1">SI</label>
                                    <input class="form-check-input" type="radio" name="p4" value="no">
                                    <label class="form-check-label" for="inlineRadio2">NO</label>

                                </div>
                                <div>
                                    <p class="fs-5">05. ¿Que enfermades ha sufrido?</p>
                                    <input class="form-check-input" type="checkbox" name="p5" value="sarampion">
                                    <label class="form-check-label" for="inlineRadio1">Sarampion</label> <br>
                                    <input class="form-check-input" type="checkbox" name="p5" value="varicela">
                                    <label class="form-check-label" for="inlineRadio2">Varicela</label> <br>
                                    <input class="form-check-input" type="checkbox" name="p5" value="rubeola">
                                    <label class="form-check-label" for="inlineRadio2">Rubéola</label> <br>
                                    <input class="form-check-input" type="checkbox" name="p5" value="paperas">
                                    <label class="form-check-label" for="inlineRadio2">Paperas</label> <br>
                                    <input class="form-check-input" type="checkbox" name="p5" value="hepatitis">
                                    <label class="form-check-label" for="inlineRadio2">Hepatitis</label> <br>
                                    <input style="width: 100%;" type="text" placeholder="Otra..." name="p5">
                                </div>
                                <div>
                                    <p class="fs-5">06. ¿Tuvo operaciones?</p>
                                    <input class="form-check-input" type="radio" name="p6" value="si">
                                    <label class="form-check-label" for="inlineRadio1">SI</label>
                                    <input class="form-check-input" type="radio" name="p6" value="no">
                                    <label class="form-check-label" for="inlineRadio2">NO</label>
                                    <input style="width: 100%;" type="text" placeholder="¿De que tipo?" name="p6">
                                </div>
                                <div>
                                    <p class="fs-5">07. ¿Tuvo fracturas? </p>
                                    <input class="form-check-input" type="radio" name="p7" value="si">
                                    <label class="form-check-label" for="inlineRadio1">SI</label>
                                    <input class="form-check-input" type="radio" name="p7" value="no">
                                    <label class="form-check-label" for="inlineRadio2">NO</label>
                                    <input style="width: 100%;" type="text" placeholder="¿Cuales?" name="p7">
                                </div>
                                <div>
                                    <p class="fs-5">08. ¿Tiene problemas en la columna vertebral?</p>
                                    <input class="form-check-input" type="radio" name="p8" value="si">
                                    <label class="form-check-label" for="inlineRadio1">SI</label>
                                    <input class="form-check-input" type="radio" name="p8" value="no">
                                    <label class="form-check-label" for="inlineRadio2">NO</label> <br>
                                    <input class="form-check-input" type="checkbox" name="p8" value="escoliosis">
                                    <label class="form-check-label" for="inlineRadio1">Escoliosis</label> <br>
                                    <input class="form-check-input" type="checkbox" name="p8" value="cifosis">
                                    <label class="form-check-label" for="inlineRadio1">Cifosis</label> <br>
                                    <input class="form-check-input" type="checkbox" name="p8" value="lordosis">
                                    <label class="form-check-label" for="inlineRadio2">Lordosis</label> <br>
                                    <input style="width: 100%;" type="text" placeholder="Otra..." name="p8">
                                    <input style="width: 100%;" type="text" placeholder="Desconoce" name="p8">
                                </div>
                                <div>
                                    <p class="fs-5">09. ¿Tiene problemas de visión?</p>
                                    <input class="form-check-input" type="radio" name="p9" value="si">
                                    <label class="form-check-label" for="inlineRadio1">SI</label>
                                    <input class="form-check-input" type="radio" name="p9" value="no">
                                    <label class="form-check-label" for="inlineRadio2">NO</label>
                                    <input style="width: 100%;" type="text" placeholder="¿De que tipo?" name="p9">
                                </div>
                                <div>
                                    <p class="fs-5">10. ¿Tiene problemas endocrinos?</p>
                                    <input class="form-check-input" type="radio" name="p10" value="si">
                                    <label class="form-check-label" for="inlineRadio1">SI</label>
                                    <input class="form-check-input" type="radio" name="p10" value="no">
                                    <label class="form-check-label" for="inlineRadio2">NO</label>
                                    <input class="form-check-input" type="checkbox" name="p10" value="diabetes">
                                    <label class="form-check-label" for="inlineRadio1">Diabetes</label> <br>
                                    <input class="form-check-input" type="checkbox" name="p10" value="hipotiroidismo">
                                    <label class="form-check-label" for="inlineRadio2">Hipotiroidismo</label> <br>
                                    <input class="form-check-input" type="checkbox" name="p10" value="hipertiroidismo">
                                    <label class="form-check-label" for="inlineRadio2">Hipertiroidismo</label> <br>
                                    <input class="form-check-input" type="checkbox" name="p10" value="perdida">
                                    <label class="form-check-label" for="inlineRadio2">Perdida de conocimiento</label> <br>
                                </div>
                                <div>
                                    <p class="fs-5">11. ¿Tiene problemas del sistema nervioso?</p>
                                    <input class="form-check-input" type="radio" name="p11" value="si">
                                    <label class="form-check-label" for="inlineRadio1">SI</label>
                                    <input class="form-check-input" type="radio" name="p11" value="no">
                                    <label class="form-check-label" for="inlineRadio2">NO</label>
                                    <input style="width: 100%;" type="text" placeholder="¿De que tipo?" name="p11">
                                </div>
                                <div>
                                    <p class="fs-5">12. ¿Tiene problemas del sistema nervioso?</p>
                                    <input class="form-check-input" type="radio" name="p11" value="si">
                                    <label class="form-check-label" for="inlineRadio1">SI</label>
                                    <input class="form-check-input" type="radio" name="p11" value="no">
                                    <label class="form-check-label" for="inlineRadio2">NO</label>
                                    <input style="width: 100%;" type="text" placeholder="¿De que tipo?" name="p11">
                                </div>
                                <div>
                                    <p class="fs-5">13. ¿Tiene problemas del sistema nervioso?</p>
                                    <input class="form-check-input" type="radio" name="p11" value="si">
                                    <label class="form-check-label" for="inlineRadio1">SI</label>
                                    <input class="form-check-input" type="radio" name="p11" value="no">
                                    <label class="form-check-label" for="inlineRadio2">NO</label>
                                    <input style="width: 100%;" type="text" placeholder="¿De que tipo?" name="p11">
                                </div>
                                <div>
                                    <p class="fs-5">14. ¿Tiene problemas del sistema nervioso?</p>
                                    <input class="form-check-input" type="radio" name="p11" value="si">
                                    <label class="form-check-label" for="inlineRadio1">SI</label>
                                    <input class="form-check-input" type="radio" name="p11" value="no">
                                    <label class="form-check-label" for="inlineRadio2">NO</label>
                                    <input style="width: 100%;" type="text" placeholder="¿De que tipo?" name="p11">
                                </div>
                                <div>
                                    <p class="fs-5">15. ¿Tiene problemas del sistema nervioso?</p>
                                    <input class="form-check-input" type="radio" name="p11" value="si">
                                    <label class="form-check-label" for="inlineRadio1">SI</label>
                                    <input class="form-check-input" type="radio" name="p11" value="no">
                                    <label class="form-check-label" for="inlineRadio2">NO</label>
                                    <input style="width: 100%;" type="text" placeholder="¿De que tipo?" name="p11">
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