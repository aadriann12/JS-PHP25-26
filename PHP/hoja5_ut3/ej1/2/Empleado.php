<?php
 class Empleado{

public $sueldo;
public $nombre;
public $apellidos;

public function __construct($sueldo,$nombre,$apellidos) {
    $this->sueldo = $sueldo;
    $this->nombre = $nombre;
    $this->apellidos = $apellidos;
}

 public function getSueldo(){
     return $this->sueldo;
 }












}
 class Encargado extends Empleado{

public function __construct($sueldo,$nombre,$apellidos) {
   parent::__construct($sueldo,$nombre,$apellidos);

}

 public function getSueldo(){
     return $this->sueldo + ($this->sueldo + ($this->sueldo * 0.15));
 }

}

?>