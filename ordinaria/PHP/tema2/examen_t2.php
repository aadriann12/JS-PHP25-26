<?php
date_default_timezone_set('Europe/Madrid');

echo("<h1>estado de la inscripcion para el evento DWES </h1>");
$StrFechaEvento="2025-11-26";
$strFechaFinOferta="2025-11-10";

$fechaActual=date("Y-m-d");
$timestampActual=strtotime($fechaActual);//este le cambio para cada prueba, pero por defecto he dejado el actual, ara que sea lo mas correcto



$timestampfechaEvento=strtotime($StrFechaEvento);
$timestampfechaFinOferta=strtotime($strFechaFinOferta);

$fechaEvento=date("Y-m-d",$timestampfechaEvento);
$fechaFinOferta=date("Y-m-d",$timestampfechaFinOferta);

$fechaEventoD=getdate($timestampfechaEvento);
$fechaFinEventoD=getdate($timestampfechaFinOferta);


echo("el evento se celebrara el ".$fechaEventoD["weekday"].", ".$fechaEventoD["mday"]." of ".$fechaEventoD["month"]." of ".$fechaEventoD["year"]);
echo("<br>");
echo("la oferta finaliza el ".$fechaFinEventoD['year']."-".$fechaFinEventoD['mon']."-".$fechaFinEventoD['mday']);
echo("<br>");
//echo($fechaFinOferta);//otra opcion de mostrarlo;
echo("<br>");
echo("--------------------------------------------------------------------------------------------------------------------");
echo("<br>");
echo("<h2>estado actual: </h2>");

$textoSiEstaActiva="aun estas a tiempo! <br> La oferta de compra anticipada esta activa. quedan ".((String)((int)(($timestampfechaFinOferta-$timestampActual)/60/60/24))." dias para que finalice");
$ofertaActiva=$timestampActual<$timestampfechaFinOferta? $textoSiEstaActiva : ($timestampActual<$timestampfechaEvento? "la oferta de compra anticipada ha terminado <br> pero aun puedes comprar las entradas a precio normal":"Lo siento, este evento ya ha terminado");

echo($ofertaActiva);
echo("<br>");
?>