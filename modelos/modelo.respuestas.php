<?php
require_once('conexion.php');

class mdlRespuestas extends Conexion
{

   public function subirRespuestas($nombre, $apellido, $dni, $telefono, $sangre, $peso, $talle, $uno, $dos, $tres, $cuatro, $cinco, $seis, $siete, $ocho, $nueve, $diez, $once, $doce, $trece, $catorce, $quince, $nombre_tutor, $dni_tutor, $telEmergencia, $centro_asistencial, $archivo)
    {
        $sql = "INSERT INTO resultado (nombre, apellido, dni, telefono, sangre, peso, talle, 
        uno, dos, tres, cuatro, cinco, seis, siete, ocho, nueve, diez, once, doce, trece, catorce, quince, 
        nombre_tutor, dni_tutor, telEmergencia, centro_asistencial, archivo)
        VALUES ('$nombre', '$apellido', '$dni', '$telefono', '$sangre', '$peso', '$talle', 
        '$uno', '$dos', '$tres', '$cuatro', '$cinco', '$seis', '$siete', '$ocho', '$nueve', '$diez', '$once', '$doce', '$trece', '$catorce', '$quince',
        '$nombre_tutor', '$dni_tutor', '$telEmergencia', '$centro_asistencial', '$archivo')";
        // return $sql;
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

    public function registrarUsuarioGM($dni, $nombre, $apellido, $telefono)
    {

        $sql1 = "INSERT INTO personas (dni, nombre, apellido, telefono) VALUES ('$dni', '$nombre', '$apellido', '$telefono')";    
        try {
            $resultado = $this->conexion1->query($sql1);
            if ($resultado) {
                return true;
            } else {
                return false;
            }
        } catch (Exception $e) {
            return false;
        }
    }

    public function mostrarRespuestas()
    {
        $sql = "SELECT nombre, apellido, dni, telefono, sangre, peso, talle, uno, dos, tres, cuatro, cinco, seis, siete, ocho, nueve, diez, once, doce, trece, catorce, quince, nombre_tutor, telEmergencia, archivo FROM resultado";
        $resultado = $this->conexion->query($sql);
        $listaRespuestas = $resultado->fetch_all(MYSQLI_ASSOC);
        return $listaRespuestas;
    }


    public function mostrarPersonas()
    {
        $sql = "SELECT u.dni, u.nombre, u.apellido, u.telefono, a.nombre as nombre_actividad, d.nombre as nombre_distrito, r.nombre as nombre_roles 
        FROM usuarios u, actividades a, distritos d, roles r WHERE u.id_actividad2 = a.actividad_id and u.id_distrito2 = d.id and u.id_roles2 = r.id;";
        $resultado = $this->conexion->query($sql);
        $listaPersonas = $resultado->fetch_all(MYSQLI_ASSOC);
        return $listaPersonas;
    }
    
}
