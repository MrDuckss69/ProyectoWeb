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
</div>
<?php require_once("layout/footer.php"); ?>