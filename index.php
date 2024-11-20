<?php
require_once("config.php");

// Incluir todos los controladores necesarios
require("controlador/indexController.php");
require("controlador/ReservasController.php");
require("controlador/PaquetesController.php");
require("controlador/UsuariosController.php");
require("controlador/AdminController.php");
require("controlador/RolesController.php");

// Obtener la ruta desde la URL
$ruta = isset($_GET['ruta']) ? $_GET['ruta'] : 'index';
$metodo = isset($_GET['metodo']) ? $_GET['metodo'] : 'index';

// Sistema de enrutamiento
switch ($ruta) {
    case 'reservas':
        $controller = new ReservasController();
        break;
    case 'paquetes':
        $controller = new PaquetesController();
        break;
    case 'usuarios':
        $controller = new UsuariosController();
        break;
    case 'admin':
        $controller = new AdminController();
        break;
    case 'roles':
        $controller = new RolesController();
        break;
    case 'index':
    default:
        $controller = new IndexController();
        break;
}

// Verificar si el método existe en el controlador
if (method_exists($controller, $metodo)) {
    $controller->{$metodo}();
} else {
    echo "Error 404: El método '$metodo' no existe en el controlador.";
}
