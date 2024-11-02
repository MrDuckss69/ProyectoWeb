<?php
require_once("config.php");
require("controlador/indexController.php");
require("controlador/ReservasController.php");

$indexController = new IndexController();
$reservasController = new ReservasController();

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
    else:
        $indexController->index();
    endif;
endif; 

?>