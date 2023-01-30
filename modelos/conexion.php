
<?php

class Conexion
{

    protected $conexion;
    protected $dbhost = "localhost";
    protected $dbuser = "root";
    protected $dbpass = "";
    protected $dbname = "test";

    protected $conexion1;
    protected $dbhost1 = "localhost";
    protected $dbuser1 = "root";
    protected $dbpass1 = "";
    protected $dbname1 = "registro_gllen";


    public function __construct()
    {
        $this->conexion = new mysqli($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname);

        if ($this->conexion->connect_errno) {
            echo 'Error al conectar la base de datos: ' . $this->conexion->connect_errno;
            return;
        }
        $this->conexion->set_charset('UTF8');

        // conexion a la base de datos general 

        $this->conexion1 = new mysqli($this->dbhost1, $this->dbuser1, $this->dbpass1, $this->dbname1);

        if ($this->conexion1->connect_errno) {
            echo 'Error al conectar la base de datos: ' . $this->conexion1->connect_errno;
            return;
        }

        $this->conexion1->set_charset('UTF8');
    }
}
