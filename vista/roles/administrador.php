<?php require_once("vista/layout/header.php"); ?>

<div class="container mt-5">
    <h1>Panel del Administrador</h1>

    <!-- Gestión de Paquetes -->
    <h2>Gestión de Paquetes</h2>
    <a href="index.php?ruta=paquetes&metodo=crear" class="btn btn-success mb-3">Agregar Nuevo Paquete</a>
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
                        <td>$<?= number_format($paquete['precio'], 2); ?></td>
                        <td>
                            <a href="index.php?ruta=paquetes&metodo=editar&id=<?= $paquete['id']; ?>" class="btn btn-warning">Editar</a>
                            <a href="index.php?ruta=admin&metodo=eliminarPaquete&id=<?= $paquete['id']; ?>" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="4" class="text-center">No hay paquetes disponibles. <a href="index.php?ruta=paquetes&metodo=crear">Agrega uno aquí</a>.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

    <!-- Gestión de Usuarios -->
    <h2 class="mt-5">Gestión de Usuarios</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Email</th>
                <th>Teléfono</th>
                <th>CURP</th>
                <th>Rol</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($usuarios)): ?>
                <?php foreach ($usuarios as $usuario): ?>
                    <tr>
                        <td><?= htmlspecialchars($usuario['nombre']); ?></td>
                        <td><?= htmlspecialchars($usuario['apellidos']); ?></td>
                        <td><?= htmlspecialchars($usuario['email']); ?></td>
                        <td><?= htmlspecialchars($usuario['telefono']); ?></td>
                        <td><?= htmlspecialchars($usuario['curp']); ?></td>
                        <td><?= htmlspecialchars(ucfirst($usuario['rol'])); ?></td>
                        <td>
                            <a href="index.php?ruta=admin&metodo=eliminarUsuario&id=<?= $usuario['id']; ?>" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="7" class="text-center">No hay usuarios registrados. Registra uno <a href="index.php?ruta=registro">aquí</a>.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

    <a href="index.php?u=logout" class="btn btn-danger">Cerrar Sesión</a>
</div>

<?php require_once("vista/layout/footer.php"); ?>
