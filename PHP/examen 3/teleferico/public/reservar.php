<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/../vendor/autoload.php';

use App\Clases\ConexionBD;

function obtenerPlazas(): array {
    $conexion = ConexionBD::getConexion();
    $sql = "SELECT numero, precio FROM cabinas WHERE ocupada = 0";

    try {
        $stmt = $conexion->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "ERROR SQL: " . $e->getMessage();
        return [];
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Reservar</title>
</head>
<body>
  <h1>Reservar plaza</h1>

  <form method="post">
    <input type="text" name="nombre" placeholder="tu nombre"><br><br>
    <input type="text" name="dni" placeholder="tu DNI"><br><br>

    <select name="plaza">
      <?php
        $plazas = obtenerPlazas();
        foreach ($plazas as $plaza) {
            echo "<option value='{$plaza['numero']}'>Plaza {$plaza['numero']} - {$plaza['precio']}€</option>";
        }
      ?>
    </select>

    <br><br>
    <button type="submit">Reservar</button>
  </form>
</body>
</html>