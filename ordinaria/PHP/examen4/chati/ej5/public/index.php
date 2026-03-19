<?php



session_start();

require_once __DIR__ . '/../vendor/autoload.php';
use App\ConexionBD;
use App\helper;
if (helper::esPost()) {
if (isset($_SESSION['usuario_id'])) {
    helper::redireccionar('privada.php');
} else {
  $username=$_POST['username'];
    $password=$_POST['password'];
    $conexion=ConexionBD::getConexion();
    $sql="SELECT * FROM usuarios WHERE email=?";
    $stmt=$conexion->prepare($sql);
    $stmt->execute([$username]);
    $usuario=$stmt->fetch();
    if (isset($usuario) && password_verify($password,$usuario['password'])) {
        $_SESSION['usuario_id']=$usuario['id'];
        helper::redireccionar('privada.php');
    } else {
        flash('error','Usuario o contraseña incorrectos');
        helper::redireccionar('index.php');
    }
    
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
    <h1>login</h1>
    <form action="index.php" method="Post">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit" name="action" value="login">Login</button>
    </form>
</body>
</html>