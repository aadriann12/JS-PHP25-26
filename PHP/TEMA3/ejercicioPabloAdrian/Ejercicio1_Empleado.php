<?php
class Empleado {
    private $nombre;
    private $sueldoBase;

    public function __construct($nombre, $sueldoBase) {
        $this->nombre = $nombre;
        $this->sueldoBase = $sueldoBase;
    }

    // Nombre del empleado (acceso de sólo lectura)
    public function getNombre() {
        return $this->nombre;
    }

    // Método que devuelve el sueldo base (puede ser sobrescrito)
    public function getSueldo() {
        return $this->sueldoBase;
    }
}

?>
