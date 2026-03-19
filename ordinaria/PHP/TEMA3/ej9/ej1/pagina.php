<?php 
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // ¡Genial! El usuario envió el formulario.
    // TODO el código de validación y cálculo irá AQUÍ DENTRO.
    $cantidad=$_POST['cantidad'];
$origen=$_POST['origen'];
$destino=$_post['destino'];

$monedasDesc=[];

$monedasTipoCambio = ['euros' => 1, 'dolares' => 1.08, 'libras' => 0.85];
$resultado=[];
$errores=[];

array_push($monedasDesc,($cantidad*(array_find($monedasTipoCambio,$origen)-array_find($monedasTipoCambio,$destino))));
if (empty($errores)) {
    echo("<h1> El resultado es: " . $resultado[0] . " </h1>");
} else {
    foreach ($errores as $error) {
        echo("<h1> Error: " . $error . " </h1>");
    }


}

// }





?>