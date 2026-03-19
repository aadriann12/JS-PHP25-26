<?php
function nuevoUsuario($nombre){

static $total=0;




$GLOBALS['total'] = $total;

$total++;
}

function saludoSegunHora(){

date_default_timezone_set('Europe/Madrid');
$hora = date("H");
if ($hora>=6&&$hora<=12) {
  echo ("buenos dias");
} else {
   if ($hora>12&&$hora<=20) {
     echo ("buenas tardes");
   } else {
     echo ("buenas noches");
   }

}}

function mostrarResumen(){
$total=$GLOBALS['total'];
    echo("numero de usuarios registrados: ".$total);
    echo("<br>");
    $fecha=date("d/m/Y H:i:s");
    echo("fecha y hora actual: ".$fecha);
    echo("<br>");
    mostrarFecha();



}
echo("usuarios.php");
echo("<br>");
saludoSegunHora();
echo("<br>");
nuevoUsuario("adrian");
nuevoUsuario("maria");
mostrarResumen();
echo("<br>");
?>