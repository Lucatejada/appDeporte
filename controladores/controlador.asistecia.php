<?php
class controladorUsuario{

    public static function ctrAsistencia(){
        require_once("modelos/modelo.asistencia.php");
        $mdlAsistencia = new mdlAsistencia(); 
        $listadoAsistencia = $mdlAsistencia->mostrarAsistencia();
        require_once("vistas/paginas/principal.php"); 
    }


    public static function ctrPresente(){
        session_start();
        // $usuarioActual = $_SESSION['cuil'];
        // require_once("modelos/modelo.asistencia.php");
        // $mdlPresente = new mdlAsistencia(); 
        // echo $usuarioActual;

        echo "aaa"; 
    }

}


?>
