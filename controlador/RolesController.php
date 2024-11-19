<?php
class RolesController {
    public function miCuenta() {
        // Verificar que el usuario tiene sesión activa y es cliente
        if (isset($_SESSION['usuario']) && $_SESSION['usuario']['rol'] === 'cliente') {
            require_once("vista/roles/miCuenta.php");
        } else {
            echo "Acceso denegado. Esta sección es solo para clientes.";
        }
    }

    public function empleado() {
        // Verificar que el usuario tiene sesión activa y es empleado
        if (isset($_SESSION['usuario']) && $_SESSION['usuario']['rol'] === 'empleado') {
            require_once("modelo/PaquetesModel.php");
            $paquetesModel = new PaquetesModel();
            $paquetes = $paquetesModel->obtenerTodosLosPaquetes(); // Obtener paquetes
            require_once("vista/roles/empleado.php"); // Cargar la vista
        } else {
            echo "Acceso denegado. Esta sección es solo para empleados.";
        }
    }

    public function administrador() {
        // Verificar que el usuario tiene sesión activa y es administrador
        if (isset($_SESSION['usuario']) && $_SESSION['usuario']['rol'] === 'admin') {
            require_once("modelo/PaquetesModel.php");
            require_once("modelo/UsuariosModel.php");
            $paquetesModel = new PaquetesModel();
            $usuariosModel = new UsuariosModel();
            $paquetes = $paquetesModel->obtenerTodosLosPaquetes(); // Obtener paquetes
            $usuarios = $usuariosModel->obtenerTodosLosUsuarios(); // Obtener usuarios
            require_once("vista/roles/administrador.php"); // Cargar la vista
        } else {
            echo "Acceso denegado. Esta sección es solo para administradores.";
        }
    }
}
?>