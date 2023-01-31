<?php

class controladorRegistro
{
    public static function mostrarPaginaRegistro()
    {
        require_once("modelos/modelo.actividades.php");
        require_once("modelos/modelo.distrito.php");
        require_once("modelos/modelo.usuario.php");
        $mdlActividades = new mdlActividades();
        $listaActividades = $mdlActividades->mostrarActividades();
        $mdlDistritos = new mdlDistrito();
        $listaDistritos = $mdlDistritos->mostrarDistrito();
        $mdlRoles = new mdlUsuario();
        $listaRoles = $mdlRoles->rolesUsuarioM();
        require_once("vistas/plantilla.php");
        require_once("vistas/paginas/registro.php");
    }

    public static function mostrarPersonas(){
        require_once("modelos/modelo.respuestas.php");        
        $mdlPersonas = new mdlRespuestas();
        $listaPersonas = $mdlPersonas->mostrarPersonas();
        require_once("vistas/plantilla.php");
        require_once("vistas/paginas/principal.php");
    }


    public static function registrarUsuario()
    {
        require_once("../modelos/modelo.usuario.php");
        session_start();
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $dni = $_POST['dni'];
        $telefono = $_POST['telefono'];
        $actividades = $_POST['actividades'];
        $distritos = $_POST['distritos'];
        $roles = $_POST['roles'];

        $mdlUsuario = new mdlUsuario();
        if ($mdlUsuario->registrarUsuarioM($dni, $nombre, $apellido, $telefono,  $actividades, $distritos, $roles)) {
            $_SESSION['usuarioRegistrado'] = true;
            header("Location: ../index.php?pagina=ingreso");
        } else {
            $_SESSION['dniRepetido'] = true;
            header("Location: ../index.php?pagina=registro");
        }
    }
}
