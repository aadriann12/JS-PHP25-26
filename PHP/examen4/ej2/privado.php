<?php
session_start();

$username=$_SESSION['username'] ?? '';
$correcto=$_SESSION['flash'] ?? '';
   unset($_SESSION['flash']);
if ($username) {
   echo '    <h1> bienvenido ' . htmlspecialchars($correcto) . ' tu username ' . htmlspecialchars($username) . ' </h1>';


}else{
    echo 'no registrado';

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