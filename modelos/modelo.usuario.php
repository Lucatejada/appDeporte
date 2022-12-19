<?php

require_once('conexion.php');

class mdlUsuario extends Conexion
{

    public function registrarUsuarioM($cuil, $nombre, $apellido, $telefono)
    {
        $sql = "INSERT INTO usuarios (cuil, nombre, apellido, telefono) VALUES ('$cuil','$nombre', '$apellido', '$telefono')";
        try {
            $resultado = $this->conexion->query($sql);
            if ($resultado) {
                return true;
            } else {
                return false;
            }
        } catch (Exception $e) {
            return false;
        }
    }
}
