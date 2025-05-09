<?php include('includes/_head.php'); ?>
<link rel="stylesheet" type="text/css" href="styles/elements.css?v=2.2">
<link rel="stylesheet" type="text/css" href="styles/elements_responsive.css?v=1.1">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css?v=1.9">
<link rel="stylesheet" type="text/css" href="styles/core.css?v=2.1">
<link rel="stylesheet" type="text/css" href="styles/responsive.css?v=1.2">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="styles/servicios.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>




<body>

    <!-- FONDO IMAGEN PRUEBA #0F283F
COLOR AZUL ORIGINAL #57ccc3
COLOR AZUL PASSUS #3695eb 
COLOR VERDE PASSUS #00A54F -->


    <div class="super_container">

        <?php include('includes/_header.php'); ?>
        <?php include('includes/accesibilidad.php'); ?>

        <section class="hero-banner-divertido">
            <div class="hero-overlay">
                <h1>Servicios Passus Divertido
                    <hr>
                </h1>
                <a href="servicios_passusIPS.php">
                    <button class="reflected-button">Servicios Passus IPS</button>
                </a>
            </div>
        </section>

        <!-- ACUAMOTRICIDAD -->
        <div class="faq-grid-container" id="acuamotricidad">
            <div class="faq-grid-text">
                <h2>Acuamotricidad
                    <hr>
                </h2>
                <p>
                    Ofrecemos un servicio de acuamotricidad, una actividad acuática diseñada para bebés y sus padres. <br>

                    Durante nuestras sesiones, realizamos ejercicios y juegos en el agua con el objetivo de promover el desarrollo físico y sensorial del bebé, al mismo tiempo que fortalecemos el vínculo entre padres e hijos.
                </p>
                <div class="faq-accordion">
                    <div class="faq-accordion-item">
                        <button id="faq-accordion-button-2" aria-expanded="false">
                            <span class="faq-accordion-title">Beneficios de la acuamotricidad</span>
                            <span class="faq-icon" aria-hidden="true"></span>
                        </button>
                        <div class="faq-accordion-content">
                            <ul>
                                <li>
                                    Mejora el desarrollo psicomotor del niño en un medio relajante y sin presiones.
                                </li>
                                <li>
                                    Refuerza el lazo afectivo mediante el contacto físico y la interacción constante.
                                </li>
                                <li>
                                    Genera confianza y seguridad emocional en el niño.
                                </li>
                                <li>
                                    Proporciona un espacio lúdico para disfrutar juntos y crear recuerdos positivos.
                                </li>
                                <li>
                                    Ayuda a regular el sueño, el apetito y el estado de ánimo del bebé.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="faq-grid-image">
                <img src="images/img-servicios/acuamotricidad_passusDivertido.png" alt="Imagen de acuamotricidad">
            </div>
        </div>
        <!-- FIN ACUAMOTRICIDAD -->

        <!-- NATACION -->
        <div class="faq-grid-container" id="natacion">
            <div class="faq-grid-image">
                <img id="natacion-image" src="images/img-servicios/natacion_passusDivertido.png" alt="Imagen de natación">
            </div>
            <div class="faq-grid-text">
                <h2>Natación
                    <hr>
                </h2>
                <p>
                    La natación es una actividad que permite mover y ejercitar el cuerpo dentro del agua, combinando salud, diversión y aprendizaje. Es una de las disciplinas más completas, ya que trabaja todo el cuerpo, mejora la respiración y fortalece la mente, todo esto sin generar impacto en las articulaciones, lo que la hace ideal para personas de todas las edades.
                </p>
                <div class="faq-accordion">
                    <div class="faq-accordion-item">
                        <button
                            id="faq-accordion-button-natacion-infantil"
                            aria-expanded="false"
                            data-target-image="natacion-image"
                            data-expanded-src="images/img-servicios/natacionInfantil_divertido.png"
                            data-expanded-alt="Imagen de natación infantil"
                            data-initial-src="images/img-servicios/natacion_passusDivertido.png"
                            data-initial-alt="Imagen de natación">
                            <span class="faq-accordion-title">Natación infantil</span>
                            <span class="faq-icon" aria-hidden="true"></span>
                        </button>
                        <div class="faq-accordion-content">
                            <p>
                                Ofrecemos un servicio de natación infantil, que se enfoca en la enseñanza y práctica de habilidades acuáticas para niños desde temprana edad. <br>
                                Nuestro objetivo es familiarizar a los pequeños con el agua, enseñarles técnicas básicas de natación y promover la seguridad en el entorno acuático. <br>
                                ¡Motivamos el desarrollo físico adecuado y la autoestima de nuestros niños y niñas, mientras se divierten y disfrutan a través de la natación!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="faq-accordion">
                    <div class="faq-accordion-item">
                        <button
                            id="faq-accordion-button-natacion-adultos"
                            aria-expanded="false"
                            data-target-image="natacion-image"
                            data-expanded-src="images/img-servicios/natacionAdultos_passusDivertido.png"
                            data-expanded-alt="Imagen de natación Adultos"
                            data-initial-src="images/img-servicios/natacion_passusDivertido.png"
                            data-initial-alt="Imagen de natación">
                            <span class="faq-accordion-title">Natación jóvenes y adultos</span>
                            <span class="faq-icon" aria-hidden="true"></span>
                        </button>
                        <div class="faq-accordion-content">
                            <p>
                                Ofrecemos un servicio de natación diseñado para jóvenes y adultos que buscan aprender a nadar, mejorar su técnica de nado o simplemente disfrutar de la natación como ejercicio físico y recreativo. <br>
                                Nuestras clases se adaptan a las necesidades individuales de cada participante, con niveles de dificultad que van desde principiantes hasta avanzados.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="faq-accordion">
                    <div class="faq-accordion-item">
                        <button id="faq-accordion-button-natacion-beneficios" aria-expanded="false">
                            <span class="faq-accordion-title">Beneficios de la natación</span>
                            <span class="faq-icon" aria-hidden="true"></span>
                        </button>
                        <div class="faq-accordion-content">
                            <ul>
                                <li>
                                    En niños, estimula el desarrollo psicomotor y la autonomía.
                                </li>
                                <li>
                                    Mejora la coordinación, el equilibrio y la resistencia física.
                                </li>
                                <li>
                                    Fortalece el sistema cardiovascular y respiratorio.
                                </li>
                                <li>
                                    Favorece la postura y el tono muscular.
                                </li>
                                <li>
                                    Reduce el estrés y promueve la relajación.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FIN NATACION -->

        <!-- YOGA -->
        <div class="faq-grid-container" id="yoga">
            <div class="faq-grid-text">
                <h2>Yoga
                    <hr>
                </h2>
                <p>
                    Clases de yoga diseñadas para mejorar tu bienestar físico y mental. Con un enfoque integral, nuestras sesiones están pensadas para personas de todos los niveles, desde principiantes hasta avanzados.
                </p>
                <div class="faq-accordion">
                    <div class="faq-accordion-item">                       
                        <button
                            id="faq-accordion-button-yoga-acuatico"
                            aria-expanded="false"
                            data-target-image="yoga-image"
                            data-expanded-src="images/img-servicios/yogaAcuatico_passusDivertido.png"
                            data-expanded-alt="Imagen de yoga acuatico"
                            data-initial-src="images/img-servicios/yoga_passusDivertido.png"
                            data-initial-alt="Imagen de yoga">
                            <span class="faq-accordion-title">Yoga acuático</span>
                            <span class="faq-icon" aria-hidden="true"></span>
                        </button>
                        <div class="faq-accordion-content">
                            <p>
                                Clases de yoga diseñadas para mejorar tu bienestar físico y mental. Con un enfoque integral, nuestras sesiones están pensadas para personas de todos los niveles, desde principiantes hasta avanzados.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="faq-grid-image">
                <img id="yoga-image" src="images/img-servicios/yoga_passusDivertido.png" alt="Imagen de yoga">
            </div>
        </div>
        <!-- FIN YOGA -->

        <!-- MINDFULNESS -->
        <div class="faq-grid-container" id="mindfulness">
            <div class="faq-grid-image">
                <img src="images/img-servicios/mindfulness_passusDivertido.png" alt="Imagen de mindfulness">
            </div>
            <div class="faq-grid-text">
                <h2>Mindfulness
                    <hr>
                </h2>
                <p>
                    Mindfulness, o atención plena, es una práctica que nos invita a estar presentes en el momento actual, observando nuestros pensamientos, emociones y sensaciones sin juicio.

                    Practicar Mindfulness nos ayuda a manejar las demandas diarias con calma y claridad, promoviendo una mayor paz interior y equilibrio emocional.
                </p>
                <div class="faq-accordion">
                    <div class="faq-accordion-item">
                        <button id="faq-accordion-button-2" aria-expanded="false">
                            <span class="faq-accordion-title">¿Cuáles son sus beneficios?</span>
                            <span class="faq-icon" aria-hidden="true"></span>
                        </button>
                        <div class="faq-accordion-content">
                            <ul>
                                <li>Reduce el estrés y la ansiedad, al ayudarte a estar presente sin sobrepensar el pasado o el futuro.</li>
                                <li>Mejora la concentración y la capacidad de enfocarse en una tarea a la vez.</li>
                                <li>Favorece el equilibrio emocional, ayudando a manejar mejor las emociones difíciles.</li>
                                <li>Disminuye síntomas de depresión y mejora el estado de ánimo general.</li>
                                <li>Promueve un sueño más reparador al calmar la mente antes de dormir.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FIN MINDFULNESS -->

        <!-- PILATES -->
        <div class="faq-grid-container" id="pilates">
            <div class="faq-grid-text">
                <h2>Pilates
                </h2>
                <p>
                    Mejora la fuerza, flexibilidad y postura a través de movimientos controlados. Ideal para tonificar el cuerpo, prevenir lesiones y promover el bienestar general. <br>

                    El Pilates es adecuado para todos los niveles y te ayudará a desarrollar una mayor conciencia corporal.
                </p>
                <div class="faq-accordion">
                    <div class="faq-accordion-item">
                        <button
                            id="faq-accordion-button-2"
                            aria-expanded="false"
                            data-target-image="pilates-image"
                            data-expanded-src="images/img-servicios/pilatesAcuatico_passusDivertido.png"
                            data-expanded-alt="Imagen de pilates acuático"
                            data-initial-src="images/img-servicios/pilates_passusDivertido.png"
                            data-initial-alt="Imagen de pilates">
                            <span class="faq-accordion-title">Pilates acuático</span>
                            <span class="faq-icon" aria-hidden="true"></span>
                        </button>
                        <div class="faq-accordion-content">
                            <p>
                                El Pilates acuático combina los principios del Pilates con la resistencia del agua, ofreciendo una forma suave pero efectiva de tonificar y fortalecer el cuerpo.

                                Ideal para mejorar la flexibilidad, equilibrio y postura, el Pilates acuático reduce el impacto en las articulaciones, lo que lo convierte en una opción perfecta para todas las edades y niveles de habilidad.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="faq-grid-image">
                <img id="pilates-image" src="images/img-servicios/pilates_passusDivertido.png" alt="Imagen de mindfulness">
            </div>
        </div>
        <!-- FIN PILATES -->

        <!-- Footer -->
        <?php include('includes/_footer.php'); ?>

    </div>


    <?php include('includes/_js.php'); ?>
    <script src="js/elements.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/accesibilidad.js"></script>
    <script src="js/servicios.js"></script>
    <script type="text/javascript">
        $('#modal-aviso').modal('show')
    </script>



</body>

</html>