<?php


namespace App;
use App\ConexionBD;
use App\helper;
 require_once __DIR__ . '/../vendor/autoload.php';

function autenticar(){
    if(esPost()){
    $email=$_POST['email'];
    $contraseña=$_POST['contraseña'];
    

    }else{
        flash('error', 'No es un post');
        redireccionar('index.php');
        
    }
}


?>