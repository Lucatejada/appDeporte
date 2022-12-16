<?php

require_once('conexion.php');

class mdlUsuario extends Conexion
{

    public function registrarUsuarioM($cuil, $nombre, $apellido, $telefono, $domicilio)
    {
        $sql = "INSERT INTO usuarios (cuil, nombre, apellido, telefono, domicilio) VALUES ('$cuil','$nombre', '$apellido', '$telefono', '$domicilio')";
        $resultado = $this->conexion->query($sql);
        if ($resultado) {
            return true;
        } else {
            return false;
        }
    }
}