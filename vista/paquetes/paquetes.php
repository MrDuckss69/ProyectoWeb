<?php require_once("vista/layout/header.php"); ?>
<div class="container my-5">
    <h1 class="text-center">Descubre Nuestros Paquetes Exclusivos</h1>
    <p class="text-center lead">Elige entre nuestras ofertas diseñadas para viajeros individuales, familias o aquellos que buscan aventuras en bajera. ¡Explora y reserva hoy mismo!</p>

    <!-- Sección de Paquetes Individuales -->
    <section id="paquetes-individuales" class="my-5">
        <h2 class="text-center mb-4">Paquetes Individuales</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="https://th.bing.com/th/id/R.770459bc09da8714c4907a48f1163cab?rik=MvFUf36lb1j99w&pid=ImgRaw&r=0" class="card-img-top" alt="Paquete individual">
                    <div class="card-body">
                        <h5 class="card-title">Paquete a la Patagonia, Chile</h5>
                        <p class="card-text">Explora la impresionante Patagonia, conocida por sus glaciares y lagos cristalinos. Disfruta de actividades como senderismo en el Parque Nacional Torres del Paine y relájate junto al hermoso Lago Pehoé, donde las vistas son simplemente espectaculares. Un destino ideal para los amantes de la naturaleza y la aventura.</p>
                        <a href="#" class="btn btn-primary">Más información</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://www.muchbetteradventures.com/magazine/content/images/size/w2000/2020/01/02173546/GettyImages-1155613712-1.jpg" class="card-img-top" alt="Paquete individual">
                    <div class="card-body">
                        <h5 class="card-title">Paquete a los Alpes, Suiza</h5>
                        <p class="card-text">Descubre la magia de los Alpes suizos, un paraíso para los amantes de la montaña. Disfruta de impresionantes paisajes de picos nevados y encantadores pueblos alpinos. Realiza actividades como esquí, senderismo y paseos en teleférico, mientras te deleitas con la deliciosa gastronomía local. Los Alpes son el destino perfecto para una escapada llena de aventura y belleza natural.</p>
                        <a href="#" class="btn btn-primary">Más información</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de Paquetes Familiares -->
    <section id="paquetes-familiares" class="my-5">
        <h2 class="text-center mb-4">Paquetes Familiares</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="https://th.bing.com/th/id/R.a13d89ffd3dd30b02b8e1b41fc02558e?rik=qZBMLtLpd0ZE5g&pid=ImgRaw&r=0" class="card-img-top" alt="Paquete familiar">
                    <div class="card-body">
                        <h5 class="card-title">Vacaciones en Orlando</h5>
                        <p class="card-text">Disfruta con toda la familia de los parques temáticos de Disney y Universal Studios.</p>
                        <a href="#" class="btn btn-primary">Más información</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://th.bing.com/th/id/OIP.7HGSsVG1fJ7XFUqVgURO-wHaE8?rs=1&pid=ImgDetMain" class="card-img-top" alt="Paquete familiar">
                    <div class="card-body">
                        <h5 class="card-title">Diversión en Cancún</h5>
                        <p class="card-text">Un viaje todo incluido para disfrutar con los más pequeños en las mejores playas de México.</p>
                        <a href="#" class="btn btn-primary">Más información</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de Paquetes de Bajera -->
    <section id="paquetes-bajera" class="my-5">
        <h2 class="text-center mb-4">Paquetes de Pareja</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="https://cdn0.matrimonio.com.co/img_g/articulos-a-fotos/pareja-novios-boda-alianzas/barco-novios-besandose-crucero-fondo-y-montanas.jpg" class="card-img-top" alt="Paquete pareja">
                    <div class="card-body">
                        <h5 class="card-title">Crucero por el Mediterráneo</h5>
                        <p class="card-text">Relájate y disfruta de la vida en el mar, visitando las costas más hermosas de Europa.</p>
                        <a href="#" class="btn btn-primary">Más información</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://www.viajes-carrefour.com/blog/wp-content/uploads/2018/02/cruceros-por-el-caribe-y-antillas-pareja-crucero.jpg" class="card-img-top" alt="Paquete pareja">
                    <div class="card-body">
                        <h5 class="card-title">Aventura en el Caribe</h5>
                        <p class="card-text">Un crucero lleno de diversión, sol y playas caribeñas, perfecto para relajarse.</p>
                        <a href="#" class="btn btn-primary">Más información</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de Preguntas Frecuentes -->
    <section id="preguntas-frecuentes" class="my-5">
        <h2 class="text-center mb-4">Preguntas Frecuentes</h2>
        <div class="accordion" id="faqAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="faq1">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqOne" aria-expanded="true" aria-controls="faqOne">
                        ¿Cómo puedo reservar un paquete?
                    </button>
                </h2>
                <div id="faqOne" class="accordion-collapse collapse show" aria-labelledby="faq1" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Puedes reservar un paquete directamente en nuestro sitio web, seleccionando el destino de tu preferencia y siguiendo las instrucciones para el pago.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="faq2">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqTwo" aria-expanded="false" aria-controls="faqTwo">
                        ¿Puedo personalizar mi paquete de viaje?
                    </button>
                </h2>
                <div id="faqTwo" class="accordion-collapse collapse" aria-labelledby="faq2" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Sí, ofrecemos opciones de personalización. Puedes agregar o quitar servicios, elegir tus fechas de viaje, y seleccionar opciones de hospedaje de acuerdo a tus necesidades.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="faq3">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqThree" aria-expanded="false" aria-controls="faqThree">
                        ¿Qué métodos de pago aceptan?
                    </button>
                </h2>
                <div id="faqThree" class="accordion-collapse collapse" aria-labelledby="faq3" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Aceptamos pagos con tarjetas de crédito, débito y transferencias bancarias. También contamos con planes de financiamiento.
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php require_once("vista/layout/footer.php"); ?>