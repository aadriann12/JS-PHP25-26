<?php
require_once 'ConexionBD.php';

function obtenerPlazas(){
$conexion=ConexionBD::getConexion();
$sql="SELECT numero,precio,reservada from plazas where reservada=0";
try {
    $stmnt=$conexion->prepare($sql);
$stmnt->execute();
return $stmnt->fetchAll(\PDO::FETCH_ASSOC);
} catch (\PDOException $th) {
    echo("error: " .$th->getMessage());
    return [];
}

}


if ($_SERVER['REQUEST_METHOD']==='POST') {
  foreach($_POST['precio'] as $numero => $precioNuevo) {

    $conexion=ConexionBD::getConexion();
   $sql="UPDATE plazas set precio=? where numero=?";

   
$stmnt=$conexion->prepare($sql);
$stmnt->execute([$precioNuevo,$numero]);







  }
  echo('enviado');
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
    <h1>gestion de plazas</h1>
    <form action="" method="post">
<table>
    <tr>
<th>
    plaza
</th>
<th>
    reservada
</th>
<th>
    precio
</th>
</tr>
<?php
$plazas=obtenerPlazas();

foreach ($plazas as $plaza) {
    echo "<tr>";
    echo "<td>{$plaza['numero']}</td>";
echo "<td>" . ($plaza['reservada'] == 1 ? 'si' : 'no') . "</td>";    
echo "<td> <input type='text' name='precio[{$plaza['numero']}]' value='{$plaza['precio']}'></td>";
    echo "</tr>";
}

?>
</table>
        <button type="submit" name="enviar">enviar</button>
        <a href="index.php">volver</a>
</body>
</html>