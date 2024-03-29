

<head>

    <meta charset="utf-8">
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


    <title>Declaracion jurada</title>



</head>

<body>


    <section class="w3l-hotair-form" style="background-color:#800080;">
        <div class="container1">
            <div class="workinghny-form-grid">
                <div class="main-hotair1">
                    <div class="content-wthree">
                        <h5 class="text-left">MENORES DE 18 AÑOS</h6> <br><br><br>
                            <h3 class="text-center">DECLARACION JURADA DE SALUD <br>
                                ACTIVIDADES DEPORTIVAS <br>
                                AÑO 2023 </h3>
                            <hr><br>

                            <form action="vistas/inicio.php?c=controladorArchivo&a=ctrRespuestas" method="post" required="">
                                <input style="width: 100%;" type="text" placeholder="Ingrese su nombre" name="nombre" required="">
                                <input style="width: 100%;" type="text" placeholder="Ingrese su apellido" name="apellido" required="">
                                <input style="width: 100%;" type="number" placeholder="Ingrese su DNI (solo numeros)" name="dni" required="">
                                <input style="width: 100%;" type="number" placeholder="Ingrese su telefono" name="telefono" required="">
                                <input style="width: 100%;" type="text" placeholder="Ingrese su tipo de sangre" name="sangre" required=""> <br>
                                <input style="width: 100%;" type="number" placeholder="Ingrese su peso en kg" name="peso" required="">
                                <input style="width: 100%;" type="number" placeholder="Ingrese su talle en cm" name="talle" required="">

                                <div class="row mb-3">
                                    <select aria-label="Default select example" name="distritos" required="" class="form-control">
                                        <option selected>Seleccione su distrito</option>
                                        <?php
                                        foreach ($listaDistritos as $distritos) {
                                        ?>
                                            <option value="<?= $distritos['id']?>"> <?= $distritos['nombre']?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>


                                <br>
                                <h4> Preguntas: </h4>
                                <br>


                                <div>
                                    <p class="fs-5">01. ¿Tuvo enfermedades dentro de los 60 días anteriores al comienzo de clases?</p>
                                    <input class="form-check-input" type="radio" name="uno" value="si">
                                    <label class="form-check-label" for="inlineRadio1">SI</label>
                                    <input class="form-check-input" type="radio" name="uno" value="no">
                                    <label class="form-check-label" for="inlineRadio2">NO</label>
                                </div>

                                <div>
                                    <p class="fs-5">02. ¿Sufre algun problema cardiovascular?</p>
                                    <input class="form-check-input" type="radio" name="dos" value="si">
                                    <label class="form-check-label" for="inlineRadio1">SI</label>
                                    <input class="form-check-input" type="radio" name="dos" value="no">
                                    <label class="form-check-label" for="inlineRadio2">NO</label>

                                </div>
                                <div>
                                    <p class="fs-5">03. ¿Sufre algun problema respiratorio?</p>
                                    <input class="form-check-input" type="radio" name="tres" value="si">
                                    <label class="form-check-label" for="inlineRadio1">SI</label>
                                    <input class="form-check-input" type="radio" name="tres" value="no">
                                    <label class="form-check-label" for="inlineRadio2">NO</label>

                                </div>
                                <div>
                                    <p class="fs-5">04. ¿Sufre de alergia?</p>
                                    <input class="form-check-input" type="radio" name="cuatro" value="si">
                                    <label class="form-check-label" for="inlineRadio1">SI</label>
                                    <input class="form-check-input" type="radio" name="cuatro" value="no">
                                    <label class="form-check-label" for="inlineRadio2">NO</label>

                                </div>
                                <div>
                                    <p class="fs-5">05. ¿A sufrifo alguna de estas enfermedades?</p>
                                    <input class="form-check-input" type="radio" name="cinco[]" value="si">
                                    <label class="form-check-label" for="inlineRadio1">SI</label>
                                    <input class="form-check-input" type="radio" name="cinco[]" value="no">
                                    <label class="form-check-label" for="inlineRadio2">NO</label> <br>
                                    <input class="form-check-input" type="checkbox" name="cinco[]" value="sarampion">
                                    <label class="form-check-label" for="inlineRadio1">Sarampion</label> <br>
                                    <input class="form-check-input" type="checkbox" name="cinco[]" value="varicela">
                                    <label class="form-check-label" for="inlineRadio2">Varicela</label> <br>
                                    <input class="form-check-input" type="checkbox" name="cinco[]" value="rubeola">
                                    <label class="form-check-label" for="inlineRadio2">Rubéola</label> <br>
                                    <input class="form-check-input" type="checkbox" name="cinco[]" value="paperas">
                                    <label class="form-check-label" for="inlineRadio2">Paperas</label> <br>
                                    <input class="form-check-input" type="checkbox" name="cinco[]" value="hepatitis">
                                    <label class="form-check-label" for="inlineRadio2">Hepatitis</label> <br>
                                    <input style="width: 100%;" type="text" placeholder="Otra..." name="motivocinco[]">
                                </div>
                                <div>
                                    <p class="fs-5">06. ¿Tuvo operaciones?</p>
                                    <input class="form-check-input" type="radio" name="seis[]" value="si">
                                    <label class="form-check-label" for="inlineRadio1">SI</label>
                                    <input class="form-check-input" type="radio" name="seis[]" value="no">
                                    <label class="form-check-label" for="inlineRadio2">NO</label>
                                    <input style="width: 100%;" type="text" placeholder="¿De que tipo?" name="motivoseis[]">
                                </div>
                                <div>
                                    <p class="fs-5">07. ¿Tuvo fracturas? </p>
                                    <input class="form-check-input" type="radio" name="siete[]" value="si">
                                    <label class="form-check-label" for="inlineRadio1">SI</label>
                                    <input class="form-check-input" type="radio" name="siete[]" value="no">
                                    <label class="form-check-label" for="inlineRadio2">NO</label>
                                    <input style="width: 100%;" type="text" placeholder="¿Cuales?" name="motivosiete[]">
                                </div>
                                <div>
                                    <p class="fs-5">08. ¿Tiene problemas en la columna vertebral?</p>
                                    <input class="form-check-input" type="radio" name="ocho[]" value="si">
                                    <label class="form-check-label" for="inlineRadio1">SI</label>
                                    <input class="form-check-input" type="radio" name="ocho[]" value="no">
                                    <label class="form-check-label" for="inlineRadio2">NO</label> <br>
                                    <input class="form-check-input" type="checkbox" name=ocho[]" value="escoliosis">
                                    <label class="form-check-label" for="inlineRadio1">Escoliosis</label> <br>
                                    <input class="form-check-input" type="checkbox" name="ocho[]" value="cifosis">
                                    <label class="form-check-label" for="inlineRadio1">Cifosis</label> <br>
                                    <input class="form-check-input" type="checkbox" name="ocho[]" value="lordosis">
                                    <label class="form-check-label" for="inlineRadio2">Lordosis</label> <br>
                                    <input style="width: 100%;" type="text" placeholder="Otra..." name="ocho[]">
                                    <!-- <input style="width: 100%;" type="text" placeholder="Desconoce" name="ocho[]"> -->
                                </div>
                                <div>
                                    <p class="fs-5">09. ¿Tiene problemas de visión?</p>
                                    <input class="form-check-input" type="radio" name="nueve[]" value="si">
                                    <label class="form-check-label" for="inlineRadio1">SI</label>
                                    <input class="form-check-input" type="radio" name="nueve[]" value="no">
                                    <label class="form-check-label" for="inlineRadio2">NO</label>
                                    <input style="width: 100%;" type="text" placeholder="¿De que tipo?" name="motivonueve[]">
                                </div>
                                <div>
                                    <p class="fs-5">10. ¿Tiene problemas endocrinos?</p>
                                    <input class="form-check-input" type="radio" name="diez[]" value="si">
                                    <label class="form-check-label" for="inlineRadio1">SI</label>
                                    <input class="form-check-input" type="radio" name="diez[]" value="no">
                                    <label class="form-check-label" for="inlineRadio2">NO</label> <br>
                                    <input class="form-check-input" type="checkbox" name="diez[]" value="diabetes">
                                    <label class="form-check-label" for="inlineRadio1">Diabetes</label> <br>
                                    <input class="form-check-input" type="checkbox" name="diez[]" value="hipotiroidismo">
                                    <label class="form-check-label" for="inlineRadio2">Hipotiroidismo</label> <br>
                                    <input class="form-check-input" type="checkbox" name="diez[]" value="hipertiroidismo">
                                    <label class="form-check-label" for="inlineRadio2">Hipertiroidismo</label> <br>
                                    <input style="width: 100%;" type="text" placeholder="Otros." name="motivodiez[]">
                                </div>
                                <div>
                                    <p class="fs-5">11. ¿Tiene problemas del sistema nervioso?</p>
                                    <input class="form-check-input" type="radio" name="once[]" value="si">
                                    <label class="form-check-label" for="inlineRadio1">SI</label>
                                    <input class="form-check-input" type="radio" name="once[]" value="no">
                                    <label class="form-check-label" for="inlineRadio2">NO</label> <br>
                                    <input class="form-check-input" type="checkbox" name="once[]" value="convulsiones">
                                    <label class="form-check-label" for="inlineRadio1">Convulsiones</label> <br>
                                    <input class="form-check-input" type="checkbox" name="once[]" value="epilepsia">
                                    <label class="form-check-label" for="inlineRadio2"></label>Epilepsia <br>
                                    <input class="form-check-input" type="checkbox" name="once[]" value="hiperactividad">
                                    <label class="form-check-label" for="inlineRadio2">Hiperactividad</label> <br>
                                    <input class="form-check-input" type="checkbox" name="once[]" value="Perdida del conocimiento">
                                    <label class="form-check-label" for="inlineRadio2">Perdida del conocimiento</label> <br>
                                </div>
                                <!-- <div>
                                    <p class="fs-5">12. ¿Se encuentra bajo algun tratamiento?</p>
                                    <input class="form-check-input" type="radio" name="12[]" value="si">
                                    <label class="form-check-label" for="inlineRadio1">SI</label>
                                    <input class="form-check-input" type="radio" name="12[]" value="no">
                                    <label class="form-check-label" for="inlineRadio2">NO</label>
                                    <input style="width: 100%;" type="text" placeholder="¿De que tipo?" name="12[]">
                                    <p class="fs-5">¿Tiene estudios medicos al respecto?</p>
                                    <input class="form-check-input" type="checkbox" name="12[]" value="si">
                                    <label class="form-check-label" for="inlineRadio1">SI</label>
                                    <input class="form-check-input" type="checkbox" name="12[]" value="no">
                                    <label class="form-check-label" for="inlineRadio2">NO</label>
                                    <input style="width: 100%;" type="text" placeholder="¿Cuales?" name="12[]">
                                </div> -->
                                <div>
                                    <p class="fs-5">13. ¿Posee alguna limitacion para hacer actividad fisica?</p>
                                    <input class="form-check-input" type="radio" name="trece[]" value="si">
                                    <label class="form-check-label" for="inlineRadio1">SI</label>
                                    <input class="form-check-input" type="radio" name="trece[]" value="no">
                                    <label class="form-check-label" for="checkbox">NO</label>
                                    <input style="width: 100%;" type="text" placeholder="¿Cual?" name="trece[]">
                                </div>
                                <div>
                                    <p class="fs-5">14. ¿En la actualidad vive con: ?</p>
                                    <input class="form-check-input" type="checkbox" name="catorce[]" value="padre">
                                    <label class="form-check-label" for="inlineRadio1">Padre</label><br>
                                    <input class="form-check-input" type="checkbox" name="catorce[]" value="madre">
                                    <label class="form-check-label" for="inlineRadio1">Madre</label><br>
                                    <input class="form-check-input" type="checkbox" name="catorce[]" value="hermanos">
                                    <label class="form-check-label" for="inlineRadio1">Hermanos</label><br>
                                    <input class="form-check-input" type="checkbox" name="catorce[]" value="abuelos">
                                    <label class="form-check-label" for="inlineRadio1">Abuelos</label><br>
                                    <input style="width: 100%;" type="text" placeholder="Otros" name="catorce[]">
                                </div>
                                <div>
                                    <p class="fs-5">15. Si tiene alguna sugerencia hágala saber:
                                        <input type="text" placeholder="(opcional)" name="quince">
                                </div>


                                <p> El que se suscribe Padre, Madre o Tutor del alumno/a <input type="text" placeholder="" name="nombre_tutor"> <br>
                                    DNI <input type="number" name="dni_tutor"> <br>
                                    AUTORIZO/A a mi hijo/a a que realice actividades fisicas de acuerdo a su edad, en compañia de los profesionales designados,
                                    que tendran a su cargo las responsabilidades emergentes en los textos legales vigentesd arts. 1749, 1751, 1755 y cctes de CC y CN,
                                    resoluciones 416/84, 154/87 y/o la responsabilidad estatal conforme la Ley n° 26.944 en caso de existir. <br>
                                    Autorizo a que en caso de accidente se lo deribe al centro asistencial: <br><input type="text" style="width: 100%;" placeholder="ingrese el centro asistencial" name="centro_asistencial" required="">
                                    Telefono de emergencia: <input type="number" placeholder="+54 " name="telEmergencia" required="">
                                    <br> Me responsabilizo en comunicar a la institucion correspondiente sobre los cambios producidos en la salud de mi hijo/a adjuntando certificados médicos
                                    correspondientes a fin de que se tomen los recaudos necesarios. Por lo tanto, de no llevar ningun nuevo informe del padre, madre o tutor,
                                    deberá considerarse que el alumno/a continua siendo apto para realizar actividad física. <br>

                                    <br>Ingrese fotocopia del DNI


                                    <input type="file" name="archivo" enctype="multipart/form-data">
                                </p>

                                <!-- <form action="vistas/paginas/subirArchivo.php" enctype="multipart/form-data" method="post"> -->
                                <!-- <button type="submit"> enviar</a> -->
                                <!-- </form> -->

                                <label class="form-check-label" for="inlineRadio1">Acepto las normas de convivencia</label><br>
                                <input class="form-check-input" type="checkbox" name="normas" value="normas">




                                <br><button class="btn" type="submit">Inscribite</button>
                            </form>

                    </div>
                </div>
            </div>
        </div>
    </section>



</body>


</html>