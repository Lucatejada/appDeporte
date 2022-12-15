<?php
require_once("conexion.php");

class LoginModelo extends Conexion
{
    public function login($nombre, $apellido, $cuil)
    {
        //Creamos consulta con query y buscamos coincidencias con los datos 
        $sql = "SELECT * FROM usuarios WHERE nombre = '$nombre' and 
                apellido = '$apellido' and cuil = '$cuil'";
        $resultado = $this->conexion->query($sql);
        $numFilas = $resultado->num_rows;
        return $numFilas;
    }
}



