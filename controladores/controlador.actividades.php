<?php

class controlActividades {

    public static function ctractividades(){
        require_once("modelos/modelo.actividades.php");
        $mdlActividades = new mdlActividades(); 
        $listaActividades = $mdlActividades->mostrarAsistencia();
        require_once("vistas/paginas/principal.php"); 
    }
}


