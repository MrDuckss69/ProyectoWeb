<?php
require_once('modelo/PaquetesModel.php');
class PaquetesController{
    private $paquetesModel;
    public function __construct(){
        $this->paquetesModel = new PaquetesModel();
    }
    public static function mostrarPaquetes(){
        require_once('vista/paquetes/paquetes.php');
    }
    public static function mostrarPromos(){
        require_once('vista/paquetes/promociones.php');
    }
}