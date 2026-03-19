<?php

abstract class Medico{
protected $nombre;
protected $edad;
protected  $turno;




public function __construct($nombre,$edad,$turno) {
    $this->nombre = $nombre;
      $this->edad = $edad;
        $this->turno = $turno;  
  
}


public function mostrar(){
    echo "Nombre: $this->nombre Edad: $this->edad Turno: $this->turno";
}
}
?>