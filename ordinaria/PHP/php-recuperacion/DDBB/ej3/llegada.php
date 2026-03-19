<?php
use App\ConexionBD;
require_once 'conexionBD.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $conexion = ConexionBD::getConexion();
        $sql = "UPDATE plazas SET reservada=0 ";//vacia todas las plazas
      //borrar pasajeros de la plaza
        $sql2 = "DELETE FROM pasajeros  ";//borrar todos los pasajeros      
         $stmnt = $conexion->prepare($sql);
         $stmnt2 = $conexion->prepare($sql2);
        $stmnt->execute(); 
        $stmnt2->execute();
        echo "¡Llegada registrada con éxito!";
    } catch (PDOException $e) {
        die("Error al registrar la llegada: " . $e->getMessage());
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
<h1> llegada del funicular </h1>
    <form action="llegada.php" method="post">
        <input type="submit" value="llegada">
    </form>    
</body>
</html>