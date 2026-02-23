<?php
use App\ConexionBD;
if (estaLogueado()) {
    $conexion=ConexionBD::getConexion();
$email=$_SESSION['email'];
$sql="select id from socios where email=?";
$stmt=$conexion->prepare($sql);
$stmt->execute([$email]);
$id=$stmt->fetchColumn();
    
} else {
    redireccionar("index.php?accion=login");
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
<h1>Bienvenido <?php echo $id ?> </h1>
<a href="index.php?accion=cerrar">Cerrar Sesión</a>

</body>
</html>