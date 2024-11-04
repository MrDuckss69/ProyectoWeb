<?php
require_once ('../modelo/paqueteModel.php');
require_once ('../modelo/reservaModel.php');
require_once ('../modelo/destinoModel.php');

$paqueteModel = new PaqueteModel();
$reservaModel = new ReservaModel();
$destinoModel = new DestinoModel();

$paquetes = $paqueteModel->obtenerPaquetes();
$reservas = $reservaModel->obtenerReservas();
$destinos = $destinoModel->obtenerDestinos();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión de Datos</title>
</head>
<body>
    <h1>Gestión de Datos</h1>

    <h2>Paquetes</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Precio</th>
            <th>Acciones</th>
        </tr>
        <?php foreach ($paquetes as $paquete): ?>
        <tr>
            <td><?php echo $paquete['id']; ?></td>
            <td><?php echo $paquete['nombre']; ?></td>
            <td><?php echo $paquete['descripcion']; ?></td>
            <td><?php echo $paquete['precio']; ?></td>
            <td>
                <a href="editarPaquete.php?id=<?php echo $paquete['id']; ?>">Editar</a>
                <a href="eliminarPaquete.php?id=<?php echo $paquete['id']; ?>">Eliminar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>

    <h2>Reservas</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>ID Paquete</th>
            <th>ID Usuario</th>
            <th>Fecha de Reserva</th>
            <th>Acciones</th>
        </tr>
        <?php foreach ($reservas as $reserva): ?>
        <tr>
            <td><?php echo $reserva['id']; ?></td>
            <td><?php echo $reserva['paquete_id']; ?></td>
            <td><?php echo $reserva['usuario_id']; ?></td>
            <td><?php echo $reserva['fecha_reserva']; ?></td>
            <td>
                <a href="editarReserva.php?id=<?php echo $reserva['id']; ?>">Editar</a>
                <a href="eliminarReserva.php?id=<?php echo $reserva['id']; ?>">Eliminar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>

    <h2>Destinos</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Ubicación</th>
            <th>Descripción</th>
            <th>Acciones</th>
        </tr>
        <?php foreach ($destinos as $destino): ?>
        <tr>
            <td><?php echo $destino['id']; ?></td>
            <td><?php echo $destino['nombre']; ?></td>
            <td><?php echo $destino['ubicacion']; ?></td>
            <td><?php echo $destino['descripcion']; ?></td>
            <td>
                <a href="editarDestino.php?id=<?php echo $destino['id']; ?>">Editar</a>
                <a href="eliminarDestino.php?id=<?php echo $destino['id']; ?>">Eliminar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>