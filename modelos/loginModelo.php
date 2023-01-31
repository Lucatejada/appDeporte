<?php
require_once("conexion.php");

class LoginModelo extends Conexion
{
    public function login($nombre, $apellido, $dni)
    {
        //Creamos consulta con query y buscamos coincidencias con los datos 
        $sql = "SELECT * FROM usuarios WHERE nombre = '$nombre' and 
                apellido = '$apellido' and dni = '$dni'";
        $resultado = $this->conexion->query($sql);
        $numFilas = $resultado->num_rows;
        return $numFilas;
    }

    

    public function verificarDni($dni){

        $sql = "SELECT dni FROM usuarios WHERE dni = $dni";
        $resultado = $this->conexion->query($sql);
        $dni = $resultado->fetch_row()[0];
        return $dni;
    }

    public function verificarRol($dni){

        $sql = "SELECT r.nombre FROM usuarios u, roles r WHERE u.id_roles2 = r.id and u.dni = $dni";
        $resultado = $this->conexion->query($sql);
        $rol = $resultado->fetch_row()[0];
        return $rol;
    }


    public function mostrarUserName($dni){

        $sql = "SELECT concat(u.nombre,' ',u.apellido) AS user_name FROM usuarios u WHERE u.dni = $dni";
        $resultado = $this->conexion->query($sql);
        $userName = $resultado->fetch_row()[0];
        return $userName;


    }
}



