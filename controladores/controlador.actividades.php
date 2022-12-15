<?php

class ctrActividades {

    public static function ctrMostrarActividades(){
        require_once("modelos/modelo.actividades.php");
        require_once("modelos/modelo.distrito.php");
        $mdlActividades = new mdlActividades(); 
        $listaActividades = $mdlActividades->mostrarActividades();
        $mdlDistritos = new mdlDistrito(); 
        $listaDistritos = $mdlDistritos->mostrarDistrito();
        require_once("vistas/plantilla.php"); 
        require_once("vistas/paginas/registro.php"); 
    }
}


