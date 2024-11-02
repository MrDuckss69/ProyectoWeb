<?php require_once('vista/layout/header.php');?>
<div class="container my-5">
    <h1 class="text-center">Reservas de Hoteles</h1>
    <p class="text-center lead">Encuentra el hotel perfecto para tu estancia en cualquier destino.</p>

    <!-- Sección de Búsqueda de Hoteles -->
    <section id="busqueda-hoteles" class="my-5">
        <h2 class="text-center mb-4">Buscar Hotel</h2>
        <form>
            <div class="row">
                <div class="col-md-4">
                    <label for="destino" class="form-label">Destino</label>
                    <input type="text" class="form-control" id="destino" placeholder="Ciudad o lugar" required>
                </div>
                <div class="col-md-4">
                    <label for="fecha-entrada" class="form-label">Fecha de Entrada</label>
                    <input type="date" class="form-control" id="fecha-entrada" required>
                </div>
                <div class="col-md-4">
                    <label for="fecha-salida" class="form-label">Fecha de Salida</label>
                    <input type="date" class="form-control" id="fecha-salida" required>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-4">
                    <label for="pasajeros" class="form-label">Número de Pasajeros</label>
                    <input type="number" class="form-control" id="pasajeros" min="1" value="1" required>
                </div>
                <div class="col-md-4">
                    <label for="tipo-hotel" class="form-label">Tipo de Hotel</label>
                    <select class="form-select" id="tipo-hotel">
                        <option value="lujo">Lujo</option>
                        <option value="medio">Medio</option>
                        <option value="economico">Económico</option>
                    </select>
                </div>
                <div class="col-md-4 d-flex align-items-end">
                    <button type="submit" class="btn btn-primary">Buscar Hoteles</button>
                </div>
            </div>
        </form>
    </section>

    <!-- Sección de Barra de Búsqueda -->
    <section id="barra-busqueda" class="my-5">
        <h2 class="text-center mb-4">Buscar Ofertas de Hoteles</h2>
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Buscar por nombre de hotel, ciudad, etc." aria-label="Buscar por nombre de hotel" aria-describedby="button-addon2">
            <button class="btn btn-outline-secondary" type="button" id="button-addon2">Buscar</button>
        </div>
    </section>

    <!-- Sección de Mapa de Google Maps -->
    <section id="mapa" class="my-5">
        <h2 class="text-center mb-4">Ubicación de Nuestros Hoteles</h2>
        <div class="text-center">
            <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.835434509653!2d144.9537363153167!3d-37.81720997975188!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11c0eb%3A0x5045675218ceed30!2sMelbourne%20CBD%2C%20Melbourne%20VIC%2C%20Australia!5e0!3m2!1sen!2sus!4v1637738310512!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </section>

    <!-- Sección de Ofertas Especiales -->
    <section id="ofertas-especiales" class="my-5">
        <h2 class="text-center mb-4">Ofertas Especiales en Hoteles</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0c/36/f4/dd/photo0jpg.jpg?w=900&h=-1&s=1" class="card-img-top" alt="Hotel en París">
                    <div class="card-body">
                        <h5 class="card-title">Hotel en París</h5>
                        <p class="card-text">Desde $120 por noche. Disfruta de una estancia en el corazón de la ciudad del amor.</p>
                        <a href="#" class="btn btn-primary">Reservar Ahora</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://th.bing.com/th/id/R.40ed2fbfe246d60d2b92d4c470873b29?rik=4rnTzbEACksz8w&riu=http%3a%2f%2fwww.extravaganzi.com%2fwp-content%2fuploads%2f2012%2f02%2fThe-Plaza-Hotel-New-York.jpg&ehk=avBkKpBg%2bKFf49g%2bQQdwkRyiM2BekaMPSvo31t2IPIc%3d&risl=&pid=ImgRaw&r=0" class="card-img-top" alt="Hotel en Nueva York">
                    <div class="card-body">
                        <h5 class="card-title">Hotel en Nueva York</h5>
                        <p class="card-text">Desde $150 por noche. Experimenta la vida vibrante de Nueva York a solo pasos de Times Square.</p>
                        <a href="#" class="btn btn-primary">Reservar Ahora</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://cache.marriott.com/marriottassets/marriott/CUNLI/cunli-exterior-2363-hor-clsc.jpg" class="card-img-top" alt="Hotel en Cancún">
                    <div class="card-body">
                        <h5 class="card-title">Hotel en Cancún</h5>
                        <p class="card-text">Desde $200 por noche. Relájate en un resort todo incluido en la hermosa playa de Cancún.</p>
                        <a href="#" class="btn btn-primary">Reservar Ahora</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php require_once('vista/layout/footer.php');?>
