<?php
session_start();
$_SESSION['browser']=$_SERVER['HTTP_USER_AGENT']??'';

$_SESSION['usuario'] = $_POST['usuario']??'';
$user=$_SESSION['usuario'];
  setcookie('usuario',$user,time()+3600);
  $_SESSION['cont']=0;
$_SESSION['password'] = $_POST['password']??'';
$contraseña=$_SESSION['password'];
$contraseñaHasheada=password_hash($contraseña, PASSWORD_BCRYPT);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_SESSION['usuario'] == 'adrian') {
  

    
    setcookie('password',$contraseñaHasheada,time()+3600);//esto no se hace de normal porque no se guardan las contraseñas en cookies, no es seguro
setcookie('times',0,time()+3600);

        header('Location: configuracion.php');
        exit();
    } else {
        echo "Usuario o contraseña incorrectos";
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
    <form action="" method="post">
        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario" id="usuario" placeholder="usuario">
        <br>
        <label for="password">Contraseña:</label>
        <input type="password" name="password" id="password" placeholder="contraseña">
        <br>
        <input type="submit" value="Login">

    </form>
</body>
</html>