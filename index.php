<?php
require_once("config.php");
require("controlador/indexController.php");
require("controlador/ReservasController.php");
require("controlador/PaquetesController.php");
require("controlador/UsuariosController.php");

$indexController = new IndexController();
$reservasController = new ReservasController();
$paquetesController = new PaquetesController(); // Instanciar PaquetesController
$usuariosController = new UsuariosController(); // Instanciar UsuariosController

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
    else:
        $indexController->index();
    endif;
endif; 

?>