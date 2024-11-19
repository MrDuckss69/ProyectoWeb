<?php require_once("vista/layout/header.php"); ?>

<div class="container my-5">
    <h1 class="text-center">Paquetes Disponibles</h1>
    <div class="row">
        <?php if (!empty($paquetes)): ?>
            <?php foreach ($paquetes as $paquete): ?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><?= htmlspecialchars($paquete['nombre']); ?></h5>
                            <p class="card-text"><?= htmlspecialchars($paquete['descripcion']); ?></p>
                            <p class="card-text"><strong>Precio:</strong> $<?= htmlspecialchars($paquete['precio']); ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p class="text-center">No hay paquetes disponibles actualmente.</p>
        <?php endif; ?>
    </div>
</div>

<?php require_once("vista/layout/footer.php"); ?>