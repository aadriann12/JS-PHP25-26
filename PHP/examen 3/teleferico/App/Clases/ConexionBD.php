<?php
declare(strict_types=1);
namespace App\Clases;

use PDO;
use PDOException;
use RuntimeException;

final class ConexionBD
{
    private static ?PDO $instancia = null;

    // Evita new ConexionBD()
    private function __construct() {}

    // Evita clonación
    private function __clone() {}

    public static function getConexion(): PDO
    {
        if (self::$instancia instanceof PDO) {
            return self::$instancia;
        }

        // Configuración de la base de datos
        $host    = 'localhost';
        $dbName  = 'dwes_teleferico'; // cambia si hace falta
        $user    = 'root';
        $pass    = '';
        $charset = 'utf8mb4';

        $dsn = "mysql:host=$host;dbname=$dbName;charset=$charset";

        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];

        try {
            self::$instancia = new PDO($dsn, $user, $pass, $options);
            return self::$instancia;
        } catch (PDOException $e) {
            // Mensajes típicos útiles en examen
            $msg = match ((int)$e->getCode()) {
                1049 => 'Base de datos no encontrada (1049)',
                1045 => 'Acceso denegado: usuario o contraseña incorrectos (1045)',
                2002 => 'No se puede conectar al servidor de base de datos (2002)',
                default => 'Error de conexión: ' . $e->getMessage(),
            };

            // En examen está bien lanzar el error
            throw new RuntimeException($msg, (int)$e->getCode(), $e);
        }
    }
}