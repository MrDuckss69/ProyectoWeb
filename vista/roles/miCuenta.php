<?php
// Asegúrate de que esta sea la primera línea del archivo
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once("vista/layout/header.php");

// Verificar la existencia de los índices necesarios en $_SESSION
$nombreUsuario = isset($_SESSION['usuario']['nombre']) ? htmlspecialchars($_SESSION['usuario']['nombre']) : 'Nombre no disponible';
$emailUsuario = isset($_SESSION['usuario']['email']) ? htmlspecialchars($_SESSION['usuario']['email']) : 'Correo no disponible';
$rolUsuario = isset($_SESSION['usuario']['rol']) ? htmlspecialchars(ucfirst($_SESSION['usuario']['rol'])) : 'Rol no disponible';
?>

<div class="container mt-5">
    <h1>Mi Cuenta</h1>
    <p>Bienvenido, <?= $nombreUsuario; ?>.</p>
    <p>Correo electrónico: <?= $emailUsuario; ?></p>
    <p>Rol: <?= $rolUsuario; ?></p>

    <a href="index.php?u=logout" class="btn btn-danger">Cerrar Sesión</a>
</div>

<?php require_once("vista/layout/footer.php"); ?>