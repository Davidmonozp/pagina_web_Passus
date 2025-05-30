<?php include('includes/_head.php'); ?>
<link rel="stylesheet" type="text/css" href="styles/elements.css?v=2.2">
<link rel="stylesheet" type="text/css" href="styles/elements_responsive.css?v=1.1">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css?v=1.9">
<link rel="stylesheet" type="text/css" href="styles/core.css?v=2.1">
<link rel="stylesheet" type="text/css" href="styles/responsive.css?v=1.2">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="styles/servicios.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>




<body>

    <!-- FONDO IMAGEN PRUEBA #0F283F
COLOR AZUL ORIGINAL #57ccc3
COLOR AZUL PASSUS #3695eb 
COLOR VERDE PASSUS #00A54F -->


    <div class="super_container">

        <?php include('includes/_header.php'); ?>
        <?php include('includes/accesibilidad.php'); ?>
        <?php include('includes/_boton_whatsapp.php'); ?>

        <section class="hero-banner">
            <div class="hero-overlay">
                <h1>Servicios Passus IPS
                    <hr>
                </h1>
                <a href="servicios_passus_divertido.php">
                    <button class="reflected-button">Servicios Passus Bienestar</button>
                </a>
                <!-- <button class="reflected-button">Passus Divertido</button> -->
            </div>
        </section>

        <!-- HIDROTERAPIA -->
        <div class="faq-grid-container" id="hidroterapia">
            <div class="faq-grid-text">
                <h2>Hidroterapia
                    <hr>
                </h2>
                <p>
                    Conocida como terapia hídrica, utiliza el agua para facilitar tu recuperación física y aliviar el dolor. <br>
                    En nuestras piscinas especializadas, realizamos ejercicios y terapias que aprovechan la temperatura y flotabilidad del agua para mejorar tu movilidad, reducir la inflamación y promover la relajación muscular.
                </p>
                <div class="faq-accordion">
                    <div class="faq-accordion-item">
                        <button id="faq-accordion-button-2" aria-expanded="false">
                            <span class="faq-accordion-title">¿Cuál es su propósito general?</span>
                            <span class="faq-icon" aria-hidden="true"></span>
                        </button>
                        <div class="faq-accordion-content">
                            <ul>
                                <li>
                                    Calmante: Terapia sedativa para disminuir el dolor.
                                </li>
                                <li>
                                    Tonificación: Fortalecimiento y Resistencia Muscular.
                                </li>
                                <li>
                                    Flexibiliza: Mejora el rango de movimiento corporal
                                </li>
                                <li>
                                    Estimulación Cardiopulmonar: Activa la circulación sanguínea.
                                </li>
                                <li>
                                    Ánimo: Disminuye la ansiedad, depresión y otros trastornos del estado de ánimo.
                                </li>
                                <li>
                                    Socio-Emocional: Autoestima, bienestar, conexión social y gestión emocional
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- <div class="faq-accordion-item">
                        <button id="faq-accordion-button-2" aria-expanded="false">
                            <span class="faq-accordion-title">¿Por qué elegirnos?</span>
                            <span class="faq-icon" aria-hidden="true"></span>
                        </button>
                        <div class="faq-accordion-content">
                            <ul>
                                <li>Por el acompañamiento médico especializado.</li>
                                <li>Por la trayectoria que hemos construido en Colombia abordando integralmente las situaciones de Discapacidad Definitiva Cognitiva-Comportamental.
                                </li>
                                <li>Por nuestro enfoque basado en la excelencia y gestión del riesgo.</li>
                            </ul>
                        </div>
                    </div> -->
                </div>
            </div>
            <div class="faq-grid-image">
                <img src="images/img-servicios/hidroterapia_PassusIPS.jpg" alt="Imagen de hidroterapia">
            </div>
        </div>
        <!-- FIN HIDROTERAPIA -->

        <!-- REHABILITACION -->
        <div class="faq-grid-container" id="rehabilitacion">
            <div class="faq-grid-image">
                <img id="rehabilitacion-image" src="images/img-servicios/rehabilitacion_PassusIPS.png" alt="Imagen de rehabilitacion">
            </div>
            <div class="faq-grid-text">
                <h2>Programa de Rehabilitación Integral
                    <hr>
                </h2>
                <p>
                    Nuestro programa de Rehabilitación Integral para la Discapacidad, enfocado en mejorar la calidad de vida y fomentar la autonomía de niños y adolescentes. <br>

                    Ofrecemos circuitos terapéuticos grupales que articulan fisioterapia, terapia ocupacional, fonoaudiología y psicología, con un equipo especializado en psiquiatría infantil, neurología pediátrica y fisiatría.
                </p>
                <div class="faq-accordion">
                    <div class="faq-accordion-item">
                        <button
                            id="faq-accordion-button-2"
                            aria-expanded="false"
                            data-target-image="rehabilitacion-image"
                            data-expanded-src="images/img-servicios/terapiaFisica_PassusIPS.png"
                            data-expanded-alt="Imagen de terapia fisica"
                            data-initial-src="images/img-servicios/rehabilitacion_PassusIPS.png"
                            data-initial-alt="Imagen de RH">
                            <span class="faq-accordion-title">Terapia física</span>
                            <span class="faq-icon" aria-hidden="true"></span>
                        </button>
                        <div class="faq-accordion-content">
                            <p>
                                La terapia física es un tratamiento que usa el movimiento y ejercicios especiales para ayudar a las personas a recuperar fuerza, equilibrio y flexibilidad. Es ideal para quienes han tenido una lesión, cirugía o padecen dolores crónicos y buscan mejorar su calidad de vida de forma segura y guiada.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="faq-accordion">
                    <div class="faq-accordion-item">
                        <button
                            id="faq-accordion-button-2"
                            aria-expanded="false"
                            data-target-image="rehabilitacion-image"
                            data-expanded-src="images/img-servicios/terapiaOcupacional_PassusIPS.png"
                            data-expanded-alt="Imagen de terapia ocupacional"
                            data-initial-src="images/img-servicios/rehabilitacion_PassusIPS.png"
                            data-initial-alt="Imagen de RH">
                            <span class="faq-accordion-title">Terapia ocupacional</span>
                            <span class="faq-icon" aria-hidden="true"></span>
                        </button>
                        <div class="faq-accordion-content">
                            <p>
                                Es un componente esencial del programa de rehabilitación integral, diseñado para ayudar a los pacientes a recuperar su independencia y mejorar su calidad de vida. <br>

                                Con un enfoque personalizado, trabajamos en el desarrollo de habilidades motoras, cognitivas y sensoriales necesarias para enfrentar los desafíos del día a día. <br>

                                Nuestro equipo especializado utiliza técnicas modernas que permiten alcanzar metas funcionales y reintegrarse a las actividades cotidianas con confianza.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="faq-accordion">
                    <div class="faq-accordion-item">
                        <button
                            id="faq-accordion-button-2"
                            aria-expanded="false"
                            data-target-image="rehabilitacion-image"
                            data-expanded-src="images/img-servicios/psicologia_PassusIPS.png"
                            data-expanded-alt="Imagen de psicologia"
                            data-initial-src="images/img-servicios/rehabilitacion_PassusIPS.png"
                            data-initial-alt="Imagen de RH">
                            <span class="faq-accordion-title">Psicología</span>
                            <span class="faq-icon" aria-hidden="true"></span>
                        </button>
                        <div class="faq-accordion-content">
                            <p>
                                En Passus, ofrecemos servicios de psicología, una disciplina que estudia el comportamiento y los procesos mentales humanos de manera científica. <br>

                                Nos enfocamos en comprender cómo piensan, sienten y actúan las personas, explorando las emociones y motivaciones que impulsan sus acciones. <br>

                                Al explorar estos misterios, nuestra labor permite a los pacientes comprenderse mejor a sí mismos y a los demás, proporcionándoles herramientas que mejoran su calidad de vida y promueven relaciones más saludables.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="faq-accordion">
                    <div class="faq-accordion-item">
                        <button
                            id="faq-accordion-button-2"
                            aria-expanded="false"
                            data-target-image="rehabilitacion-image"
                            data-expanded-src="images/img-servicios/fonoaudiologia_PassusIPS.png"
                            data-expanded-alt="Imagen de fonoaudiologia"
                            data-initial-src="images/img-servicios/rehabilitacion_PassusIPS.png"
                            data-initial-alt="Imagen de RH">
                            <span class="faq-accordion-title">Fonoaudiología</span>
                            <span class="faq-icon" aria-hidden="true"></span>
                        </button>
                        <div class="faq-accordion-content">
                            <p>
                                Enfocada en mejorar la comunicación, el lenguaje y las funciones orales esenciales para la alimentación y el habla. <br>

                                A través de sesiones personalizadas, nuestros expertos ayudan a los pequeños a superar dificultades, recuperar habilidades y fortalecer su calidad de vida.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FIN REHABILITACION -->

        <!-- CONSULTA EXTERNA -->
        <div class="faq-grid-container" id="consulta_externa">
            <div class="faq-grid-text">
                <h2>Consulta externa
                    <hr>
                </h2>
                <p>
                    En nuestra consulta externa de supraespecialidades, te ofrecemos atención médica avanzada con profesionales altamente capacitados en áreas específicas como neuropediatría, psiquiatría infantil y de adolescentes y fisiatría. Está dirigida a pacientes que requieren un enfoque clínico más profundo y personalizado.
                </p>
                <div class="faq-accordion">
                    <div class="faq-accordion-item">
                        <button
                            id="faq-accordion-button-2"
                            aria-expanded="false"
                            data-target-image="consultaExterna-image"
                            data-expanded-src="images/img-servicios/neuropediatria_PassusIPS.png"
                            data-expanded-alt="Imagen de fonoaudiologia"
                            data-initial-src="images/img-servicios/consulta_externa.png"
                            data-initial-alt="Imagen de consulta externa">
                            <span class="faq-accordion-title">Neuropediatría</span>
                            <span class="faq-icon" aria-hidden="true"></span>
                        </button>
                        <div class="faq-accordion-content">
                            <p>
                                Ofrecemos un servicio especializado en el diagnóstico y tratamiento de trastornos neurológicos en niños, desde recién nacidos hasta adolescentes.
                            </p>
                            <p>
                                Nuestros neuropediatras están capacitados para manejar una amplia gama de condiciones, incluyendo trastornos del desarrollo, epilepsia, trastornos del aprendizaje y trastornos del movimiento.
                            </p>
                            <p>
                                Con un enfoque específico en las necesidades neurológicas únicas de los niños, en Passus nos comprometemos a brindar atención integral y personalizada para promover su salud y bienestar.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="faq-accordion">
                    <div class="faq-accordion-item">
                        <button
                            id="faq-accordion-button-2"
                            aria-expanded="false"
                            data-target-image="consultaExterna-image"
                            data-expanded-src="images/img-servicios/psiquiatria_PassusIPS.png"
                            data-expanded-alt="Imagen de psiquiatría infantil y adolescente"
                            data-initial-src="images/img-servicios/consulta_externa.png"
                            data-initial-alt="Imagen de consulta externa">
                            <span class="faq-accordion-title">Psiquiatría infantil y adolescente</span>
                            <span class="faq-icon" aria-hidden="true"></span>
                        </button>
                        <div class="faq-accordion-content">
                            <p>
                                Ofrecemos un servicio especializado en la evaluación, diagnóstico y tratamiento de trastornos mentales en niños y adolescentes. <br>

                                Nuestros psiquiatras infantiles abordan problemas emocionales, conductuales y de desarrollo, brindando apoyo integral para ayudar a los jóvenes a alcanzar su máximo potencial y bienestar emocional. <br>

                                En Passus, nos comprometemos a crear un entorno seguro y acogedor para que cada niño y adolescente reciba la atención que necesita.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="faq-accordion">
                    <div class="faq-accordion-item">
                        <button
                            id="faq-accordion-button-2"
                            aria-expanded="false"
                            data-target-image="consultaExterna-image"
                            data-expanded-src="images/img-servicios/fisiatria_PassusIPS.png"
                            data-expanded-alt="Imagen de fisiatria"
                            data-initial-src="images/img-servicios/consulta_externa.png"
                            data-initial-alt="Imagen de consulta externa">
                            <span class="faq-accordion-title">Fisiatría</span>
                            <span class="faq-icon" aria-hidden="true"></span>
                        </button>
                        <div class="faq-accordion-content">
                            <p>
                                La fisiatría es una especialidad médica apasionante que se centra en la rehabilitación física de personas que han sufrido lesiones o enfermedades que afectan su movilidad y función. <br>

                                En Passus, nuestros fisiatras utilizan una variedad de terapias para ayudar a los pacientes a recuperar su independencia y mejorar su calidad de vida. <br>

                                Cada tratamiento está diseñado de manera personalizada, guiando a los pacientes en su camino hacia la recuperación y empoderándolos para que vuelvan a disfrutar de sus actividades diarias con confianza y vitalidad.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="faq-grid-image">
                <img id="consultaExterna-image" src="images/img-servicios/consulta_externa.png" alt="Imagen de consulta externa">
            </div>
        </div>
        <!-- FIN CONSULTA EXTERNA -->

        <!-- FISIATRIA -->
        <!-- <div class="faq-grid-container" id="fisiatria">
            <div class="faq-grid-text">
                <h2>Fisiatría
                    <hr>
                </h2>
                <p>
                    La fisiatría es una especialidad médica apasionante que se centra en la rehabilitación física de personas que han sufrido lesiones o enfermedades que afectan su movilidad y función. <br>

                    En Passus, nuestros fisiatras utilizan una variedad de terapias para ayudar a los pacientes a recuperar su independencia y mejorar su calidad de vida. <br>

                    Cada tratamiento está diseñado de manera personalizada, guiando a los pacientes en su camino hacia la recuperación y empoderándolos para que vuelvan a disfrutar de sus actividades diarias con confianza y vitalidad.
                </p>
                <div class="faq-accordion">
                    <!-- <div class="faq-accordion-item">
                        <button id="faq-accordion-button-1" aria-expanded="false">
                            <span class="faq-accordion-title">¿Qúe es?</span>
                            <span class="faq-icon" aria-hidden="true"></span>
                        </button>
                        <div class="faq-accordion-content">
                            <p>
                                La fisiatría es una especialidad médica apasionante que se centra en la rehabilitación física de personas que han sufrido lesiones o enfermedades que afectan su movilidad y función. <br>

                                En Passus, nuestros fisiatras utilizan una variedad de terapias para ayudar a los pacientes a recuperar su independencia y mejorar su calidad de vida. <br>

                                Cada tratamiento está diseñado de manera personalizada, guiando a los pacientes en su camino hacia la recuperación y empoderándolos para que vuelvan a disfrutar de sus actividades diarias con confianza y vitalidad.
                            </p>
                        </div>
                    </div> -->
        <!-- <div class="faq-accordion-item">
                        <button id="faq-accordion-button-2" aria-expanded="false">
                            <span class="faq-accordion-title">¿Cuáles son sus beneficios?</span>
                            <span class="faq-icon" aria-hidden="true"></span>
                        </button>
                        <div class="faq-accordion-content">
                            <ul>
                                <li>Ayuda a recuperar el movimiento tras lesiones, cirugías o enfermedades neurológicas.</li>
                                <li>Trata dolores crónicos y agudos sin depender exclusivamente de medicamentos.</li>
                                <li>Interviene tempranamente para evitar la progresión de limitaciones funcionales.</li>
                                <li>Ayuda al paciente a retomar sus actividades diarias y a recuperar su independencia.</li>
                                <li>Facilita la reincorporación al trabajo, la escuela o la vida comunitaria.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="faq-accordion-item">
                        <button id="faq-accordion-button-2" aria-expanded="false">
                            <span class="faq-accordion-title">¿Por qué elegirnos?</span>
                            <span class="faq-icon" aria-hidden="true"></span>
                        </button>
                        <div class="faq-accordion-content">
                            <ul>
                                <li>Por el acompañamiento médico especializado.</li>
                                <li>Por la trayectoria que hemos construido en Colombia abordando integralmente las situaciones de Discapacidad Definitiva Cognitiva-Comportamental.
                                </li>
                                <li>Por nuestro enfoque basado en la excelencia y gestión del riesgo.</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <div class="faq-grid-image">
                <img src="images/img-servicios/Fisiatría_PassusIPS.png" alt="Imagen de hidroterapia">
            </div>
        </div>  -->
        <!-- FIN FISIATRIA -->

        <!-- NEUROPEDIATRIA -->
        <!-- <div class="faq-grid-container" id="neuropediatria">
            <div class="faq-grid-image">
                <img src="images/img-servicios/Neuropediatra_PassusIPS.jpg" alt="Imagen de hidroterapia">
            </div>
            <div class="faq-grid-text">
                <h2>Neuropediatría
                    <hr>
                </h2>
                <p>
                    La neuropediatría es la rama de la medicina que estudia y trata los problemas del sistema nervioso en niños y adolescentes. <br>Esto incluye trastornos del cerebro, la médula espinal, los nervios y los músculos. El objetivo principal es detectar y tratar condiciones neurológicas desde edades tempranas para favorecer un desarrollo adecuado.
                </p>
                <div class="faq-accordion">
                     <div class="faq-accordion-item">
                        <button id="faq-accordion-button-1" aria-expanded="false">
                            <span class="faq-accordion-title">¿Qúe es?</span>
                            <span class="faq-icon" aria-hidden="true"></span>
                        </button>
                        <div class="faq-accordion-content">
                            <p>
                                La neuropediatría es la rama de la medicina que estudia y trata los problemas del sistema nervioso en niños y adolescentes. <br>Esto incluye trastornos del cerebro, la médula espinal, los nervios y los músculos. El objetivo principal es detectar y tratar condiciones neurológicas desde edades tempranas para favorecer un desarrollo adecuado.
                            </p>
                        </div>
                    </div> -->
        <!-- <div class="faq-accordion-item">
                        <button id="faq-accordion-button-2" aria-expanded="false">
                            <span class="faq-accordion-title">¿Qué ofrecemos?</span>
                            <span class="faq-icon" aria-hidden="true"></span>
                        </button>
                        <div class="faq-accordion-content">
                            <ul>
                                <li> Ofrecemos un servicio especializado en el diagnóstico y tratamiento de trastornos neurológicos en niños, desde recién nacidos hasta adolescentes.</li>
                                <li> Nuestros neuropediatras están capacitados para manejar una amplia gama de condiciones, incluyendo trastornos del desarrollo, epilepsia, trastornos del aprendizaje y trastornos del movimiento.</li>
                                <li>Enfoque específico en las necesidades neurológicas únicas de los niños, en Passus nos comprometemos a brindar atención integral y personalizada para promover su salud y bienestar.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="faq-accordion-item">
                        <button id="faq-accordion-button-2" aria-expanded="false">
                            <span class="faq-accordion-title">¿Por qué es importante?</span>
                            <span class="faq-icon" aria-hidden="true"></span>
                        </button>
                        <div class="faq-accordion-content">
                            <p>Porque el sistema nervioso infantil está en constante desarrollo, y una intervención temprana puede mejorar significativamente la calidad de vida y el pronóstico del niño.</p>
                        </div>
                    </div>
                    <div class="faq-accordion-item">
                        <button id="faq-accordion-button-2" aria-expanded="false">
                            <span class="faq-accordion-title">¿Por qué elegirnos?</span>
                            <span class="faq-icon" aria-hidden="true"></span>
                        </button>
                        <div class="faq-accordion-content">
                            <ul>
                                <li>Por el acompañamiento médico especializado.</li>
                                <li>Por la trayectoria que hemos construido en Colombia abordando integralmente las situaciones de Discapacidad Definitiva Cognitiva-Comportamental.
                                </li>
                                <li>Por nuestro enfoque basado en la excelencia y gestión del riesgo.</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>  -->
        <!-- FIN NEUROPEDIATRIA -->

        <!-- NEUROPSICOLOGIA -->
        <!-- <div class="faq-grid-container" id="neuropsicologia">
            <div class="faq-grid-image">
                <img src="images/img-servicios/Neuropediatra_PassusIPS.jpg" alt="Imagen de hidroterapia">
            </div>
            <div class="faq-grid-text">
                <h2>Neuropsicología
                    <hr>
                </h2>
                <p>
                    La neuropediatría es la rama de la medicina que estudia y trata los problemas del sistema nervioso en niños y adolescentes. <br>Esto incluye trastornos del cerebro, la médula espinal, los nervios y los músculos. El objetivo principal es detectar y tratar condiciones neurológicas desde edades tempranas para favorecer un desarrollo adecuado.
                </p>
                <div class="faq-accordion">               
                    <div class="faq-accordion-item">
                        <button id="faq-accordion-button-2" aria-expanded="false">
                            <span class="faq-accordion-title">¿Qué ofrecemos?</span>
                            <span class="faq-icon" aria-hidden="true"></span>
                        </button>
                        <div class="faq-accordion-content">
                            <ul>
                                <li> Ofrecemos un servicio especializado en el diagnóstico y tratamiento de trastornos neurológicos en niños, desde recién nacidos hasta adolescentes.</li>
                                <li> Nuestros neuropediatras están capacitados para manejar una amplia gama de condiciones, incluyendo trastornos del desarrollo, epilepsia, trastornos del aprendizaje y trastornos del movimiento.</li>
                                <li>Enfoque específico en las necesidades neurológicas únicas de los niños, en Passus nos comprometemos a brindar atención integral y personalizada para promover su salud y bienestar.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="faq-accordion-item">
                        <button id="faq-accordion-button-2" aria-expanded="false">
                            <span class="faq-accordion-title">¿Por qué es importante?</span>
                            <span class="faq-icon" aria-hidden="true"></span>
                        </button>
                        <div class="faq-accordion-content">
                            <p>Porque el sistema nervioso infantil está en constante desarrollo, y una intervención temprana puede mejorar significativamente la calidad de vida y el pronóstico del niño.</p>
                        </div>
                    </div>
                    <div class="faq-accordion-item">
                        <button id="faq-accordion-button-2" aria-expanded="false">
                            <span class="faq-accordion-title">¿Por qué elegirnos?</span>
                            <span class="faq-icon" aria-hidden="true"></span>
                        </button>
                        <div class="faq-accordion-content">
                            <ul>
                                <li>Por el acompañamiento médico especializado.</li>
                                <li>Por la trayectoria que hemos construido en Colombia abordando integralmente las situaciones de Discapacidad Definitiva Cognitiva-Comportamental.
                                </li>
                                <li>Por nuestro enfoque basado en la excelencia y gestión del riesgo.</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div> -->
        <!-- FIN NEUROPSICOLOGIA -->



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