<?php
session_start();
  $_COOKIE['times']=$_COOKIE['times']+1;
  $_SESSION['cont']++;
if (isset($_SESSION['usuario'])) {
  $user=$_SESSION['usuario'];

$contraseña=$_SESSION['password']??'';
$contraseñaHasheada=password_hash($contraseña,PASSWORD_BCRYPT);
$sonIguales=password_verify('123',$contraseñaHasheada)? 'si':'no';

echo ("Bienvenido, $user, TU CONTRASEÑA HASHEADA ES: $contraseñaHasheada<br> tu contraseña normal es $contraseña<br> son iguales? $sonIguales<br> has visitado la pagina ".$_SESSION['cont']." veces, con cookies".$_COOKIE['times']."veces <br>"."navegador:".$_SESSION['browser']); //cada vez que recargas la pagina aumenta en 1 el contador de visitas
if ($_SERVER['REQUEST_METHOD']=='POST') {
   
unset( $_SESSION['usuario']);
unset( $_SESSION['password']);
unset( $_COOKIE['usuario']);
unset( $_COOKIE['password']);
unset( $_COOKIE['times']);
header('Location: login.php');
    exit() ;
}

} else {
 header('Location: login.php');
    exit() ;



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
        <input type="submit" value="logout">
    </form>
</body>
</html>