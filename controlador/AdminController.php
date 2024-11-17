<?php
require_once('modelo/AdminModel.php');

class AdminController {
    private $adminModel;

    public function __construct() {
        $this->adminModel = new AdminModel();
    }

    public function clientes() {
        require_once('vista/admin/clientes.php');
    }

    public function empleado() {
        require_once('vista/admin/empleado.php');
    }

    public function admin() {
        require_once('vista/admin/admin.php');
    }
}
?>
