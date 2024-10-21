<?php require_once("layout/header.php"); ?>
<div class="container my-5">
    <h1 class="text-center">Centro de Ayuda</h1>
    <p class="text-center lead">Estamos aquí para ayudarte. Encuentra respuestas a tus preguntas o contáctanos directamente.</p>

    <!-- Sección de Preguntas Frecuentes -->
    <section id="preguntas-frecuentes" class="my-5">
        <h2 class="text-center mb-4">Preguntas Frecuentes</h2>
        <div class="accordion" id="faqAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        ¿Cómo puedo realizar una reserva?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Puedes realizar una reserva en nuestro sitio web seleccionando el paquete que deseas y siguiendo las instrucciones en pantalla. Si necesitas ayuda, no dudes en contactarnos.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        ¿Qué métodos de pago aceptan?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Aceptamos varios métodos de pago, incluyendo tarjetas de crédito y débito, PayPal y transferencias bancarias. Para más detalles, consulta nuestra sección de pagos.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        ¿Puedo cancelar mi reserva?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Sí, puedes cancelar tu reserva siguiendo las instrucciones en nuestra política de cancelación. Asegúrate de revisar los plazos y las condiciones aplicables.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de Contacto -->
    <section id="contacto" class="my-5">
        <h2 class="text-center mb-4">Contáctanos</h2>
        <p class="text-center">Si no encuentras la respuesta a tu pregunta, no dudes en ponerte en contacto con nosotros. Estaremos encantados de ayudarte.</p>
        <ul class="list-unstyled">
            <li><strong>Teléfono:</strong> 961 999 99 99</li>
            <li><strong>Email:</strong> carlos.serrano73@unach.mx</li>
            <li><strong>Horario de Atención:</strong> Lunes a Viernes de 9:00 AM a 6:00 PM</li>
        </ul>
    </section>

    <!-- Sección de Recursos Útiles -->
    <section id="recursos-utiles" class="my-5">
        <h2 class="text-center mb-4">Recursos Útiles</h2>
        <p class="text-center">Visita nuestras secciones de promociones, paquetes y destinos para obtener más información sobre nuestras ofertas y servicios.</p>
        <ul class="list-unstyled text-center">
            <li><a href="promociones.php">Promociones Especiales</a></li>
            <li><a href="paquetes.php">Paquetes de Viaje</a></li>
            <li><a href="#">Guías de Destinos</a></li>
        </ul>
    </section>
</div>
<?php require_once("layout/footer.php"); ?>