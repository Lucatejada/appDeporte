<?php
class controladorUsuario{

    public static function ctrAsistencia(){
        require_once("modelos/modelo.asistencia.php");
        $mdlAsistencia = new mdlAsistencia(); 
        $listadoAsistencia = $mdlAsistencia->mostrarAsistencia();
        require_once("vistas/paginas/principal.php"); 
    }
}
?>
