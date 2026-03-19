<?php
session_start();
$usuario=   $_SESSION['usuario']??'';
if (isset($_SESSION['usuario'])) {
    echo "Bienvenido a la zona privada, $usuario";
    echo "<br><a href='logout.php'>Cerrar sesion</a>";
} else {
header('Location: login.php');
exit();
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
    
</body>
</html>