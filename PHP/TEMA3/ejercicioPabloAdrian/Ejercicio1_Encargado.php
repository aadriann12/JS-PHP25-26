<?php
require_once __DIR__ . '/Ejercicio1_Empleado.php';

class Encargado extends Empleado {
    public function __construct($nombre, $sueldoBase) {
        parent::__construct($nombre, $sueldoBase);
    }

    // Sobrescribe getSueldo para aplicar un 15% más
    public function getSueldo() {
        return parent::getSueldo() * 1.15;
    }
}

?>
