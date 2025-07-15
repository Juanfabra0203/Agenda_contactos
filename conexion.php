<?php
$host ="localhost";
$user ="root";
$pass = "";
$database = "agenda";

$conexion = new mysqli($host,$user,$pass,$database);

if($conexion -> connect_error){
    die("conexion fallida " . $conexion -> connect_error);
}

?>