<?php 
$array=["u2"=>["vocalista"=>"bono","musicos"=>"the edge, adam...","enlace"=>"volver.jpg"],
"led zeppelin"=>["vocalista"=>"robert plant","musicos"=>"jimmy, john","enlace"=>"tristana.jpg"]];











?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cantanrtes</title>
</head>
<body>
    <h1>cantantes<h2>
    <form src="" action="get">

<select id="array"name="marca">
    <?php 
foreach ($array as $key => $modelos) {

    echo "<option value='$key'>$key</option>";
 }   ?>





</select>




    </form>
</body>
</html>