<?php require_once("vista/layout/header.php"); ?>
<div class="container my-5">
    <h1 class="text-center">Crear Nuevo Paquete</h1>
    <p class="text-center lead">Completa los campos a continuación para agregar un nuevo paquete de viaje a nuestra oferta.</p>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <!-- Mostrar mensaje de error si existe -->
            <?php if (!empty($error)): ?>
                <div class="alert alert-danger text-center">
                    <?= htmlspecialchars($error); ?>
                </div>
            <?php endif; ?>

            <form method="POST" action="index.php?ruta=paquetes&metodo=crear" onsubmit="return validarFormulario();">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre del Paquete</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ejemplo: Aventura en los Alpes" required>
                </div>
                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción</label>
                    <textarea class="form-control" id="descripcion" name="descripcion" rows="4" placeholder="Describe brevemente el paquete, sus actividades y beneficios." required></textarea>
                </div>
                <div class="mb-3">
                    <label for="precio" class="form-label">Precio</label>
                    <input type="number" class="form-control" id="precio" name="precio" placeholder="Ejemplo: 1500.00" step="0.01" min="0" required>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Guardar Paquete</button>
                    <a href="index.php?ruta=paquetes&metodo=listarPaquetes" class="btn btn-secondary">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    // Validación básica del formulario en el lado del cliente
    function validarFormulario() {
        const nombre = document.getElementById('nombre').value.trim();
        const descripcion = document.getElementById('descripcion').value.trim();
        const precio = document.getElementById('precio').value;

        if (nombre === '' || descripcion === '' || precio === '') {
            alert('Por favor, completa todos los campos.');
            return false;
        }

        if (parseFloat(precio) <= 0) {
            alert('El precio debe ser mayor a 0.');
            return false;
        }

        return true;
    }
</script>

<?php require_once("vista/layout/footer.php"); ?>