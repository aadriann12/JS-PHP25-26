<?php
namespace public;
require_once __DIR__ . '/../vendor/autoload.php';
use App\Autenticacion;

$accion=$_GET['accion']??'login';
switch ($accion) {
    case 'login':
        Autenticacion::login();
        break;
    case 'cerrar':
        Autenticacion::cerrar();
        break;
    case 'paginaConectado':
        Autenticacion::paginaConectado();
        break;
    default:
        Autenticacion::paginaConectado();
        break;
}




?>