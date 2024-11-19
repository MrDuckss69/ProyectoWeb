<?php
require_once("config.php");
require("controlador/indexController.php");
require("controlador/ReservasController.php");
require("controlador/PaquetesController.php");
require("controlador/UsuariosController.php");
require("controlador/AdminController.php"); // Incluir el controlador AdminController
require("controlador/RolesController.php"); // Incluir el controlador RolesController

$indexController = new IndexController();
$reservasController = new ReservasController();
$paquetesController = new PaquetesController();
$usuariosController = new UsuariosController();
$adminController = new AdminController(); // Instanciar AdminController
$rolesController = new RolesController(); // Instanciar RolesController

if (isset($_GET['r'])):
    $metodo = $_GET['r'];
    if (method_exists($reservasController, $metodo)):
        $reservasController->{$metodo}();
    endif;
else:
    if (isset($_GET['i'])):
        $metodo = $_GET['i'];
        if (method_exists($indexController, $metodo)):
            $indexController->{$metodo}();
        endif;
    endif;
    if (isset($_GET['p'])):
        $metodo = $_GET['p'];
        if (method_exists($paquetesController, $metodo)):
            $paquetesController->{$metodo}();
        endif;
    endif;
    if (isset($_GET['u'])):
        $metodo = $_GET['u'];
        if (method_exists($usuariosController, $metodo)):
            $usuariosController->{$metodo}();
        endif;
    endif;
    if (isset($_GET['a'])):
        $metodo = $_GET['a'];
        if (method_exists($adminController, $metodo)):
            $adminController->{$metodo}();
        elseif (method_exists($rolesController, $metodo)): // Rutas de RolesController
            $rolesController->{$metodo}();
        else:
            echo "Método no encontrado.";
        endif;
    else:
        $indexController->index();
    endif;

    // Nueva sección: rutas dinámicas para paquetes
    if (isset($_GET['c'])):
        $controller = $_GET['c'];
        $metodo = $_GET['a'] ?? 'index';

        // Verificar que el controlador sea válido y su método exista
        $controladorClase = ucfirst($controller) . "Controller";
        if (class_exists($controladorClase)):
            $controladorInstancia = new $controladorClase();
            if (method_exists($controladorInstancia, $metodo)):
                $controladorInstancia->{$metodo}();
            else:
                die("Método '$metodo' no encontrado en '$controladorClase'.");
            endif;
        else:
            die("Controlador '$controladorClase' no encontrado.");
        endif;
    else:
        $indexController->index();
    endif;
endif;
?>