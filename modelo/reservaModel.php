<?php
require_once 'conexion.php';

class ReservaModel {
    private $db;

    public function __construct() {
        $this->db = new Conexion();
    }

    // Método para obtener todas las reservas
    public function obtenerReservas() {
        $query = $this->db->query("SELECT * FROM reservas");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    // Método para obtener una reserva por ID
    public function obtenerReservaPorId($id) {
        $query = $this->db->prepare("SELECT * FROM reservas WHERE id = :id");
        $query->execute(['id' => $id]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    // Método para agregar una nueva reserva
    public function agregarReserva($datos) {
        $query = $this->db->prepare("INSERT INTO reservas (paquete_id, usuario_id, fecha_reserva) VALUES (:paquete_id, :usuario_id, :fecha_reserva)");
        return $query->execute($datos);
    }

    // Método para actualizar una reserva
    public function actualizarReserva($id, $datos) {
        $query = $this->db->prepare("UPDATE reservas SET paquete_id = :paquete_id, usuario_id = :usuario_id, fecha_reserva = :fecha_reserva WHERE id = :id");
        $datos['id'] = $id;
        return $query->execute($datos);
    }

    // Método para eliminar una reserva
    public function eliminarReserva($id) {
        $query = $this->db->prepare("DELETE FROM reservas WHERE id = :id");
        return $query->execute(['id' => $id]);
    }
}
?>