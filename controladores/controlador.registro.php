<?php
session_start();
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$dni = $_POST['dni'];
$telefono = $_POST['telefono'];
$domicilio = $_POST['domicilio'];

// var_dump($_POST);

$conexion = new mysqli("localhost", "root", "", "test");

$sql = "INSERT INTO dbdeporte (dni, nombre, apellido, telefono, domicilio) VALUES ('$dni','$nombre', '$apellido', '$telefono', '$domicilio')";


if (mysqli_query($conexion, $sql)) {
    $_SESSION['usuarioRegistrado'] = true; 
    header("Location: ../index.php?pagina=ingreso");
} else {
  
    header("Location: ../index.php?pagina=registro");

}




 ?>