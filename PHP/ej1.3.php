<?php

function letraComienzaCon($cadena,$letra){
    if (str_starts_with($cadena, $letra)) {
        echo("si comienza por ".$letra);
    } else {
        echo("no comienza por ".$letra);
    }
    
}



?>

