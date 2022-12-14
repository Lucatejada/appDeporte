<?php

class mdlDistrito
{

    public function mostrarDistrito()
    {
        require_once("conexion.php");
        $sql = "SELECT * FROM distritos";
        $resultado = $conexion->query($sql);
        $listaDistritos = $resultado->fetch_all(MYSQLI_ASSOC);
        return $listaDistritos;

    }

}

?>