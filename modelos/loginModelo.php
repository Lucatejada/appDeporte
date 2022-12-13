<?php
require_once("conexion.php");


$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$cuil = $_POST["cuil"];

//Creamos consulta con query y buscamos coincidencias con los datos 
$consulta = "SELECT * FROM usuarios WHERE nombre = '$nombre' and 
apellido = '$apellido' and cuil = '$cuil'";

$query = mysqli_query($conexion, $consulta);

// while($fila = mysqli_fetch_assoc($query)){
//     $cuilv = $fila['cuil'];

// }

//almacena el numero de fila 
$nr = mysqli_num_rows($query);

if ($nr == 0) {
    session_start();
    header("Location: ../index.php?pagina=ingreso");
    $_SESSION['datosMal']=true;
} else {
    session_start();
    $_SESSION['ingreso'] = true;
    $_SESSION['cuil']=$cuilv;
    header("Location: ../index.php?pagina=principal");
    
}




?>
