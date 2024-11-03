<?php
require_once '../modelo/destinoModel.php';

$destinoModel = new DestinoModel();
$destino = null;

if (isset($_GET['id'])) {
    $destino = $destinoModel->obtenerDestinoPorId($_GET['id']);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $datos = [
        'nombre' => $_POST['nombre'],
        'ubicacion' => $_POST['ubicacion'],
        'descripcion' => $_POST['descripcion']
    ];
    $destinoModel->actualizarDestino($_GET['id'], $datos);
    header('Location: gestionDatos.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Destino</title>
</head>
<body>
    <h1>Editar Destino</h1>
    <?php if ($destino): ?>
    <form method="POST">
        Nombre: <input type="text" name="nombre" value="<?php echo $destino['nombre']; ?>"><br>
        Ubicación: <input type="text" name="ubicacion" value="<?php echo $destino['ubicacion']; ?>"><br>
        Descripción: <input type="text" name="descripcion" value="<?php echo $destino['descripcion']; ?>"><br>
        <input type="submit" value="Guardar cambios">
    </form>
    <?php else: ?>
    <p>Destino no encontrado</p>
    <?php endif; ?>
</body>
</html>