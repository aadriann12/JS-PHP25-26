<?php
namespace App\Interfaces;
interface InterfazGeneradorPassword {



    public function generar(
        bool $mayus,
        bool $minus,
        bool $numeros,
        bool $simbolos,
        int $longitud
    ): string;



}
?>