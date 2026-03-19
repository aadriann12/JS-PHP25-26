<?php
include_once 'ConexionBD.php';
$conexion= ConexionBD::getConexion();
function insertarPelicula( string $titulo, string $director, int $anio, float $precio, string $fecha): bool{



    global $conexion;
    $sql="insert into peliculas (titulo, director, anio, precio, fecha_alquiler) values (?, ?, ?, ?, ?)";
    $stmnt=$conexion->prepare($sql);
    $stmnt->execute([$titulo, $director, $anio, $precio, $fecha]);
    return $stmnt->rowCount()===1;

}
function obtenerpeliculas(): array{
    global $conexion;
  
   $sql=("select * from peliculas");
$stmnt=$conexion->prepare($sql);
$stmnt->execute();
return $stmnt->fetchAll(PDO::FETCH_ASSOC);
}   




?>