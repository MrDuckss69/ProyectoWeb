<?php
require_once 'conexion.php';

class PaqueteModel {
    private $db;

    public function __construct() {
        $this->db = Conexion::conectar();
    }

    public function obtenerPaquetes() {
        try {
            $query = $this->db->query("SELECT * FROM paquetes");
            return $query->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            error_log("Error en obtenerPaquetes: " . $e->getMessage());
            return [];
        }
    }

    public function obtenerPaquetePorId($id) {
        try {
            $query = $this->db->prepare("SELECT * FROM paquetes WHERE id = :id");
            $query->execute(['id' => $id]);
            return $query->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            error_log("Error en obtenerPaquetePorId: " . $e->getMessage());
            return null;
        }
    }

    public function agregarPaquete($datos) {
        try {
            $query = $this->db->prepare("INSERT INTO paquetes (nombre, descripcion, precio) VALUES (:nombre, :descripcion, :precio)");
            return $query->execute([
                'nombre' => $datos['nombre'],
                'descripcion' => $datos['descripcion'],
                'precio' => $datos['precio']
            ]);
        } catch (PDOException $e) {
            error_log("Error en agregarPaquete: " . $e->getMessage());
            return false;
        }
    }

    public function actualizarPaquete($id, $datos) {
        try {
            $query = $this->db->prepare("UPDATE paquetes SET nombre = :nombre, descripcion = :descripcion, precio = :precio WHERE id = :id");
            return $query->execute([
                'id' => $id,
                'nombre' => $datos['nombre'],
                'descripcion' => $datos['descripcion'],
                'precio' => $datos['precio']
            ]);
        } catch (PDOException $e) {
            error_log("Error en actualizarPaquete: " . $e->getMessage());
            return false;
        }
    }

    public function eliminarPaquete($id) {
        try {
            $query = $this->db->prepare("DELETE FROM paquetes WHERE id = :id");
            $result = $query->execute(['id' => $id]);

            if ($result && $query->rowCount() > 0) {
                return true; // Se eliminó al menos un registro
            } else {
                error_log("Error en eliminarPaquete: No se encontró el paquete con ID $id.");
                return false;
            }
        } catch (PDOException $e) {
            error_log("Error en eliminarPaquete: " . $e->getMessage());
            return false;
        }
    }
}
?>