<?php require_once("vista/layout/header.php"); ?>

<div class="container my-5">
    <h1 class="text-center">Paquetes Disponibles</h1>
    <div class="row">
        <?php if (!empty($paquetes) && is_array($paquetes)): ?>
            <?php foreach ($paquetes as $paquete): ?>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><?= htmlspecialchars($paquete['nombre']); ?></h5>
                            <p class="card-text"><?= htmlspecialchars($paquete['descripcion']); ?></p>
                            <p class="card-text"><strong>Precio:</strong> $<?= number_format($paquete['precio'], 2); ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <div class="col-12">
                <p class="text-center">No hay paquetes disponibles actualmente. Por favor, vuelve a intentarlo más tarde o <a href="index.php?ruta=contacto">contáctanos</a> para más información.</p>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php require_once("vista/layout/footer.php"); ?>