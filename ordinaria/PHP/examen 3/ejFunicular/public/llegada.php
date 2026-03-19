<?php
require_once 'ConexionBD.php';


if ($_SERVER['REQUEST_METHOD']==='POST'){

$conexion=ConexionBD::getConexion();
try {
    $sql="delete from pasajeros";
//$sql2="update from plazas reservada=0";
$sql2="update plazas set reservada=0";
$stmnt=$conexion->prepare($sql);
$stmnt2=$conexion->prepare($sql2);
$stmnt->execute();
$stmnt2->execute();
echo("cambios realizados con exito");
} catch (\PDOException $th) {
  echo('error: '.$th->getMessage());
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
    <h1>llegada al destino</h1>
    <form action="" method="post">
        <button type="submit" name="confirmarllegada">confirmar llegada</button>
        <a href="index.php">volver</a>
    </form>
</body>
</html>