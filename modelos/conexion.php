<?php
error_reporting(0);

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "test";

$conexion = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if(!$conexion){

    //error si no hay conexion larga error 
    die("No hay conexion".mysqli_connect_error()); 
} 

?>