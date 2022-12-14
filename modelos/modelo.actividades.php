<?php

class mdlActividades
{

    public function mostrarActividades()
    {
        require_once("conexion.php");
        $sql = "SELECT * FROM actividades";
        $resultado = $conexion->query($sql);
        $listaActividades = $resultado->fetch_all(MYSQLI_ASSOC);
        return $listaActividades;

    }

}

?>