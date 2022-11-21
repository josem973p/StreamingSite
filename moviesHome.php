<?php

//Archivo de conexion a DB
require_once('DB/DBConn.php');

//Importamos la conexion
$conexion=Conexion::getConexion();

$consulta = "select * from peliculas  order by NombrePelicula";

$resultado=$conexion->query($consulta);


echo $resultado->num_rows;

while($row = $resultado->fetch_assoc()) {
    echo "id: " . $row["RutaArchivo"]. " - Name: " . $row["NombreArchivo"]. " " . $row["NombrePelicula"]. "<br>";
  }



$e=mysqli_fetch_object($resultado);





echo var_dump($e );



?>