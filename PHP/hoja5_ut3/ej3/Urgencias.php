<?php

class Urgencias extends Medico{
protected $unidad;
public function __construct($nombre,$edad,$turno,$unidad) {
   parent::__construct($nombre,$edad,$turno);
   $this->unidad = $unidad;





}}

?>