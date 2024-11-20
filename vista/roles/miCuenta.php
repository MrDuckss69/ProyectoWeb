<?php require_once("vista/layout/header.php"); ?>

<div class="container mt-5">
    <h1>Mi Cuenta</h1>
    <p>Bienvenido, <?= htmlspecialchars($_SESSION['usuario']['nombre']); ?>.</p>
    <p>Correo electrónico: <?= htmlspecialchars($_SESSION['usuario']['email']); ?></p>
    <p>Rol: <?= htmlspecialchars(ucfirst($_SESSION['usuario']['rol'])); ?></p>

    <a href="index.php?u=logout" class="btn btn-danger">Cerrar Sesión</a>
</div>

<?php require_once("vista/layout/footer.php"); ?>