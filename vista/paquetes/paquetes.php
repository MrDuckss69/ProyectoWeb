<?php require_once("vista/layout/header.php"); ?>
<div class="container my-5">
    <h1 class="text-center">Descubre Nuestros Paquetes Exclusivos</h1>
    <p class="text-center lead">Elige entre nuestras ofertas diseñadas para viajeros individuales, familias o aquellos que buscan aventuras. ¡Explora y reserva hoy mismo!</p>

    <!-- Sección de Paquetes -->
    <section id="paquetes" class="my-5">
        <h2 class="text-center mb-4">Paquetes Disponibles</h2>
        <div class="row">
            <?php if (!empty($paquetes)) : ?>
                <?php foreach ($paquetes as $paquete) : ?>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="https://via.placeholder.com/350x200" class="card-img-top" alt="<?= htmlspecialchars($paquete['nombre']); ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?= htmlspecialchars($paquete['nombre']); ?></h5>
                                <p class="card-text"><?= htmlspecialchars($paquete['descripcion']); ?></p>
                                <p class="card-text"><strong>Precio:</strong> $<?= number_format($paquete['precio'], 2); ?></p>
                                <a href="index.php?c=paquetes&a=editar&id=<?= $paquete['id']; ?>" class="btn btn-secondary">Editar</a>
                                <a href="index.php?c=paquetes&a=eliminar&id=<?= $paquete['id']; ?>" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar este paquete?')">Eliminar</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else : ?>
                <p class="text-center">No hay paquetes disponibles en este momento.</p>
            <?php endif; ?>
        </div>
    </section>

    <!-- Sección de Crear Nuevo Paquete -->
    <section id="crear-paquete" class="my-5">
        <h2 class="text-center mb-4">¿Quieres agregar un nuevo paquete?</h2>
        <div class="text-center">
            <a href="index.php?c=paquetes&a=crear" class="btn btn-primary">Crear Nuevo Paquete</a>
        </div>
    </section>
</div>
<?php require_once("vista/layout/footer.php"); ?>