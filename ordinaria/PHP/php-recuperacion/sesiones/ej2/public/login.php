<?php
iniciar_sesion();
if (estaLogueado()) {
    redireccionar("index.php?accion=paginaConectado");
}
$flash=flash('error');
$email=flash('email_recuperado');







?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
if($error){
    echo "<p>$error</p>";
}
?> 
<body>
    <form action="index.php?accion=login" method="post">
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <label for="contraseña">Contraseña</label>
        <input type="password" name="contraseña" id="contraseña">
        <input type="submit" value="Login">
    </form>
</body>
</html>