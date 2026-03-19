<?php
namespace App\Clases;

use Hackzilla\PasswordGenerator\Generator\ComputerPasswordGenerator;

class GeneradorPassword
{
    public static function generarPassword(
        bool $mayus,
        bool $minus,
        bool $numeros,
        bool $simbolos,
        int $longitud
    ): string
    {
        $generator = new ComputerPasswordGenerator();

        $generator->setOptionValue(ComputerPasswordGenerator::OPTION_UPPER_CASE, $mayus);
        $generator->setOptionValue(ComputerPasswordGenerator::OPTION_LOWER_CASE, $minus);
        $generator->setOptionValue(ComputerPasswordGenerator::OPTION_NUMBERS, $numeros);
        $generator->setOptionValue(ComputerPasswordGenerator::OPTION_SYMBOLS, $simbolos);

        $generator->setLength($longitud);

        return $generator->generatePassword();
    }
}