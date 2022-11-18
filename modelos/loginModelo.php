<?php
require_once("conexion.php");


$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$dni = $_POST["dni"];

//Creamos consulta con query y buscamos coincidencias con los datos 
$query = mysqli_query($conexion, "SELECT * FROM dbdeporte WHERE nombre = '$nombre' and 
apellido = '$apellido' and dni = '$dni'"); 
//almacena el numero de fila 
$nr = mysqli_num_rows($query);

if ($nr == true) {
    header("Location: ../index.php?pagina=principal");
    session_start();
  
}


?>