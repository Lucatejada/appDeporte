<?php

class ctrActividades {

    public static function ctrMostrarActividades(){
        require_once("modelos/modelo.actividades.php");
        $mdlActividades = new mdlActividades(); 
        $listaActividades = $mdlActividades->mostrarActividades();
        require_once("vistas/paginas/registro.php"); 
    }
}


