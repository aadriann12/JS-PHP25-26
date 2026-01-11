<?php
require_once '../conexionBD.php';
function plazasDisponibles(): array {
    $conxion = ConexionBD::getConexion();
    $stmt = $conxion->prepare("SELECT id FROM plazas WHERE ocupada = 0");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_COLUMN);
}

$dni = $_POST['dni'] ?? '';
$nombre = $_POST['nombre'] ?? '';
$plaza = $_POST['plaza'] ?? '';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="reservar.php" method="post">
   dni:<input type="text" name="dni" placeholder="DNI" required>
   <br><br>
   nombre:<input type="text" name="nombre" placeholder="Nombre" required>
   <br><br>
   plaza:<iselect name="plaza" required>
    <option value="">Seleccione plaza</option>
<?php
foreach (plazasDisponibles() as $plazaId) {
    echo "<option value=\"$plazaId\">Plaza $plazaId</option>";
}
?>

   <button type="submit">Reservar</button>
   <li><a href="index.php">Volver al inicio</a></li>
   </form>
¡
</body>
</html>