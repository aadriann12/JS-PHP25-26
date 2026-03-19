<?php

$precio = "19.99€";
$iva = 21;
$descuento = true;


settype($precio, 'float');
$precioConIva=$precio*$iva/100+$precio;
$preciototal= $descuento===true ? $precioConIva-($precioConIva*(10/100)):  $precio;
$fecha=getdate();

echo("precio base: ".$precio."<br>". "precio con iva: ".$precioConIva."<br>". "precio total: ".$preciototal."<br>"."precio aplicado:".($descuento===true?"si":"no")."<br>"."fecha: ".$fecha['weekday']."/".$fecha['mday']."/".$fecha['year']);