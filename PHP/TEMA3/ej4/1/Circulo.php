<?php
class Circulo{

private $radio;
public function __construct($radio){
   $this->radio=$radio;
}
/*public function setRadio($valor){
    $this->radio=$valor;
}
public function getRadio(){
    return $this->radio;
}*/
public function __set($prop, $valor)
{
    $this->$prop = $valor;
}

public function __get($prop)
{
    return $this->$prop;
}



}










?>