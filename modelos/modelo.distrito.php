<?php

require_once('conexion.php');

class mdlDistrito extends Conexion
{

    public function mostrarDistrito()
    {
        $sql = "SELECT * FROM distritos";
        $resultado = $this->conexion->query($sql);
        $listaDistritos = $resultado->fetch_all(MYSQLI_ASSOC);
        return $listaDistritos;
    }
    public function mostrarDistritos()
    {
        $sql = "SELECT * FROM distritos";
        $resultado = $this->conexion1->query($sql);
        $listaDistritos1 = $resultado->fetch_all(MYSQLI_ASSOC);
        return $listaDistritos1;
    }
}
