<?php

$fecha=getdate();
$resultado="hoy es ".$fecha['weekday'].", ".$fecha['mday']." de ".$fecha['month']." de ".$fecha['year'].", y son las ".$fecha['hours'].":".$fecha['minutes']." horas.";

print("<h1> ".$resultado."</h1>");
?>