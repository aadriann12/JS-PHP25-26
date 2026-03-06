<?php
namespace App;
function iniciar_sesion():void{
    if (session_status()===PHP_SESSION_NONE) {//si no existe la creo

        session_start();
    }
      

}
 function flash(string $clave,  $mensaje=null): ?string{
if ($mensaje!=null) {
   $_SESSION['flash'][$clave]=$mensaje;
   return $mensaje;
} else {
if (isset($_SESSION['flash'][$clave])) {
    $valor=$_SESSION['flash'][$clave];
    unset($_SESSION['flash'][$clave]);
    return $valor;
} else {
    return null;
}}}


function estaLogueado():bool{
    if (isset($_SESSION['user'])) {
        return true;
    } else {
        return false;
    }
    
}

function redireccionar($url){
    header("Location: $url");
    exit;//IMPORTANTE
}
function esPost():bool{
  return $_SERVER['REQUEST_METHOD']=='POST';
}

?>