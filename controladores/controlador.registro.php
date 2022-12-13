<?php
session_start();
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$cuil = $_POST['cuil'];
$telefono = $_POST['telefono'];
$domicilio = $_POST['domicilio'];
$actividades = $_POST['actividades'];

// var_dump($_POST);

$conexion = new mysqli("localhost", "root", "", "test");

$sql = "INSERT INTO usuarios (cuil, nombre, apellido, telefono, domicilio) VALUES ('$cuil','$nombre', '$apellido', '$telefono', '$domicilio')";


if (mysqli_query($conexion, $sql)) {
    $_SESSION['usuarioRegistrado'] = true; 
    header("Location: ../index.php?pagina=ingreso");
} else {
  
    header("Location: ../index.php?pagina=registro");

}




 ?>