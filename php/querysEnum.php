
<?php


enum QuerysEnum: string {
    case Peliculas = "select * from peliculas  order by NombrePelicula";
    case PeliculasAccion = "select * from peliculas where Genero = \"Accion\" order by NombreArchivo asc;";
    case PeliculasCienciaFiccion = "select * from peliculas where Genero = \"Ciencia Ficcion\" order by NombreArchivo asc;";
    case PeliculasComedia ="select * from peliculas where Genero = \"Comedia\" order by NombreArchivo asc;";
    case PeliculasDocumental = "select * from peliculas where Genero = \"Documental\" order by NombreArchivo asc;";
    case PeliculasDrama = "select * from peliculas where Genero = \"Drama\" order by NombreArchivo asc;";
    case PeliculasInfantil ="select * from peliculas where Genero = \"Infantil\" order by NombreArchivo asc;";
    case PeliculasRomance = "select * from peliculas where Genero = \"Romance\" order by NombreArchivo asc;";
    
}