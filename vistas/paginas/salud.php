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

                            <form action="vistas/paginas/subirArchivo.php" method="post" autocomplete="off">
                                <input style="width: 100%;" type="text" placeholder="Ingrese su nombre" name="nombre">
                                <input style="width: 100%;" type="text" placeholder="Ingrese su apellido" name="apellido">
                                <input style="width: 100%;" type="text" placeholder="Ingrese su DNI (solo numeros)" name="cuil">
                                <input style="width: 100%;" type="text" placeholder="Ingrese su telefono" name="telefono">


                                <select name="sangre">
                                    <option selected>Seleccione su grupo sanguineo</option>
                                    <?php
                                    foreach ($listaActividades as $actividades) {
                                    ?>
                                        <option value="<?= $actividades['actividad_id'] ?>"> <?= $actividades['nombre'] ?></option>
                                    <?php
                                    }
                                    ?>
                                </select> <br>

                                <input style="width: 100%;" type="text" placeholder="Ingrese su peso en kg" name="peso">
                                <input style="width: 100%;" type="text" placeholder="Ingrese su talle en cm" name="talle">
                                <br>
                                <h4> Preguntas: </h4>
                                <br>

                                <div>
                                    <p class="fs-5">01. ¿Tuvo enfermedades dentro de los 60 días anteriores al comienzo de clases?</p>
                                    <input class="form-check-input" type="radio" name="1" value="si">
                                    <label class="form-check-label" for="inlineRadio1">SI</label>
                                    <input class="form-check-input" type="radio" name="1" value="no">
                                    <label class="form-check-label" for="inlineRadio2">NO</label>
                                </div>
                                <div>
                                    <p class="fs-5">02. ¿Sufre algun problema cardiovascular?</p>
                                    <input class="form-check-input" type="radio" name="2" value="si">
                                    <label class="form-check-label" for="inlineRadio1">SI</label>
                                    <input class="form-check-input" type="radio" name="2" value="no">
                                    <label class="form-check-label" for="inlineRadio2">NO</label>

                                </div>
                                <div>
                                    <p class="fs-5">03. ¿Sufre algun problema respiratorio?</p>
                                    <input class="form-check-input" type="radio" name="3" value="si">
                                    <label class="form-check-label" for="inlineRadio1">SI</label>
                                    <input class="form-check-input" type="radio" name="3" value="no">
                                    <label class="form-check-label" for="inlineRadio2">NO</label>

                                </div>
                                <div>
                                    <p class="fs-5">04. ¿Sufre de alergia?</p>
                                    <input class="form-check-input" type="radio" name="4" value="si">
                                    <label class="form-check-label" for="inlineRadio1">SI</label>
                                    <input class="form-check-input" type="radio" name="4" value="no">
                                    <label class="form-check-label" for="inlineRadio2">NO</label>

                                </div>
                                <div>
                                    <p class="fs-5">05. ¿Que enfermades ha sufrido?</p>
                                    <input class="form-check-input" type="checkbox" name="5[]" value="sarampion">
                                    <label class="form-check-label" for="inlineRadio1">Sarampion</label> <br>
                                    <input class="form-check-input" type="checkbox" name="5[]" value="varicela">
                                    <label class="form-check-label" for="inlineRadio2">Varicela</label> <br>
                                    <input class="form-check-input" type="checkbox" name="5[]" value="rubeola">
                                    <label class="form-check-label" for="inlineRadio2">Rubéola</label> <br>
                                    <input class="form-check-input" type="checkbox" name="5[]" value="paperas">
                                    <label class="form-check-label" for="inlineRadio2">Paperas</label> <br>
                                    <input class="form-check-input" type="checkbox" name="5[]" value="hepatitis">
                                    <label class="form-check-label" for="inlineRadio2">Hepatitis</label> <br>
                                    <input style="width: 100%;" type="text" placeholder="Otra..." name="motivo5">
                                </div>
                                <div>
                                    <p class="fs-5">06. ¿Tuvo operaciones?</p>
                                    <input class="form-check-input" type="radio" name="6" value="si">
                                    <label class="form-check-label" for="inlineRadio1">SI</label>
                                    <input class="form-check-input" type="radio" name="6" value="no">
                                    <label class="form-check-label" for="inlineRadio2">NO</label>
                                    <input style="width: 100%;" type="text" placeholder="¿De que tipo?" name="6">
                                </div>
                                <div>
                                    <p class="fs-5">07. ¿Tuvo fracturas? </p>
                                    <input class="form-check-input" type="radio" name="7" value="si">
                                    <label class="form-check-label" for="inlineRadio1">SI</label>
                                    <input class="form-check-input" type="radio" name="7" value="no">
                                    <label class="form-check-label" for="inlineRadio2">NO</label>
                                    <input style="width: 100%;" type="text" placeholder="¿Cuales?" name="7">
                                </div>
                                <div>
                                    <p class="fs-5">08. ¿Tiene problemas en la columna vertebral?</p>
                                    <input class="form-check-input" type="radio" name="8" value="si">
                                    <label class="form-check-label" for="inlineRadio1">SI</label>
                                    <input class="form-check-input" type="radio" name="8" value="no">
                                    <label class="form-check-label" for="inlineRadio2">NO</label> <br>
                                    <input class="form-check-input" type="checkbox" name=8" value="escoliosis">
                                    <label class="form-check-label" for="inlineRadio1">Escoliosis</label> <br>
                                    <input class="form-check-input" type="checkbox" name="8" value="cifosis">
                                    <label class="form-check-label" for="inlineRadio1">Cifosis</label> <br>
                                    <input class="form-check-input" type="checkbox" name="8" value="lordosis">
                                    <label class="form-check-label" for="inlineRadio2">Lordosis</label> <br>
                                    <input style="width: 100%;" type="text" placeholder="Otra..." name="8">
                                    <input style="width: 100%;" type="text" placeholder="Desconoce" name="8">
                                </div>
                                <div>
                                    <p class="fs-5">09. ¿Tiene problemas de visión?</p>
                                    <input class="form-check-input" type="radio" name="9" value="si">
                                    <label class="form-check-label" for="inlineRadio1">SI</label>
                                    <input class="form-check-input" type="radio" name="9" value="no">
                                    <label class="form-check-label" for="inlineRadio2">NO</label>
                                    <input style="width: 100%;" type="text" placeholder="¿De que tipo?" name="9">
                                </div>
                                <div>
                                    <p class="fs-5">10. ¿Tiene problemas endocrinos?</p>
                                    <input class="form-check-input" type="radio" name="10" value="si">
                                    <label class="form-check-label" for="inlineRadio1">SI</label>
                                    <input class="form-check-input" type="radio" name="10" value="no">
                                    <label class="form-check-label" for="inlineRadio2">NO</label> <br>
                                    <input class="form-check-input" type="checkbox" name="10" value="diabetes">
                                    <label class="form-check-label" for="inlineRadio1">Diabetes</label> <br>
                                    <input class="form-check-input" type="checkbox" name="10" value="hipotiroidismo">
                                    <label class="form-check-label" for="inlineRadio2">Hipotiroidismo</label> <br>
                                    <input class="form-check-input" type="checkbox" name="10" value="hipertiroidismo">
                                    <label class="form-check-label" for="inlineRadio2">Hipertiroidismo</label> <br>
                                    <input style="width: 100%;" type="text" placeholder="Otros." name="10">
                                </div>
                                <div>
                                    <p class="fs-5">11. ¿Tiene problemas del sistema nervioso?</p>
                                    <input class="form-check-input" type="radio" name="11" value="si">
                                    <label class="form-check-label" for="inlineRadio1">SI</label>
                                    <input class="form-check-input" type="radio" name="11" value="no">
                                    <label class="form-check-label" for="inlineRadio2">NO</label> <br>
                                    <input class="form-check-input" type="checkbox" name="11" value="convulsiones">
                                    <label class="form-check-label" for="inlineRadio1">Convulsiones</label> <br>
                                    <input class="form-check-input" type="checkbox" name="11" value="epilepsia">
                                    <label class="form-check-label" for="inlineRadio2"></label>Epilepsia <br>
                                    <input class="form-check-input" type="checkbox" name="11" value="hiperactividad">
                                    <label class="form-check-label" for="inlineRadio2">Hiperactividad</label> <br>
                                    <input class="form-check-input" type="checkbox" name="11" value="Perdida del conocimiento">
                                    <label class="form-check-label" for="inlineRadio2">Perdida del conocimiento</label> <br>
                                </div>
                                <div>
                                    <p class="fs-5">12. ¿Se encuentra bajo algun tratamiento?</p>
                                    <input class="form-check-input" type="radio" name=12" value="si">
                                    <label class="form-check-label" for="inlineRadio1">SI</label>
                                    <input class="form-check-input" type="radio" name="12" value="no">
                                    <label class="form-check-label" for="inlineRadio2">NO</label>
                                    <input style="width: 100%;" type="text" placeholder="¿De que tipo?" name="12">
                                    <p class="fs-5">12. ¿Tiene estudios medicos al respecto?</p>
                                    <input class="form-check-input" type="radio" name=12" value="si">
                                    <label class="form-check-label" for="inlineRadio1">SI</label>
                                    <input class="form-check-input" type="radio" name="12" value="no">
                                    <label class="form-check-label" for="inlineRadio2">NO</label>
                                    <input style="width: 100%;" type="text" placeholder="¿Cuales?" name="12">
                                </div>
                                <div>
                                    <p class="fs-5">13. ¿Posee alguna limitacion para hacer actividad fisica?</p>
                                    <input class="form-check-input" type="radio" name="13" value="si">
                                    <label class="form-check-label" for="inlineRadio1">SI</label>
                                    <input class="form-check-input" type="radio" name="13" value="no">
                                    <label class="form-check-label" for="checkbox">NO</label>
                                    <input style="width: 100%;" type="text" placeholder="¿Cual?" name="11">
                                </div>
                                <div>
                                    <p class="fs-5">14. ¿En la actualidad vive con: ?</p>
                                    <input class="form-check-input" type="checkbox" name="14" value="si">
                                    <label class="form-check-label" for="inlineRadio1">Padre</label><br>
                                    <input class="form-check-input" type="checkbox" name="14" value="no">
                                    <label class="form-check-label" for="inlineRadio1">Madre</label><br>
                                    <input class="form-check-input" type="checkbox" name="14" value="hermanos">
                                    <label class="form-check-label" for="inlineRadio1">Hermanos</label><br>
                                    <input class="form-check-input" type="checkbox" name="14" value="abuelos">
                                    <label class="form-check-label" for="inlineRadio1">Abuelos</label><br>
                                    <input style="width: 100%;" type="text" placeholder="Otros" name="14">
                                </div>
                                <div>
                                    <p class="fs-5">15. Si tiene alguna sugerencia hágala saber:
                                        <input type="text" placeholder="(opcional)" name="15">
                                </div>


                                <p> El que se suscribe Padre, Madre o Tutor del alumno/a <input type="text" placeholder="" name="nombre_tutor"> <br>
                                    DNI <input type="text" name="dni_tutor"> <br>
                                    AUTORIZO/A a mi hijo/a a que realice actividades fisicas de acuerdo a su edad, en compañia de los profesionales designados,
                                    que tendran a su cargo las responsabilidades emergentes en los textos legales vigentesd arts. 1749, 1751, 1755 y cctes de CC y CN,
                                    resoluciones 416/84, 154/87 y/o la responsabilidad estatal conforme la Ley n° 26.944 en caso de existir. <br>
                                    Autorizo a que en caso de accidente se lo deribe al centro asistencial: <br><input type="text" style="width: 100%;" placeholder="ingrese el centro asistencial" name="centro_asistencial">
                                    Telefono de emergencia: <input type="number" placeholder="+54 " name="telEmergencia">
                                    <br> Me responsabilizo en comunicar a la institucion correspondiente sobre los cambios producidos en la salud de mi hijo/a adjuntando certificados médicos
                                    correspondientes a fin de que se tomen los recaudos necesarios. Por lo tanto, de no llevar ningun nuevo informe del padre, madre o tutor,
                                    deberá considerarse que el alumno/a continua siendo apto para realizar actividad física. <br>

                                    <br>Ingrese fotocopia del DNI


                                </p>

                                <!-- <form action="vistas/paginas/subirArchivo.php" enctype="multipart/form-data" method="post"> -->
                                    <input type="file" name="archivo">
                                    <br>
                                    <!-- <button type="submit"> enviar</a> -->
                                <!-- </form> -->


                                <br><button class="btn" type="submit">Inscribite</button>
                            </form>

                    </div>
                </div>
            </div>
        </div>
    </section>

</body>


</html>