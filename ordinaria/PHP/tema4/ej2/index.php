<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>inserte los datos de los libros </h1>
    <form action="procesar.php" method="post">
<input type="text" name="titulo" placeholder="Titulo del libro" required><br>
<input type ="number" name="año" placeholder="Año de publicación" required><br>
<input type="number" name="precio" placeholder="Precio del libro" required><br>
<input type="date" name="fecha_compra" placeholder="Fecha de compra" required><br>
<input type="submit" value="Enviar">            



    </form>
    
</body>
</html>