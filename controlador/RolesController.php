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
            require_once("vista/roles/empleado.php");
        } else {
            echo "Acceso denegado. Esta sección es solo para empleados.";
        }
    }

    public function administrador() {
        // Verificar que el usuario tiene sesión activa y es administrador
        if (isset($_SESSION['usuario']) && $_SESSION['usuario']['rol'] === 'admin') {
            require_once("vista/roles/administrador.php");
        } else {
            echo "Acceso denegado. Esta sección es solo para administradores.";
        }
    }
}
?>