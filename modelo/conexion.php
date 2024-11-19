<?php
class Conexion extends PDO {
    private $hostBD = 'localhost';
    private $nombreBD = 'Operadora_Turistica';
    private $usuarioBD = 'root';
    private $passwordBD = '';

    public function __construct() {
        try {
            // Conexión a la base de datos con configuración adicional
            parent::__construct(
                'mysql:host=' . $this->hostBD . ';dbname=' . $this->nombreBD . ';charset=utf8',
                $this->usuarioBD,
                $this->passwordBD,
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Activa los errores como excepciones
                      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC // Define el modo de obtención por defecto
                )
            );
        } catch (PDOException $e) {
            // Muestra un mensaje de error claro en caso de fallos
            die('Error en la conexión: ' . $e->getMessage());
        }
    }

    // Método estático para obtener la conexión sin instanciar múltiples veces
    public static function conectar() {
        return new self();
    }
}
?>