<?php
require_once  __DIR__ . '/accesoBD.php';

$titulo = $_POST['titulo'] ?? '';
$año = $_POST['año'] ?? '';
$precio = $_POST['precio'] ?? '';
$fecha_compra = $_POST['fecha_compra'] ?? '';
$pdo = ConexionBD::getConexion();
$stmt = "insert into libros (titulo, anyo_edicion, precio, fecha_adquisicion) values ('$titulo', $año, $precio, '$fecha_compra')";
// $usuarios = $stmt->fetchAll(); // ya es FETCH_ASSOC por defecto
$stmnt=$pdo->prepare($stmt);
$stmnt->execute();
if($stmnt->rowCount()>0){//rowCount devuelve el numero de filas afectadas por la ultima sentencia sql
    echo "Libro insertado correctamente";
} else {
    echo "Error al insertar el libro";
}
// $


?>