<?php

require_once 'ConexionBD.php';


function productos(){
    $conexion=ConexionBD::getConexion();
    $sql="SELECT * FROM productos";
   try {
        $stmt=$conexion->prepare($sql);
        $stmt->execute();
$resultado=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $resultado;
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }   



}
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista de Productos</h1>

    <?php

if ($productos = productos()) {

    foreach ($productos as $producto) {
        echo "<form action='compra.php' method='post'>";
        echo "<p>" . $producto['nombre'] . " - " . $producto['precio'] . "</p><button>Comprar</button><br>";
        echo "<input type='hidden' name='producto_id' value='" . $producto['id'] . "'>";
        echo "</form>";
    }
} else {
    echo "<p>No hay productos disponibles.</p>";
}
?>


</body>
</html>