<?php require_once("layout/header.php"); ?>
<div class="container my-5">
    <h1 class="text-center">Bienvenido a Tu Próxima Aventura</h1>
    <p class="text-center lead">Explora los destinos más increíbles del mundo con nosotros. ¡Reserva tu viaje hoy mismo!</p>

    <!-- Sección de Destinos Populares -->
    <section id="destinos-populares" class="my-5">
        <h2 class="text-center mb-4">Destinos Populares</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="https://i.imgur.com/cKXCTC9.jpeg" class="card-img-top" alt="Playa">
                    <div class="card-body">
                        <h5 class="card-title">Islas Maldivas</h5>
                        <p class="card-text">Disfruta de aguas cristalinas y resorts de lujo en uno de los destinos más paradisíacos del mundo.</p>
                        <a href="#" class="btn btn-primary">Más información</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://i.imgur.com/oiHxyeF.jpeg" class="card-img-top" alt="Montaña">
                    <div class="card-body">
                        <h5 class="card-title">Montañas de Suiza</h5>
                        <p class="card-text">Descubre paisajes de ensueño en los Alpes suizos, ideales para los amantes de la naturaleza y el esquí.</p>
                        <a href="#" class="btn btn-primary">Más información</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://i.imgur.com/akfE2n5.jpeg" class="card-img-top" alt="Ciudad">
                    <div class="card-body">
                        <h5 class="card-title">París, Francia</h5>
                        <p class="card-text">Vive la magia de la ciudad del amor con sus icónicos monumentos y su exquisita gastronomía.</p>
                        <a href="#" class="btn btn-primary">Más información</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de Servicios -->
    <section id="servicios" class="my-5">
        <h2 class="text-center mb-4">Nuestros Servicios</h2>
        <div class="row">
            <div class="col-md-4 text-center">
                <i class="fas fa-plane fa-3x mb-3"></i>
                <h4>Vuelos a todo el mundo</h4>
                <p>Reserva vuelos a los principales destinos con las mejores aerolíneas del mundo.</p>
            </div>
            <div class="col-md-4 text-center">
                <i class="fas fa-hotel fa-3x mb-3"></i>
                <h4>Hoteles de lujo</h4>
                <p>Alojamiento en hoteles exclusivos y de alta calidad en cualquier parte del planeta.</p>
            </div>
            <div class="col-md-4 text-center">
                <i class="fas fa-map fa-3x mb-3"></i>
                <h4>Paquetes turísticos</h4>
                <p>Ofrecemos paquetes completos que incluyen transporte, alojamiento y excursiones.</p>
            </div>
        </div>
    </section>

    <section id="testimonios" class="my-5">
        <h2 class="text-center mb-4">Lo que dicen nuestros clientes</h2>
        <div id="carouselTestimonios" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="d-block w-100 text-center">
                        <p class="lead">"¡Una experiencia inolvidable! Todo fue perfecto desde el inicio hasta el final."</p>
                        <p>- Juan Pérez, Cliente satisfecho</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-block w-100 text-center">
                        <p class="lead">"El servicio y la atención fueron de primera categoría. Definitivamente volveré a viajar con ustedes."</p>
                        <p>- María López, Viaje a París</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-block w-100 text-center">
                        <p class="lead">"Gracias por organizar nuestras vacaciones familiares. ¡Fue la mejor experiencia de nuestras vidas!"</p>
                        <p>- Carlos García, Vacaciones en familia</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselTestimonios" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselTestimonios" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
</div>
<?php require_once("layout/footer.php"); ?>
