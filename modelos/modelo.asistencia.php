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


    public static function mdlPresente($usuario)
    {

        // require_once("conexion.php"); 
        // $sql = "UPDATE asistencia SET dia=getdate(),entrada=now(),usuario-dni='$usuario'";
        // $resultado = $conexion->query($sql);
        echo "aaaaaa";
    }

    public function mdlAusente()
    {
    }
}
