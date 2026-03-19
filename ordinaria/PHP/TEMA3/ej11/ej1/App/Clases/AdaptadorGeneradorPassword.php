<?php
namespace App\Clases;

use App\Interfaces\InterfazGeneradorPassword;
use App\Clases\GeneradorPassword;

class AdaptadorGeneradorPassword implements InterfazGeneradorPassword
{
    public function generar(
        bool $mayus,
        bool $minus,
        bool $numeros,
        bool $simbolos,
        int $longitud
    ): string
    {
        return GeneradorPassword::generarPassword(
            $mayus,
            $minus,
            $numeros,
            $simbolos,
            $longitud
        );
    }
}