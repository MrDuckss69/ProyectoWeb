<?php require_once("vista/layout/header.php"); ?>
<div class="container mt-5">
    <h1>Panel del Empleado</h1>
    <p>Desde aquí puedes gestionar paquetes, usuarios y reservas.</p>
    <a href="index.php?c=paquetes" class="btn btn-primary">Gestión de Paquetes</a>
    <br>
    <a href="index.php?u=logout" class="btn btn-danger">Cerrar Sesión</a>
    <br>
    <a href="logout.php" class="btn btn-danger">Cerrar Sesión</a>
</div>
<?php require_once("vista/layout/footer.php"); ?>