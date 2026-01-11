<?php
declare(strict_types=1);

final class ConexionBD
{
    private static ?PDO $instancia = null;

    private function __construct() {}
    private function __clone() {}

    public static function getConexion(): PDO
    {
        if (self::$instancia instanceof PDO) {
            return self::$instancia;
        }

        // Ajusta esto a tu entorno
        $host    = 'localhost';
        $dbName  = 'prueba';
        $user    = 'root';
        $pass    = '';
        $charset = 'utf8mb4';

        $dsn = "mysql:host={$host};dbname={$dbName};charset={$charset}";

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
                1045 => 'Acceso denegado: usuario/contraseña (1045)',
                2002 => 'Servidor/host no accesible (2002)',
                default => 'Error de conexión: ' . $e->getMessage(),
            };

            // En examen está bien, en producción no mostrar detalles
            throw new RuntimeException($msg, (int)$e->getCode(), $e);
        }
    }
}