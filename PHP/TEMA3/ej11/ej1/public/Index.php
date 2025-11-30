<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Generador de Contraseñas</title>
</head>
<body>
    <h1>Generador de Contraseñas</h1>

    <form method="post" action="procesa.php">
        <label>Longitud:</label>
        <input type="number" name="longitud" min="4" max="16" value="12"><br>

        <label><input type="checkbox" name="mayus"> Mayúsculas</label><br>
        <label><input type="checkbox" name="minus"> Minúsculas</label><br>
        <label><input type="checkbox" name="numeros"> Números</label><br>
        <label><input type="checkbox" name="simbolos"> Símbolos</label><br>

        <input type="submit" value="Generar Password">
    </form>
</body>
</html>