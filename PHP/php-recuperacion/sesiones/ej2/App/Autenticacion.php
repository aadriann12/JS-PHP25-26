<?php
namespace App;
use App\ConexionBD;
class Autenticacion{
    public static function inicializar(){
        iniciar_sesion();
    }
public static function configurar(){
$email='admin@gym.com';
$contraseña='gym123';
$password=password_hash($contraseña,PASSWORD_BCRYPT);
$conexion=ConexionBD::getConexion();
$sql='insert into socios(email,password) values (?,?)';
$stmnt=$conexion->prepare($sql);
$stmnt->execute([$email,$password]);
if ($stmnt->rowCount()>0) {//importanteeeee
return true;
} else {
    return false;
}


}



public static  function validarEmail($email): bool{
    $conexion=ConexionBD::getConexion();
    $sql='select * from socios where email=?';
    $stmnt=$conexion->prepare($sql);
    $stmnt->execute([$email]);
    if ($stmnt->rowCount()>0) {
        return true;
    } else {
        return false;
    }
      
}
public static function validarContraseña($email,$contraseña): bool{
    $conexion=ConexionBD::getConexion();
    
    $sql="select * from socios where email=?";
    $stmnt=$conexion->prepare($sql);
    $stmnt->execute([$email]);
    $socio=$stmnt->fetch();
    if ($socio) {
        return password_verify($contraseña,$socio['password']);
    } else {
        return false;
    }
}

public  static function login( ){
    if (esPost()) {
        //valido email y contraseña

       if (validarEmail($_POST['email'])) {
 if (validarContraseña($_POST['email'],$_POST['contraseña'])) { 
    $_SESSION['email']=$_POST['email'];
redireccionar("index.php");
 ;
 } else {
flash('error', 'Credenciales no válidas');
flash('email_recuperado', $_POST['email']);
 }
 
       } else {
    flash('error', 'Credenciales no válidas');
    flash('email_recuperado', $_POST['email']);
       }
          
    } else {
        flash('error', 'Credenciales no válidas');
    flash('email_recuperado', $_POST['email']);
    }
    
}

    private static function verificarAcceso(){
    if (isset($_SESSION['email'])) {
      flash('error','no tienes acceso a ver ofertas');
      redireccionar("login.php");
    } 
      
}



}



?>