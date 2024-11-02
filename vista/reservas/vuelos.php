<?php require_once("vista/layout/header.php"); ?>
<div class="container my-5">
    <h1 class="text-center">Reservas de Vuelos</h1>
    <p class="text-center lead">Encuentra las mejores ofertas en vuelos a destinos de todo el mundo.</p>

    <!-- Sección de Búsqueda de Vuelos -->
    <section id="busqueda-vuelos" class="my-5">
        <h2 class="text-center mb-4">Buscar Vuelo</h2>
        <form>
            <div class="row">
                <div class="col-md-4">
                    <label for="origen" class="form-label">Origen</label>
                    <input type="text" class="form-control" id="origen" placeholder="Ciudad de origen" required>
                </div>
                <div class="col-md-4">
                    <label for="destino" class="form-label">Destino</label>
                    <input type="text" class="form-control" id="destino" placeholder="Ciudad de destino" required>
                </div>
                <div class="col-md-4">
                    <label for="fecha" class="form-label">Fecha de Salida</label>
                    <input type="date" class="form-control" id="fecha" required>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-4">
                    <label for="pasajeros" class="form-label">Número de Pasajeros</label>
                    <input type="number" class="form-control" id="pasajeros" min="1" value="1" required>
                </div>
                <div class="col-md-4">
                    <label for="clase" class="form-label">Clase</label>
                    <select class="form-select" id="clase">
                        <option value="economica">Económica</option>
                        <option value="ejecutiva">Ejecutiva</option>
                        <option value="primera">Primera Clase</option>
                    </select>
                </div>
                <div class="col-md-4 d-flex align-items-end">
                    <button type="submit" class="btn btn-primary">Buscar Vuelos</button>
                </div>
            </div>
        </form>
    </section>

    <!-- Sección de Barra de Búsqueda -->
    <section id="barra-busqueda" class="my-5">
        <h2 class="text-center mb-4">Buscar Ofertas de Vuelos</h2>
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Buscar por destino, aerolínea, etc." aria-label="Buscar por destino" aria-describedby="button-addon2">
            <button class="btn btn-outline-secondary" type="button" id="button-addon2">Buscar</button>
        </div>
    </section>

    <!-- Sección de Ofertas Especiales -->
    <section id="ofertas-especiales" class="my-5">
        <h2 class="text-center mb-4">Ofertas Especiales en Vuelos</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="https://media.architecturaldigest.com/photos/5cdadfa704c41e74349a8438/master/pass/GettyImages-931933966.jpg" class="card-img-top" alt="Vuelo a Nueva York">
                    <div class="card-body">
                        <h5 class="card-title">Vuelo a Nueva York</h5>
                        <p class="card-text">Desde $499. Aprovecha nuestra oferta limitada para viajar a la ciudad que nunca duerme.</p>
                        <a href="#" class="btn btn-primary">Reservar Ahora</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://th.bing.com/th/id/R.4dfcbb60fbc9dc09501c9cc162a646f7?rik=k%2blngBfZn7CVbg&pid=ImgRaw&r=0" class="card-img-top" alt="Vuelo a Cancún">
                    <div class="card-body">
                        <h5 class="card-title">Vuelo a Cancún</h5>
                        <p class="card-text">Desde $399. Disfruta del sol y la playa en uno de los destinos más populares de México.</p>
                        <a href="#" class="btn btn-primary">Reservar Ahora</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://th.bing.com/th/id/R.617a5a325192dad7671e8176527e7997?rik=5FVcLFKWaNmRIA&pid=ImgRaw&r=0" class="card-img-top" alt="Vuelo a Londres">
                    <div class="card-body">
                        <h5 class="card-title">Vuelo a Londres</h5>
                        <p class="card-text">Desde $599. Visita la capital británica y descubre su rica historia y cultura.</p>
                        <a href="#" class="btn btn-primary">Reservar Ahora</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php require_once("vista/layout/footer.php"); ?>