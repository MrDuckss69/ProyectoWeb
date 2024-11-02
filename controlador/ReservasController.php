<?php
require_once('modelo/ReservasModel.php');
class ReservasController{
    private $reservasModel;
    public function __construct(){
        $this->reservasModel = new ReservasModel();
    }
    public static function mostrarHoteles(){
        require_once('vista/reservas/hoteles.php');
    }
    public static function mostrarVuelos(){
        require_once('vista/reservas/vuelos.php');
    }
    public static function mostrarAlquilerDeSitio(){
        require_once('vista/reservas/alquilerdesitio.php');
    }
}
?>