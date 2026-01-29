<?php
declare(strict_types=1);



function iniciar_sesion(){
    if (session_status()===PHP_SESSION_NONE) {
        session_start();
    } 
    
}
function esPost(): bool {

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        return true;
    } else {
        return false;
    }
    
}

function flash(string $clave, ?string $mensaje = null): ?string {
    iniciar_sesion();
if ($mensaje !== null) {

$_SESSION['flash'][$clave] = $mensaje;
   return null;
} else {
if (isset($_SESSION['flash'][$clave])) {
    $valor = $_SESSION['flash'][$clave];
    unset($_SESSION['flash'][$clave]);
    return $valor;
} else {
    return null;
}

}

}


function redireccionar(string $url): void {
    header("Location: $url");
    exit();
}
function estaLogueado(){

    if (isset($_SESSION['usuario_id'])) {
        return true;
    } else {
        return false;
    }
    
}

?>
