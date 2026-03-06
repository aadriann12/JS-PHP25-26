<?php
use App\ConexionBD;
use PhpParser\Node\Stmt\TryCatch;

use function Symfony\Component\Translation\t;

require_once 'conexionBD.php';



function plazasDisponibles(): array {   
         $sql = "SELECT numero FROM plazas WHERE reservada=0";

    try {
        $conexion = ConexionBD::getConexion();
        $stmnt = $conexion->prepare($sql);
        $stmnt->execute();
        return $stmnt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        die("Error al obtener las plazas disponibles: " . $e->getMessage());
    }
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>reservar plaza</h1>
    <form  action ="reserva.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <br><br>        <label for="dni">DNI:</label>

      <input type="text" id="dni" name="dni" required>
        <br><br>
         <label for="plaza">Número de plaza:</label>
         <select name="plaza" id="plaza" required> 
            <?php foreach (plazasDisponibles() as $plaza) { ?>
                <option value="<?= $plaza['numero'] ?>"><?= $plaza['numero'] ?></option>
            <?php } ?>
        </select>
        <input type="submit" value="Reservar">
</body>
</html>