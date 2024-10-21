<?php require_once("layout/header.php"); ?>
<div class="container my-5">
    <h1 class="text-center">Alquiler de Sitios</h1>
    <p class="text-center lead">Encuentra el lugar perfecto para tu evento, ya sea una boda, reunión corporativa o fiesta privada.</p>

    <!-- Sección de Búsqueda de Sitios -->
    <section id="busqueda-sitios" class="my-5">
        <h2 class="text-center mb-4">Buscar Sitio</h2>
        <form>
            <div class="row">
                <div class="col-md-4">
                    <label for="tipo-sitio" class="form-label">Tipo de Sitio</label>
                    <select class="form-select" id="tipo-sitio" required>
                        <option value="salon">Salón de Eventos</option>
                        <option value="jardin">Jardín</option>
                        <option value="hotel">Hotel</option>
                        <option value="casa">Casa de Campo</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="fecha" class="form-label">Fecha del Evento</label>
                    <input type="date" class="form-control" id="fecha" required>
                </div>
                <div class="col-md-4">
                    <label for="personas" class="form-label">Número de Personas</label>
                    <input type="number" class="form-control" id="personas" min="1" value="1" required>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-4">
                    <label for="presupuesto" class="form-label">Presupuesto Aproximado</label>
                    <input type="number" class="form-control" id="presupuesto" min="0" required>
                </div>
                <div class="col-md-4 d-flex align-items-end">
                    <button type="submit" class="btn btn-primary">Buscar Sitios</button>
                </div>
            </div>
        </form>
    </section>

    <!-- Sección de Barra de Búsqueda -->
    <section id="barra-busqueda" class="my-5">
        <h2 class="text-center mb-4">Buscar Ofertas de Alquiler</h2>
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Buscar por nombre de sitio, ciudad, etc." aria-label="Buscar por nombre de sitio" aria-describedby="button-addon2">
            <button class="btn btn-outline-secondary" type="button" id="button-addon2">Buscar</button>
        </div>
    </section>

    <!-- Sección de Mapa de Google Maps -->
    <section id="mapa" class="my-5">
        <h2 class="text-center mb-4">Ubicación de Nuestros Sitios</h2>
        <div class="text-center">
            <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.123192525331!2d-122.41941508468144!3d37.77492927975976!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085817e0224b045%3A0x6f1f8dfe3a0e9f10!2sSan%20Francisco%2C%20CA%2094103%2C%20EE.%20UU.!5e0!3m2!1ses!2smx!4v1649967375623!5m2!1ses!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </section>

    <!-- Sección de Ofertas Especiales -->
    <section id="ofertas-especiales" class="my-5">
        <h2 class="text-center mb-4">Ofertas Especiales de Alquiler</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="https://i.imgur.com/EU0bd55.jpeg" class="card-img-top" alt="Salón de Eventos">
                    <div class="card-body">
                        <h5 class="card-title">Salón de Eventos en el Centro</h5>
                        <p class="card-text">Ideal para bodas y eventos corporativos. Capacidad para 150 personas.</p>
                        <a href="#" class="btn btn-primary">Consultar Disponibilidad</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://i.imgur.com/OpdV9u5.jpeg" class="card-img-top" alt="Jardín">
                    <div class="card-body">
                        <h5 class="card-title">Jardín al Aire Libre</h5>
                        <p class="card-text">Perfecto para ceremonias y fiestas al aire libre. Capacidad para 100 personas.</p>
                        <a href="#" class="btn btn-primary">Consultar Disponibilidad</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://i.imgur.com/XdoB0pU.jpeg" class="card-img-top" alt="Casa de Campo">
                    <div class="card-body">
                        <h5 class="card-title">Casa de Campo</h5>
                        <p class="card-text">Ideal para retiros y reuniones familiares. Capacidad para 20 personas.</p>
                        <a href="#" class="btn btn-primary">Consultar Disponibilidad</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php require_once("layout/footer.php"); ?>