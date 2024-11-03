<?php
require_once '../modelo/paqueteModel.php';

$paqueteModel = new PaqueteModel();
$paquete = null;

if (isset($_GET['id'])) {
    $paquete = $paqueteModel->obtenerPaquetePorId($_GET['id']);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $datos = [
        'nombre' => $_POST['nombre'],
        'descripcion' => $_POST['descripcion'],
        'precio' => $_POST['precio']
    ];
    $paqueteModel->actualizarPaquete($_GET['id'], $datos);
    header('Location: gestionDatos.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Paquete</title>
</head>
<body>
    <h1>Editar Paquete</h1>
    <?php if ($paquete): ?>
    <form method="POST">
        Nombre: <input type="text" name="nombre" value="<?php echo $paquete['nombre']; ?>"><br>
        Descripción: <input type="text" name="descripcion" value="<?php echo $paquete['descripcion']; ?>"><br>
        Precio: <input type="text" name="precio" value="<?php echo $paquete['precio']; ?>"><br>
        <input type="submit" value="Guardar cambios">
    </form>
    <?php else: ?>
    <p>Paquete no encontrado</p>
    <?php endif; ?>
</body>
</html>