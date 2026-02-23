<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $texto=$_POST['texto'];
    $_SESSION['texto']=$texto;    
    $_SESSION['flash']="success"; //esto es para mostrar un mensaje de exito en la siguiente pagina, se llama flash porque solo dura una vez, se muestra una vez y luego se borra
    //creo cookie
   setcookie('cookie', 'mola', time() + 3600); // La cookie expirará en 1 hora

    //vamos al siguiente
    header('Location: funciona.php');


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
    <form action="index.php" method="POST">
        <input type="text" name="texto" >
        <input type="submit" value="Enviar">
</body>

</html>