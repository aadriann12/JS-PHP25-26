<?php
require_once 'ejercicio8.html';
$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];
$operacion=$_POST['operacion'];
$RESULTADO; 
switch ($operacion) {
    case 'suma':
   $RESULTADO = $numero1+$numero2;
        break;
       case 'resta':
   $RESULTADO = $numero1-$numero2;
        break;
       case 'multiplicacion':
   $RESULTADO = $numero1*$numero2;
        break;
       case 'division':
   $RESULTADO = $numero1/$numero2;
        break;
    
 
}


?>

<h2>El resultado de la operacion es: <?php echo $RESULTADO; ?></h2>