<?php
declare(strict_types=1);

final class ConexionBD
{
    private static ?PDO $instancia = null;

    // Evita new ConexionBD()
    private function __construct() {}

    // Evita clonación
    private function __clone() {}

    /**
     * Devuelve UNA única conexión PDO (Singleton).
     */
    public static function getConexion(): PDO
    {
        if (self::$instancia instanceof PDO) {
            return self::$instancia;
        }

        // 1) Config (en examen: puedes dejarlo fijo)
        //    En proyecto: lo ideal es cargarlo desde .env o variables de entorno.
        $dsn  = getenv('DB_DSN') ?: 'mysql:host=localhost;dbname=dwes_02_libros;charset=utf8mb4';
        $user = getenv('DB_USER') ?: 'root';
        $pass = getenv('DB_PASS') ?: '';

        // 2) Opciones importantes
        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // errores como excepciones
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,       // fetch assoc por defecto
            PDO::ATTR_EMULATE_PREPARES   => false,                  // prepara de verdad (seguridad)
        ];

        // 3) Conexión con control de errores
        try {
            self::$instancia = new PDO($dsn, $user, $pass, $options);
            return self::$instancia;
        } catch (PDOException $e) {
            // En producción no muestres el detalle, pero en examen sirve.
            $msg = match ((int)$e->getCode()) {
                1049 => 'Base de datos no encontrada (1049)',
                1045 => 'Acceso denegado: usuario/contraseña (1045)',
                2002 => 'Servidor/host no accesible (2002)',
                default => 'Error PDO: ' . $e->getMessage(),
            };
            throw new RuntimeException($msg, (int)$e->getCode(), $e);
        }
    }
}
