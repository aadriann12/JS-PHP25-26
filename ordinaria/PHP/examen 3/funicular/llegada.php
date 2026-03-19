<?php
require_once 'conexionBD.php';

function confirmarllegada(): bool {
$conxion=ConexionBD::getConexion();

$pdo->beginTransaction();
$stmt1 = $conxion->prepare("DELETE FROM reservas");
$stmt2 = $conxion->prepare("UPDATE plazas SET ocupada = 0");

$stmt1->execute();
if ($stmt1->rowCount()>0) {
    // Reservas eliminadas
} else {
   return false;
}

$stmt2->execute();
if ($stmt2->rowCount()>0) {
    // Plazas liberadas
} else {
   return false;
}

$conxion->commit();
return true;
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>llegada</title>
</head>
<body>
    <h1>Llegada al destino</h1>
    <p>al confirmar la llegada se eliminaran los pasajeros y se liberaran todas las plazas.</p>
    <form action="" method="post">
        <button type="submit">Confirmar llegada</button>
    </form>
</body>
</html>