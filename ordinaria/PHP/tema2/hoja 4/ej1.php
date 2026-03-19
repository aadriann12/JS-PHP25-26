<?php
$cadena=array(
array("comunidad","andalucia","aragon","asturias","baleares","canarias","cantabria","castilla la mancha","castilla y leon","cataluña","comunidad valenciana","extremadura","galicia","madrid","murcia","navarra","pais vasco","rioja"),
array("numero de alumnos",593,600,582,489,573,551,645,555,568,561,584,600,613,564,638,637,562,539,569),
array("porcentaje de escolarizacion por 1000 habitantes",0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0)
);


echo "\n";
echo"<br>";
for ($i=1; $i <= count($cadena[1])-1; $i++) { 
    $cadena[2][$i]=($cadena[1][$i]*100)/1000;
}
$numeroMayor=max($cadena[2]);
$numeroMenor=min($cadena[2]);

print_r($cadena);




?>