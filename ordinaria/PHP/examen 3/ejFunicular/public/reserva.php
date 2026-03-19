<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
require_once 'ConexionBD.php';

$dni=$_POST['dni']??'';
$nombre=$_POST['nombre']??'';
$plaza=$_POST['plaza']??'';

function obtenerPlazas(){
$conexion=ConexionBD::getConexion();
$sql="SELECT numero,precio from plazas where reservada=0";
try {
    $stmnt=$conexion->prepare($sql);
$stmnt->execute();
return $stmnt->fetchAll(\PDO::FETCH_ASSOC);
} catch (\PDOException $th) {
    echo("error: " .$th->getMessage());
    return [];
}

}

if ($_SERVER['REQUEST_METHOD']==='POST' && isset($_POST['reservar'])) {//isset para boton submit
if ($dni!='' && $nombre!='' && $plaza!='') {
$conexion=ConexionBD::getConexion();
try {
    $sql="INSERT INTO pasajeros (dni,nombre,plaza) VALUES (?,?,?)";
    $stmnt=$conexion->prepare($sql);
    $stmnt->execute([$dni,$nombre,$plaza]);
    echo("reserva realizada con exito");
} catch (\PDOException $th) {
    echo("error: " .$th->getMessage());
}

} else {
 echo("debes rellenar todos los campos");
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
    <h1>reservar Plaza </h1>


    <form action="" method="post">
dni:<input type="text" name="dni" ><br>
nombre:<input type="text" name="nombre" ><br>
plaza:<select name="plaza" id="plaza">
    <?php
    $plazas=obtenerPlazas();
foreach ($plazas as $plaza ) {

echo "<option value='{$plaza['numero']}'>
        {$plaza['numero']} - {$plaza['precio']} €
      </option>";}




?>
</select>
<button type="submit" name="reservar">reservar</button>
<a href="index.php">volver</a>



</form>
</body>
</html>