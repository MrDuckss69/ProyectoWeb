<?php
require_once '../modelo/reservaModel.php';

$reservaModel = new ReservaModel();
$reserva = null;

if (isset($_GET['id'])) {
    $reserva = $reservaModel->obtenerReservaPorId($_GET['id']);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $datos = [
        'paquete_id' => $_POST['paquete_id'],
        'usuario_id' => $_POST['usuario_id'],
        'fecha_reserva' => $_POST['fecha_reserva']
    ];
    $reservaModel->actualizarReserva($_GET['id'], $datos);
    header('Location: gestionDatos.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Reserva</title>
</head>
<body>
    <h1>Editar Reserva</h1>
    <?php if ($reserva): ?>
    <form method="POST">
        ID Paquete: <input type="text" name="paquete_id" value="<?php echo $reserva['paquete_id']; ?>"><br>
        ID Usuario: <input type="text" name="usuario_id" value="<?php echo $reserva['usuario_id']; ?>"><br>
        Fecha de Reserva: <input type="date" name="fecha_reserva" value="<?php echo $reserva['fecha_reserva']; ?>"><br>
        <input type="submit" value="Guardar cambios">
    </form>
    <?php else: ?>
    <p>Reserva no encontrada</p>
    <?php endif; ?>
</body>
</html>