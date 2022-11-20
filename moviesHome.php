<?php

//Archivo de conexion a DB
require_once('../DB/DBConn.php');

//Importamos la conexion
$conexion=Conexion::getConexion();

$consulta = "select * from peliculas  order by NombrePelicula";

$resultado=$conexion->query($consulta);

echo var_dump($resultado);



?>