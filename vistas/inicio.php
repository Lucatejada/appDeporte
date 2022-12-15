<?php

if (!isset($_REQUEST['c'])) {
    
    $controller = $_REQUEST['c'];

    require_once('../controladores/controlador.' . $controller . '.php');

    if (isset($_REQUEST['a'])) {
        $accion = $_REQUEST['a'];
    } 

    $controller = ucwords($controller);

    call_user_func(array($controller, $accion));
}




?>