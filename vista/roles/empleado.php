<?php require_once("vista/layout/header.php"); ?>

<div class="container mt-5">
    <h1>Panel del Empleado</h1>
    <p>Gestión de paquetes de viaje:</p>

    <a href="index.php?c=paquetes&a=crear" class="btn btn-success mb-3">Agregar Nuevo Paquete</a>

    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($paquetes)): ?>
                <?php foreach ($paquetes as $paquete): ?>
                    <tr>
                        <td><?= htmlspecialchars($paquete['nombre']); ?></td>
                        <td><?= htmlspecialchars($paquete['descripcion']); ?></td>
                        <td>$<?= htmlspecialchars($paquete['precio']); ?></td>
                        <td>
                            <a href="index.php?c=paquetes&a=editar&id=<?= $paquete['id']; ?>" class="btn btn-warning">Editar</a>
                            <a href="index.php?c=paquetes&a=eliminar&id=<?= $paquete['id']; ?>" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="4" class="text-center">No hay paquetes disponibles.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

    <a href="index.php?u=logout" class="btn btn-danger">Cerrar Sesión</a>
</div>

<?php require_once("vista/layout/footer.php"); ?>
