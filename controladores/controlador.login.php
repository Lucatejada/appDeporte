<?php
require_once('../modelos/loginModelo.php');


$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$cuil = $_POST["cuil"];

$loginModel = new LoginModelo();

//almacena el numero de fila 

if ($loginModel->login($nombre, $apellido, $cuil) == 0) {
    session_start();
    header("Location: ../index.php?pagina=ingreso");
    $_SESSION['datosMal'] = true;
} else {
    session_start();
    $_SESSION['ingreso'] = true;
    $_SESSION['cuil'] = $cuil;
    header("Location: ../index.php?pagina=principal");
}
