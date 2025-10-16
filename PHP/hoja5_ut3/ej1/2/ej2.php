<?php


class cuenta{
protected $numero;
protected $titular;
protected $saldo;


public function __construct($numero,$titular,$saldo) {
    $this->numero = $numero;
      $this->titular = $titular;
        $this->saldo = $saldo;
}


 function ingreso ($cantidad){
$this->saldo=$this->saldo+$cantidad;




}
function reintegra ($cantidad){
if ($this->saldo>=$cantidad) {
   $this->saldo=$this->saldo-$cantidad;
} else {
 echo("no hay suficiente dinero ");
}





}


function esPreferencial($cantidad){
    if ($this->saldo>=$cantidad) {
   return true;
    } else {
     return false;
    }
    
}
function mostrar(){


echo("numero: ".$this->numero." titular: ".$this->titular." saldo: ".$this->saldo);

}


}
class cuentaCorriente extends Cuenta{
protected $cuota_mantenimiento;


public function __construct($numero,$titular,$saldo,$cuota_mantenimiento) {
    $this->cuota_mantenimiento = $cuota_mantenimiento;
    $this->saldo=$this->saldo-$this->cuota_mantenimiento;
    parent::__construct($numero,$titular,$saldo);
}
    function reintegra ($cantidad){
if ($this->saldo>20) {
    $this->saldo=$this->saldo-$cantidad;
} else {
   echo("saldo inferior a 20");

}




    }
function mostrar(){
    echo("numero: ".$this->numero." titular: ".$this->titular." saldo: ".$this->saldo." cuota de mantenimiento: ".$this->cuota_mantenimiento);
}




}


class CuentaAhorro extends Cuenta{
protected $comision_apertura;
protected $intereses;

public function __construct($numero,$titular,$saldo,$comision_apertura,$intereses) {
  $this->comision_apertura=$comision_apertura;
  $this->intereses=$intereses;
    $this->saldo=$this->saldo-$this->comision_apertura;
    parent::__construct($numero,$titular,$saldo);

}
function aplicaIntereses(){
$this->saldo=$this->saldo+($this->saldo*($this->intereses/100));
}
function mostrar(){
    echo("numero: ".$this->numero." titular: ".$this->titular." saldo: ".$this->saldo." comision de apertura: ".$this->comision_apertura." intereses: ".$this->intereses);




}}
$cuentaAhorro = new cuentaAhorro("12345","juan",1000,10,5);
$cuentaAhorro->aplicaIntereses();
$cuentaAhorro->mostrar();


?>