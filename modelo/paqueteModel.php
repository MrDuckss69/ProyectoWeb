<?php
require_once 'conexion.php';

class PaqueteModel {
    private $db;

    public function __construct() {
        $this->db = new Conexion();
    }

    // Método para obtener todos los paquetes
    public function obtenerPaquetes() {
        $query = $this->db->query("SELECT * FROM paquetes");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    // Método para obtener un paquete por ID
    public function obtenerPaquetePorId($id) {
        $query = $this->db->prepare("SELECT * FROM paquetes WHERE id = :id");
        $query->execute(['id' => $id]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    // Método para agregar un nuevo paquete
    public function agregarPaquete($datos) {
        $query = $this->db->prepare("INSERT INTO paquetes (nombre, descripcion, precio) VALUES (:nombre, :descripcion, :precio)");
        return $query->execute($datos);
    }

    // Método para actualizar un paquete
    public function actualizarPaquete($id, $datos) {
        $query = $this->db->prepare("UPDATE paquetes SET nombre = :nombre, descripcion = :descripcion, precio = :precio WHERE id = :id");
        $datos['id'] = $id;
        return $query->execute($datos);
    }

    // Método para eliminar un paquete
    public function eliminarPaquete($id) {
        $query = $this->db->prepare("DELETE FROM paquetes WHERE id = :id");
        return $query->execute(['id' => $id]);
    }
}
?>