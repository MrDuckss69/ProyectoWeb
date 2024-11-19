<?php
require_once("modelo/conexion.php");

class PaquetesModel {
    private $db;

    public function __construct() {
        // Inicializar la conexión a la base de datos
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

    // Método para eliminar un paquete por ID
    public function eliminarPaquete($id) {
        try {
            $query = $this->db->prepare("DELETE FROM paquetes WHERE id = :id");
            $query->execute(['id' => $id]);
        } catch (PDOException $e) {
            die("Error al eliminar el paquete: " . $e->getMessage());
        }
    }

    // Método para editar un paquete
    public function editarPaquete($id, $datos) {
        try {
            $query = $this->db->prepare("UPDATE paquetes SET nombre = :nombre, descripcion = :descripcion, precio = :precio WHERE id = :id");
            $datos['id'] = $id;
            $query->execute($datos);
        } catch (PDOException $e) {
            die("Error al editar el paquete: " . $e->getMessage());
        }
    }
}
?>