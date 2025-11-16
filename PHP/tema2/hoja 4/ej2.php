<?php



$tabla= array( 
    array("pais","eeuu","uk","japon","china","argentina","australia"),
    array("moneda","dolar","libra","yen","yuan","peso","dolar australiano"),
    array ("cambio",1.1741,0.8734,173.76,8.391,1621.36,1.776)
)
;

print_r($tabla);
echo "\n";
echo "\n";
echo "\n";
for ($i=0; $i < count($tabla[0]); $i++) { 
    echo "El pais es: " . $tabla[0][$i] . "\n";
    echo "La moneda es: " . $tabla[1][$i] . "\n";
    echo "El cambio es: " . $tabla[2][$i] . "\n";
}
echo "\n";
echo "\n";
echo "\n";

$masBajo=1000000;
$masAlto=0;
for ($i=1; $i < count ($tabla[0]); $i++) { 
   if ($tabla[2][$i]>$masAlto) {
$masAlto=$tabla[2][$i];
   } if ($tabla[2][$i]<$masBajo) {
    $masBajo=$tabla[2][$i];
 
   }

}  echo("<br>") ;
  echo("el mas alto es ".$masAlto);
   echo("<br>") ;
     echo("el mas bajo es ".$masBajo);
    echo("<br>") ;
$media=0;
$media=($tabla[2][1]+$tabla[2][2]+$tabla[2][3]+$tabla[2][4]+$tabla[2][5])/5;
echo "La media de los cambios es: " .$media . "\n";
?>
