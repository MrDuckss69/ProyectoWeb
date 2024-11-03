<?php
require_once 'conexion.php';

class DestinoModel {
    private $db;

    public function __construct() {
        $this->db = new Conexion();
    }

    // Método para obtener todos los destinos
    public function obtenerDestinos() {
        $query = $this->db->query("SELECT * FROM destinos");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    // Método para obtener un destino por ID
    public function obtenerDestinoPorId($id) {
        $query = $this->db->prepare("SELECT * FROM destinos WHERE id = :id");
        $query->execute(['id' => $id]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    // Método para agregar un nuevo destino
    public function agregarDestino($datos) {
        $query = $this->db->prepare("INSERT INTO destinos (nombre, ubicacion, descripcion) VALUES (:nombre, :ubicacion, :descripcion)");
        return $query->execute($datos);
    }

    // Método para actualizar un destino
    public function actualizarDestino($id, $datos) {
        $query = $this->db->prepare("UPDATE destinos SET nombre = :nombre, ubicacion = :ubicacion, descripcion = :descripcion WHERE id = :id");
        $datos['id'] = $id;
        return $query->execute($datos);
    }

    // Método para eliminar un destino
    public function eliminarDestino($id) {
        $query = $this->db->prepare("DELETE FROM destinos WHERE id = :id");
        return $query->execute(['id' => $id]);
    }
}
?>