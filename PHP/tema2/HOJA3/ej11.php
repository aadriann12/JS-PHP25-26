<?php
function sonIguales($cadena1,$cadena2){
$cadena1=strtolower($cadena1);
$cadena2=strtolower($cadena2);
if (strcmp($cadena1,$cadena2)==0) {
    echo "iguales";
} else {
 echo "no iguales";
}




}
?>