<?php

include 'funcionesBD.php';
$resultado=obtenerLibros();



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

    foreach($resultado as $libro){
         echo "ID: ".$libro['id']."<br>";
         echo "Titulo: ".$libro['titulo']."<br>";
         echo "Año: ".$libro['anio']."<br>";
         echo "Precio: ".$libro['precio']."<br>";
         echo "Fecha Adquisicion: ".$libro['fecha_adquisicion']."<br>";
         echo "<hr>";
    }
    ?>
</body>
</html>