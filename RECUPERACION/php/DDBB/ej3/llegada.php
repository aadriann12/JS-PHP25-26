<?php



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "<h2>Gracias por su reserva</h2>";
} else {
    echo "<h2>Realice su reserva</h2>";
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
<h1> llegada del funicular </h1>
    <form action="llegada.php" method="post">
        <input type="submit" value="llegada">
    </form>    
</body>
</html>