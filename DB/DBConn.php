<?php
class Conexion{
  
  public static function getConexion(){
	$conexion = new mysqli("127.0.0.1", "streaming", "streaming", "streamingdb");
    return $conexion;
  }

}
?>