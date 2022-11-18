<?php
session_start();
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$dni = $_POST['dni'];
$telefono = $_POST['telefono'];
$domicilio = $_POST['domicilio'];

// var_dump($_POST);

$sql = "INSERT INTO dbdeporte (dni, nombre, apellido, telefono, domicilio) VALUES ('$dni','$nombre', '$apellido', '$telefono', '$domicilio')";
require_once("../modelos/conexion.php");
$query = mysqli_query($conexion, $sql);


if ($query == true) {
    $_SESSION['usuarioRegistrado'] = true; 
    header("Location: ../index.php?pagina=ingreso");

}

 ?>
