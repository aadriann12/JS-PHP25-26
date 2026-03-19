<?php
// PHP comienza aquí

// La superglobal $_POST recoge los datos
$nombre = $_POST['nombre_alumno']; // 'nombre_alumno' es el name del input de texto
$modulo = $_POST['modulo_elegido']; // 'modulo_elegido' es el name del select

echo "<h1>Resultado del Formulario (Método POST)</h1>";
echo "<p>¡Hola, <strong>$nombre</strong>!</p>";
echo "<p>Has elegido matricularte en el módulo de <strong>$modulo</strong>.</p>";
echo "<p>Gracias por usar el método POST. Tus datos no son visibles en la URL.</p>";

// Opcional: Mostrar el array completo para que veas qué contiene
echo "<hr>";
echo "<h2>Contenido completo de \$_POST:</h2>";
print_r($_POST);

// PHP termina aquí
?>