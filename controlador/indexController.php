<?php
require_once('modelo/indexModel.php');
class IndexController {
    private $indexModel;

    public function __construct() {
        $this->indexModel = new IndexModel();
    }

    public static function index() {
        require_once("vista/index.php");
    }

    public function registro() {
        require_once 'vista/registro.php';
    }

    public function login() {
        require_once 'vista/login.php';
    }

    public function paquetes() {
        require_once 'vista/paquetes.php';
    }

    public function vuelos() {
        require_once 'vista/vuelos.php';
    }

    public function promociones() {
        require_once 'vista/promociones.php';
    }

    public function hoteles() {
        require_once 'vista/hoteles.php';
    }

    public function alquilerdesitio() {
        require_once 'vista/alquilerdesitio.php';
    }

    public function ayuda() {
        require_once 'vista/ayuda.php';
    }
}
?>
