<?php
require_once('conexion.php');

class ModeloFormularios extends Conexion
{

//actualizar REGISTROS
    public function mdlActualizarRegistro($tabla, $nombre, $dni)
    {

        $sql = "UPDATE $tabla SET nombre='$nombre' where cuil='$dni'";
        $resultado = $this->conexion->query($sql);
        
        if($resultado){
            return true;
        } else {
            return false;
        }

        // return $sql;
    }

    public function mdlEliminarUsuario($tabla, $dni)
    {

        $sql = "DELETE FROM $tabla WHERE cuil='$dni'";
        $resultado = $this->conexion->query($sql);
        if($resultado){
            return true;
        } else {
            return false;
        }

        // return $sql;
    }
} 
    ?>