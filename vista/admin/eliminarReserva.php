<?php
require_once ('../modelo/reservaModel.php');

$reservaModel = new ReservaModel();

if (isset($_GET['id'])) {
    $reservaModel->eliminarReserva($_GET['id']);
}

header('Location: gestionDatos.php');
exit;
?>