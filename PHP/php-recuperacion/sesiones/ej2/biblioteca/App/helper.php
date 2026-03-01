<?php

function iniciar_sesion(){
   session_start();//()
}
function flash($clave,$mensaje=null):?string{
    if ($mensaje!=null) {
     $_SESSION['flash'][$clave]=$mensaje;   
return null;
    } else {
       if(isset($_SESSION['flash'][$clave])){
        $mensaje=$_SESSION['flash'][$clave];
        unset($_SESSION['flash'][$clave]);//eliminaaaa
        return $mensaje;
       } else {
           return null;
       }
       
    }
    
}


function estaLogueado():bool{
if (isset($_SESSION['email'])) {
    return true;
} else {
    return false;
}

}

function redireccionar($url){
    header('Location: '.$url);
    exit;
}
function esPost(){
    return $_SERVER['REQUEST_METHOD']=='POST';
}








?>