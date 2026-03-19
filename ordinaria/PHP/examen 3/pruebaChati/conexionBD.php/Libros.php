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
    <form method="post" action="libros_guardar.php">
      Titulo:  <input type="text" name="titulo" ><br>

      Año:     <input type="number" name="anio" >
      <br>
      precio:  <input type="number" step="0.01" name="precio" >
        <br>
        fecha adquisicion:  <input type="date" name="fecha_adquisicion" >
        <br>
      <input type="submit" value="Guardar">

    </form>
</body>
</html>