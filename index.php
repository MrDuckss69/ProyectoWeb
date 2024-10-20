<?php
require_once('controlador/indexController.php');

$controller = new IndexController();

if (isset($_GET['i'])) {
    $action = $_GET['i'];
    if (method_exists($controller, $action)) {
        $controller->$action();
    } else {
        // Manejar el caso en que la acción no exista
        echo "Acción no encontrada.";
    }
} else {
    $controller->index();
}
?>