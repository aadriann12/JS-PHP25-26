<?php 
$coches = [
    "Seat" => [
        "Ibiza",
        "León",
        "Ateca"
    ],

    "Renault" => [
        "Clio",
        "Megane",
        "Twingo"
    ],

    "Toyota" => [
        "Corolla",
        "Yaris",
        "RAV4"
    ]
];







?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>coches</h1>
   <form action="" method="POST">
    <label for="marca">Marca:</label>
    <select name="marca" id="marca">
        <?php 
        
foreach ($coches as $key => $modelos) {

    echo "<option value='$key'>$key</option>";
}

?>

    </select>
<input type="submit" name="ver_modelos" value="Ver Modelos">
   </form> 
<?php 
if(isset ($_POST["ver_modelos"])){
echo("<table border=1>"); // Inicio de la tabla


echo("    <tr>                  <!-- Fila 1 -->
        <th>*</th>       <!-- Cabecera -->
        <th>Nombre</th>   <!-- Cabecera -->
    </tr>");
    $marcaSeleccionada = $_POST["marca"];        // Renault, Seat, Toyota
$modelos = $coches[$marcaSeleccionada];     // array de modelos de esa marca
$indice=0;
foreach ($modelos as $modelo) {
    // echo $modelo;




    echo ("    <tr>                  <!-- Fila 2 -->
        <td>".($indice+1)."</td>        <!-- Celda -->
        <td>$modelo</td>    <!-- Celda -->");
        $indice++;
}

echo("</table>");



}

?>

</body>
</html>