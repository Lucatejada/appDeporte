<?php

require_once('conexion.php');

class mdlAsistencia extends Conexion
{

    public function mostrarAsistencia()
    {
        $sql = "SELECT * FROM usuarios";
        $resultado = $this->conexion->query($sql);
        $listaAsistencia = $resultado->fetch_all(MYSQLI_ASSOC);
        return $listaAsistencia;
    }

}
