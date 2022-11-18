<?php

class mdlAsistencia
{

    public function mostrarAsistencia()
    {
        require_once("conexion.php");
        $sql = "SELECT * FROM dbdeporte";
        $resultado = $conexion->query($sql);
        $listaAsistencia = $resultado->fetch_all(MYSQLI_ASSOC);
        return $listaAsistencia;


    }

}
