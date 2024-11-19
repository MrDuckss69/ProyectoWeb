<?php
require_once("modelo/conexion.php");

class PaquetesModel {
    private $db;

    public function __construct() {
        // Inicializa la conexión a la base de datos
        $this->db = new Conexion();
    }

    // Método para obtener todos los paquetes
    public function obtenerTodosLosPaquetes() {
        try {
            $query = $this->db->query("SELECT * FROM paquetes");
            return $query->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die("Error al obtener los paquetes: " . $e->getMessage());
        }
    }
}
?>