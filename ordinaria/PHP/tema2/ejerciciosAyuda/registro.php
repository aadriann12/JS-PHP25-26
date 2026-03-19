<?php
function operacion($a, $b, $tipo) {
    $a = (float) $a;
    $b = (float) $b;

    switch ($tipo) {
        case 'suma':
            return "Resultado ({$tipo}): " . ($a + $b);
        case 'resta':
            return "Resultado ({$tipo}): " . ($a - $b);
        case 'multiplicacion':
            return "Resultado ({$tipo}): " . ($a * $b);
        case 'division':
            if ($b == 0) {
                return "Error: división por 0";
            }
            return "Resultado ({$tipo}): " . ($a / $b);
        default:
            return "Tipo incorrecto";
    }
}

echo "<p>" . operacion(8, 2, 'suma') . "</p>";

function contadorOperaciones(){

static $total=0;

echo("numero de operaciones realizadas: ".$total);


}
function mostrarFecha(){
    // Asegura la zona horaria correcta (España)
    date_default_timezone_set('Europe/Madrid');
    // Fecha y hora actual en formato dd/mm/YYYY HH:MM:SS
    $fecha = date("d/m/Y H:i:s");
    echo "Fecha y hora actual: $fecha<br>";
}
?>
