<?php
require_once '../modelo/paqueteModel.php';

$paqueteModel = new PaqueteModel();

if (isset($_GET['id'])) {
    $paqueteModel->eliminarPaquete($_GET['id']);
}

header('Location: gestionDatos.php');
exit;
?>