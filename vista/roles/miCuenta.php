<?php require_once("vista/layout/header.php"); ?>
<div class="container mt-5">
    <h1>Bienvenido, <?= htmlspecialchars($_SESSION['usuario']['nombre']); ?></h1>
    <p>Esta es tu cuenta personal. Aquí puedes ver y gestionar tus datos.</p>
    <ul>
        <li><strong>Email:</strong> <?= htmlspecialchars($_SESSION['usuario']['email']); ?></li>
    </ul>
    <a href="index.php?u=logout" class="btn btn-danger">Cerrar Sesión</a>
    <br>
    <a href="logout.php" class="btn btn-danger">Cerrar Sesión</a>
</div>
<?php require_once("vista/layout/footer.php"); ?>