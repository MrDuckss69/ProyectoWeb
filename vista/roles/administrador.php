<?php require_once("vista/layout/header.php"); ?>
<div class="container mt-5">
    <h1>Panel del Administrador</h1>
    <p>Desde aquí puedes supervisar y gestionar todo el sistema.</p>
    <a href="index.php?u=usuarios" class="btn btn-primary">Gestión de Usuarios</a>
    <br>
    <a href="index.php?u=logout" class="btn btn-danger">Cerrar Sesión</a>
    <br>
    <a href="logout.php" class="btn btn-danger">Cerrar Sesión</a>
</div>
<?php require_once("vista/layout/footer.php"); ?>