<?php
require_once __DIR__ . '/Ejercicio1_Empleado.php';
require_once __DIR__ . '/Ejercicio1_Encargado.php';

$empleado = new Empleado('Ana', 1000);
$encargado = new Encargado('Luis', 1000);

echo "Empleado: " . $empleado->getNombre() . " - Sueldo: " . number_format($empleado->getSueldo(), 2) . PHP_EOL;
echo "Encargado: " . $encargado->getNombre() . " - Sueldo: " . number_format($encargado->getSueldo(), 2) . PHP_EOL;

// También se pueden usar en un contexto web:
// echo "Empleado: {$empleado->getNombre()} - Sueldo: " . number_format($empleado->getSueldo(),2) . "<br>";

?>
