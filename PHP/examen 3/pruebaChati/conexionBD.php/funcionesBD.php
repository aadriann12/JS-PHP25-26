<?php

require 'conexionBD.php';
$conexion= ConexionBD::getConexion();
function insertarLibro(string $titulo, int $anio, float $precio, string $fecha): bool{
   global $conexion;
$sql="insert into libros  (titulo, anio, precio, fecha_adquisicion) values (?, ?, ?, ?)";
$stmnt=$conexion->prepare($sql);
$stmnt->execute([$titulo, $anio, $precio, $fecha]);
return $stmnt->rowCount()===1;



}
function obtenerLibros(): array{
    global $conexion;
   $sql="select * from libros";
   $stmnt=$conexion->prepare($sql);
   $stmnt->execute();
   return $stmnt->fetchAll(PDO::FETCH_ASSOC);
}

?>