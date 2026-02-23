<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
    if (isset($_SESSION['texto'])) {
        echo "<h1>El texto ingresado es: " . $_SESSION['texto']
        . "</h1>";
        echo "<h2>La cookie es: " . $_COOKIE['cookie'] . "</h2>";
        //borro la sesion
        session_destroy();
        setcookie('cookie', '', time() - 3600);//asi se borra una cookie, poniendole un tiempo negativo
if ($_SESSION['flash'] === "success") {
    echo "<h2>La operación se realizó con éxito.</h2>";
    unset($_SESSION['flash']);
} else {
    echo "<h2>Hubo un error en la operación.</h2>";
}

    }

    ?>
    <a href="index.php">Volver</a>
</body>
</html>