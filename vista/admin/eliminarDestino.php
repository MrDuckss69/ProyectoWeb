<?php
require_once ('../modelo/destinoModel.php');

$destinoModel = new DestinoModel();

if (isset($_GET['id'])) {
    $destinoModel->eliminarDestino($_GET['id']);
}

header('Location: gestionDatos.php');
exit;
?>