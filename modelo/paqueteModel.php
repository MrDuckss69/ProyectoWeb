<?php
require_once 'conexion.php';

class PaqueteModel {
    private $db;

    public function __construct() {
        // Inicializa la conexión con la base de datos
        $this->db = Conexion::conectar();
    }

    // Método para obtener todos los paquetes
    public function obtenerPaquetes() {
        try {
            $query = $this->db->query("SELECT * FROM paquetes");
            return $query->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die("Error al obtener paquetes: " . $e->getMessage());
        }
    }

    // Método para obtener un paquete por ID
    public function obtenerPaquetePorId($id) {
        try {
            $query = $this->db->prepare("SELECT * FROM paquetes WHERE id = :id");
            $query->execute(['id' => $id]);
            return $query->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die("Error al obtener el paquete: " . $e->getMessage());
        }
    }

    // Método para agregar un nuevo paquete
    public function agregarPaquete($datos) {
        try {
            $query = $this->db->prepare("INSERT INTO paquetes (nombre, descripcion, precio) VALUES (:nombre, :descripcion, :precio)");
            return $query->execute($datos);
        } catch (PDOException $e) {
            die("Error al agregar el paquete: " . $e->getMessage());
        }
    }

    // Método para actualizar un paquete
    public function actualizarPaquete($id, $datos) {
        try {
            $query = $this->db->prepare("UPDATE paquetes SET nombre = :nombre, descripcion = :descripcion, precio = :precio WHERE id = :id");
            $datos['id'] = $id;
            return $query->execute($datos);
        } catch (PDOException $e) {
            die("Error al actualizar el paquete: " . $e->getMessage());
        }
    }

    // Método para eliminar un paquete
    public function eliminarPaquete($id) {
        try {
            $query = $this->db->prepare("DELETE FROM paquetes WHERE id = :id");
            return $query->execute(['id' => $id]);
        } catch (PDOException $e) {
            die("Error al eliminar el paquete: " . $e->getMessage());
        }
    }
}
?>