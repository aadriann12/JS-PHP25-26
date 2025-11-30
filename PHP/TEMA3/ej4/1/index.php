<?php


require 'Circulo.php';

$c = new Circulo(10);
echo("hola");
echo $c->radio;   // __get → 10
$c->radio = 25;    // __set
echo $c->radio;   // 25

?>
