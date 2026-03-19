<?php

namespace App;
function iniciarSesion(){
    if(session_status()===PHP_SESSION_NONE){
        session_start();
    
    }
}
function estaLogueado():bool{

if (isset($_SESSION['usuario'])) {
    return true;
} else {
    return false;
}

}



function redireccionar($url){

    header("Location: $url");
    exit();


}

function esPost():bool{
    if ($_SERVER['REQUEST_METHOD']==='POST') {
        return true;
    } else {
        return false;
    }
    
}



function flash($clave, $mensaje=null){

if (isset($_SESSION['flash'][$clave])) {
    $valor= $_SESSION['flash'][$clave];
    unset($_SESSION['flash'][$clave]);
    return $valor;

} else {
$_SESSION['flash'][$clave]=$mensaje;
}



}




?>