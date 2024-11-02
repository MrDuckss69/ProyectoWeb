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
    public function ayuda() {
        require_once 'vista/ayuda.php';
    }
}
?>
