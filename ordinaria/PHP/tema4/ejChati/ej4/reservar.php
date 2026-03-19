<?php
require_once 'ConexionBD.php';




function PlazasNoSeleccionadas(){
$conexion=ConexionBD::getConexion();
$sql = "SELECT * FROM plazas WHERE reservada = 0";
$stmnt=$conexion->prepare($sql);
$stmnt->execute();
$plazas=$stmnt->fetchAll(PDO::FETCH_ASSOC);
return $plazas;




}

// $plazas=PlazasNoSeleccionadas();




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>formulario</h1>
    <form action=""  method="post">

<input  type="text" name="dni"><br>
<input type="text" name="nombre"><br>
<select name="plazas">plazas:

<?php
$plazas=PlazasNoSeleccionadas();
foreach ($plazas as $plaza) {
 echo "<option value=".$plaza['numero'].">".$plaza['numero']."-".$plaza['precio']."</option>";
}
?>

</select>

<button type="submit" value="reservar" name="reservar">Reservar</button>




    </form>
</body>
</html>