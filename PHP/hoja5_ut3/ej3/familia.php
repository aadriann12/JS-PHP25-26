<?php

class Familia extends Medico{
protected $num_familiares;
public function __construct($nombre,$edad,$turno,$num_familiares) {
   parent::__construct($nombre,$edad,$turno);
   $this->num_familiares = $num_familiares;




}}

?>