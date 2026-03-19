<?php
namespace App;
require_once __DIR__ . '/../vendor/autoload.php';
use App\ConexionBD;
use App\helper;
iniciar_sesion();   

function crearDatosUsuario($email,$contraseña){
    $conexion=ConexionBD::getConexion();
try {
      $sql= "INSERT INTO usuarios (user, password) VALUES (?, ?)";
  $contraseñaHasheada=password_hash($contraseña,PASSWORD_BCRYPT);

    $stmt=$conexion->prepare($sql);
    $stmt->execute([$email,$contraseñaHasheada]);
    return true;
} catch (\PDOException $th) {
 return false;
}
}

?>