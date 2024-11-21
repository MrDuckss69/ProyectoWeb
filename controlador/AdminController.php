<?php
require_once('modelo/AdminModel.php');
require_once('modelo/paqueteModel.php');
require_once('modelo/UsuariosModel.php');

class AdminController {
    private $adminModel;
    private $paqueteModel;
    private $usuarioModel;

    public function __construct() {
        $this->adminModel = new AdminModel();
        $this->paqueteModel = new PaqueteModel();
        $this->usuarioModel = new UsuariosModel();
    }

    // Método para mostrar clientes
    public function clientes() {
        require_once('vista/roles/miCuenta.php');
    }

    // Método para mostrar paquetes en la vista de empleado
    public function empleado() {
        $paquetes = $this->paqueteModel->obtenerPaquetes(); // Obtener paquetes desde el modelo
        require_once('vista/roles/empleado.php'); // Cargar la vista
    }

    // Método para mostrar paquetes y usuarios en la vista de administrador
    public function admin() {
        $paquetes = $this->paqueteModel->obtenerPaquetes(); // Obtener paquetes
        $usuarios = $this->usuarioModel->obtenerUsuarios(); // Obtener usuarios
        require_once('vista/roles/administrador.php'); // Cargar la vista
    }

    // Método para eliminar un paquete
    public function eliminarPaquete() {
        $id = $_GET['id'] ?? null;
        if ($id) {
            $this->paqueteModel->eliminarPaquete($id); // Llamar al modelo para eliminar
        }
        header("Location: index.php?ruta=admin&metodo=admin");
    }

    // Método para eliminar un usuario
    public function eliminarUsuario() {
        $id = $_GET['id'] ?? null;
        if ($id) {
            $this->usuarioModel->eliminarUsuario($id); // Llamar al modelo para eliminar
        }
        header("Location: index.php?ruta=admin&metodo=admin");
    }
}
?>