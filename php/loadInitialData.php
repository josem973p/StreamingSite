<?php
  
class LoadData{
 
    public static function getMoviesData(){
        
     //Archivo de conexion a DB
   require_once('DB/DBConn.php');
   require_once('php/querysEnum.php');
   //Importamos la conexion
   $conexion=Conexion::getConexion();

   /**
    * CATEGORIAS
    *   - ACCION
    *   - CIENCIA FICCION
    *   - COMEDIA
    *   - DOCUMENTAL
    *   - DRAMA
    *   - INFANTIL
    *   - ROMANCE
    */

        
        //OBTENER TODAS LAS PELICULAS
        $QueryPelicula = QuerysEnum::Peliculas-> value;
        $resPelicula=$conexion->query($QueryPelicula);
        $arrayPeliculas=array();
		while($e=mysqli_fetch_object($resPelicula)){
			$arrayPeliculas[]= $e;
		}

        //OBTENER TODAS LAS PELICULAS ACCION
        $QueryPeliculaAccion = QuerysEnum::PeliculasAccion-> value;
        $resPeliculaAccion=$conexion->query($QueryPeliculaAccion);
        $arrayPeliculasAccion=array();
		while($e=mysqli_fetch_object($resPeliculaAccion)){
			$arrayPeliculasAccion[]= $e;
		}

        //OBTENER TODAS LAS PELICULAS CIENCIA FICCION
        $QueryPeliculaCiencia = QuerysEnum::PeliculasCienciaFiccion-> value;
        $resPeliculaCiencia=$conexion->query($QueryPeliculaCiencia);
        $arrayPeliculasCiencia=array();
		while($e=mysqli_fetch_object($resPeliculaCiencia)){
			$arrayPeliculasCiencia[]= $e;
		}

        //OBTENER TODAS LAS PELICULAS COMEDIA
        $QueryPeliculaComedia = QuerysEnum::PeliculasComedia-> value;
        $resPeliculaComedia=$conexion->query($QueryPeliculaComedia);
        $arrayPeliculasComedia=array();
		while($e=mysqli_fetch_object($resPeliculaComedia)){
			$arrayPeliculasComedia[]= $e;
		}

        //OBTENER TODAS LAS PELICULAS DOCUMENTAL
        $QueryPeliculaDocumental = QuerysEnum::PeliculasDocumental-> value;
        $resPeliculaDocumental=$conexion->query($QueryPeliculaDocumental);
        $arrayPeliculasDocumental=array();
		while($e=mysqli_fetch_object($resPeliculaDocumental)){
			$arrayPeliculasDocumental[]= $e;
		}

        //OBTENER TODAS LAS PELICULAS DRAMA
        $QueryPeliculaDrama = QuerysEnum::PeliculasDrama-> value;
        $resPeliculaDrama=$conexion->query($QueryPeliculaDrama);
        $arrayPeliculasDrama=array();
		while($e=mysqli_fetch_object($resPeliculaDrama)){
			$arrayPeliculasDrama[]= $e;
		}

        //OBTENER TODAS LAS PELICULAS INFANTIL
        $QueryPeliculaInfantil = QuerysEnum::PeliculasInfantil-> value;
        $resPeliculaInfantil=$conexion->query($QueryPeliculaInfantil);
        $arrayPeliculasInfantil=array();
		while($e=mysqli_fetch_object($resPeliculaInfantil)){
			$arrayPeliculasInfantil[]= $e;
		}

        //OBTENER TODAS LAS ROMANCE 
        $QueryPeliculaRomance = QuerysEnum::PeliculasRomance-> value;
        $resPeliculaRomance=$conexion->query($QueryPeliculaRomance);
        $arrayPeliculasRomance=array();
		while($e=mysqli_fetch_object($resPeliculaRomance)){
			$arrayPeliculasRomance[]= $e;
		}



        $peliculasCategory= array();

        array_push($peliculasCategory, $arrayPeliculas, $arrayPeliculasAccion,$arrayPeliculasCiencia,$arrayPeliculasComedia,
        $arrayPeliculasDocumental,$arrayPeliculasDrama,$arrayPeliculasInfantil,$arrayPeliculasRomance);

        //echo var_dump($);
        return $peliculasCategory;
      }

      
    
  }


  $filmsByCategory = LoadData::getMoviesData();

//echo var_dump($filmsByCategory);
 
  



  ?>