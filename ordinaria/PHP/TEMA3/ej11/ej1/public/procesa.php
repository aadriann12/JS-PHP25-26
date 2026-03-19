<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once __DIR__ . '/../vendor/autoload.php';

use App\Clases\AdaptadorGeneradorPassword;

$mayus    = isset($_POST['mayus']);
$minus    = isset($_POST['minus']);
$numeros  = isset($_POST['numeros']);
$simbolos = isset($_POST['simbolos']);
$longitud = (int)($_POST['longitud'] ?? 12);

$adaptador = new AdaptadorGeneradorPassword();
$password = $adaptador->generar($mayus, $minus, $numeros, $simbolos, $longitud);
?>
<!DOCTYPE html>
<html>
<body>
    <h1>Contraseña generada</h1>
    <p><?= htmlspecialchars($password) ?></p>
    <a href="index.php">Volver</a>
</body>
</html>