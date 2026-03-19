<?php
require_once "ConexionBD.php";

$clases=[];
function cargarClases():array{
  $conexion=ConexionBD::getConexion();
  $sql="select id, nombre from clases";
  $stmnt=$conexion->prepare($sql);
  $stmnt->execute();
  $clases=$stmnt->fetchAll(PDO::FETCH_ASSOC);
  return $clases;
}
function guardarReserva($dni,$nombre,$fecha,$clase){


   try {
    $conexion=ConexionBD::getConexion();
    $sql="call sp_reservar_clase(?,?,?,?)";
    $stmnt=$conexion->prepare($sql);
    $stmnt->execute([$dni,$nombre,$clase,$fecha]);
    echo "Reserva guardada correctamente.";
   } catch (PDOException $th) {
    echo "Error al guardar la reserva: " . $th->getMessage();
   }
    
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $dni=$_POST['dni'] ?? null;
    $nombre=$_POST['nombre'] ?? null;
    $fecha=$_POST['fecha'] ?? null;
    $clase=$_POST['clases'] ?? null;
    guardarReserva($dni,$nombre,$fecha,$clase);
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
    <h1> formulario reserva</h1>
    <form action="" method="post">
        dni:<input type="text" name="dni" placeholder="DNI" required><br>
        nombre:<input type="text" name="nombre" placeholder="Nombre" required><br>
        fecha reserva:<input type="date" name="fecha" required><br>
        clases:
        <select name="clases" required>
            <?php
            $clases=cargarClases();
foreach ($clases as $clase ) {
    echo "<option value='".htmlspecialchars($clase['id'])."'>".htmlspecialchars($clase['nombre'])."</option>";
}
            ?>
</select><br>
<button type="submit" action="" >Reservar</button>
    </form>



</body>
</html>