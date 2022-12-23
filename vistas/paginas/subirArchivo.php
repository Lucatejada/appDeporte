<?php

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$cuil = $_POST['cuil'];
$telefono = $_POST["telefono"];
$sangre = $_POST["sangre"];
$peso = $_POST["peso"];
$talle = $_POST["talle"];
$uno = $_POST["1"];
$dos = $_POST["2"];
$tres = $_POST["3"];
$cuatro = $_POST["4"];
$cinco = $_POST["5"];
$seis = $_POST["6"];
$siete = $_POST["7"];
$ocho = $_POST["8"];
$nueve = $_POST["9"];
$diez = $_POST["10"];
$once = $_POST["11"];
$doce = $_POST["12"];
$trece = $_POST["13"];
$catorce = $_POST["14"];
$quince = $_POST["15"];
$nombre_tutor = $_POST["nombre_tutor"];
$dni_tutor = $_POST["dni_tutor"];
$telEmergencia = $_POST["telEmergencia"];
$centro_asistencial = $_POST["centro_asistencial"];


if($uno == "si"){
    $respuesta1 = "si"; 
} else {
    $respuesta1 = "no"; 
}

if($dos == "si"){
    $respuesta1 = "si"; 
} else {
    $respuesta1 = "no"; 
}


foreach ($cinco as $respuesta) {
    $respuesta5 .= $respuesta.", "; 
}

// print_r($_FILES['archivo']);
$nombre = $_FILES['archivo']['name'];
$guardado = $_FILES['archivo']['tmp_name'];

if (!file_exists('archivos')) {
    mkdir('archivos', 0777, true);
    if (file_exists('archivos')) {
        if (move_uploaded_file($guardado, '../../archivos/' . $nombre)) {
            echo "Archivo guardado exitosamente";
        } else {
            echo "Archivo no guardado ";
        }
    }
} else {
    if (move_uploaded_file($guardado, '../../archivos/' . $nombre)) {
        echo "Archivo guardado exitosamente";
    } else {
        echo "Archivo no guardado ";
    }
}

?>