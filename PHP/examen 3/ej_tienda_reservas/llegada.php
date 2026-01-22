<?php
require_once 'ConexionBD.php';
function marcarLlegada(){

$conexion = ConexionBD::getConexion();
$sql="delete from reservas";
$sql2="update productos set reservado=0";
try {
    $conexion->beginTransaction();
    $stmnt = $conexion->prepare($sql);
    $stmnt2 = $conexion->prepare($sql2);
    $stmnt->execute();
    $stmnt2->execute();
    $conexion->commit();
    echo "llegada marcada con exito";
} catch (\PDOException $th) {
   echo "error al marcar llegada: ".$th->getMessage();
    $conexion->rollBack();
}


}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    marcarLlegada();
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
    <form action="" method="post">
        <h1>marcar llegada</h1>
    
        <br><br>
        <input type="submit" value="Marcar Llegada">
    </form>
</body>
</html>