<?php

class controladorRegistro
{

    public static function mostrarPaginaRegistro()
    {
        require_once("modelos/modelo.actividades.php");
        require_once("modelos/modelo.distrito.php");
        $mdlActividades = new mdlActividades();
        $listaActividades = $mdlActividades->mostrarActividades();
        $mdlDistritos = new mdlDistrito();
        $listaDistritos = $mdlDistritos->mostrarDistrito();
        require_once("vistas/plantilla.php");
        require_once("vistas/paginas/registro.php");
    }

    public static function registrarUsuario()
    {
        require_once("../modelos/modelo.usuario.php");
        session_start();
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $cuil = $_POST['cuil'];
        $telefono = $_POST['telefono'];
        $domicilio = $_POST['domicilio'];
        $actividades = $_POST['actividades'];

        $mdlUsuario = new mdlUsuario();
        if ($mdlUsuario->registrarUsuarioM($cuil, $nombre, $apellido, $telefono, $domicilio)) {
            $_SESSION['usuarioRegistrado'] = true;
            header("Location: ../index.php?pagina=ingreso");
        } else {
            header("Location: ../index.php?pagina=registro");
        }
    }

}


?>
