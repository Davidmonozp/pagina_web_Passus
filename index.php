<?php include('includes/_head.php'); ?>
<link rel="stylesheet" type="text/css" href="styles/elements.css?v=2.2">
<link rel="stylesheet" type="text/css" href="styles/elements_responsive.css?v=1.1">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css?v=1.9">
<link rel="stylesheet" type="text/css" href="styles/core.css?v=2.1">
<link rel="stylesheet" type="text/css" href="styles/responsive.css?v=1.2">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">



<body>

    <!-- FONDO IMAGEN PRUEBA #0F283F
COLOR AZUL ORIGINAL #57ccc3
COLOR AZUL PASSUS #3695eb 
COLOR VERDE PASSUS #00A54F -->


    <div class="super_container">

        <?php include('includes/_header.php'); ?>
        <?php include('includes/accesibilidad.php'); ?>


        <!-- Home -->

        <div class="home" id="home">

            <!-- Home Slider -->
            <div class="home_slider_container">
                <div class="owl-carousel owl-theme home_slider">

                    <!-- Slide -->
                    <div class="owl-item">
                        <div class="background_image">
                            <img class="imgcarousel" src="images/Banner - 1.jpg">
                        </div>                     
                    </div>


                    <!-- Slide -->
                    <div class="owl-item">
                        <div class="background_image"><img class="imgcarousel" src="images/Banner - 2.jpg"></div>                       
                    </div>

                    <div class="owl-item">
                        <div class="background_image"><img class="imgcarousel" src="images/Banner - 3.jpg"></div>
                    </div>
                    <div class="owl-item">
                        <div class="background_image"><img class="imgcarousel" src="images/Banner - 4.jpg"></div>                       
                    </div>
                    <div class="owl-item">
                        <div class="background_image"><img class="imgcarousel" src="images/Banner - 5.jpg"></div>                        
                    </div>
                    

                    <div class="owl-item">
                        <div class="background_image"><img class="imgcarousel" src="images/Banner - 6.jpg"></div>                      
                    </div>                  
                </div>                
            </div>

            <!-- Home Slider Dots -->

            <div class="home_slider_dots">
                <ul id="home_slider_custom_dots" class="home_slider_custom_dots d-flex flex-row align-items-center justify-content-start">
                    <li class="home_slider_custom_dot trans_200 active"></li>
                    <li class="home_slider_custom_dot trans_200"></li>
                    <li class="home_slider_custom_dot trans_200"></li>
                    <li class="home_slider_custom_dot trans_200"></li>
                    <li class="home_slider_custom_dot trans_200"></li>
                    <li class="home_slider_custom_dot trans_200"></li>
                    <!-- <li class="home_slider_custom_dot trans_200"></li>
                        <li class="home_slider_custom_dot trans_200"></li>
                        <li class="home_slider_custom_dot trans_200"></li>
                        <li class="home_slider_custom_dot trans_200"></li>
                        <li class="home_slider_custom_dot trans_200"></li> -->

                </ul>
            </div>

        </div>
    </div>

    <!-- Intro -->

    <!-- Why Choose Us -->

    <div class="why">

        <?php include('includes/accesibilidad.php'); ?>       

        <div id="para-mirar">
            <div class="container">
                <div class="row">

                    <!-- Titulo -->
                    <div class="col text-center">
                        <div class="section_title_container">
                            <div class="section_title">
                                <h2 class="porque_index">¿Por qué elegirnos?
                                    <hr class="hr_por_que">
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="why_text">
                        <p class="parrafo">En Passus estamos comprometidos a mejorar su calidad de vida, por eso prestamos servicios con altos estándares de seguridad para ti y tu familia.</p>
                    </div>

                    <!-- Why Choose Us Image -->
                    <div class="col-lg-6 pt-5">
                        <div id="carouselExampleControls" class="carousel_index carousel slide" data-ride="carousel">
                            <div class="carousel-inner" style="margin-top:-138px;">
                                <div class="carousel-item active">
                                    <img src="images/porque_elegirnos1.jpeg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/sedes/Veraguas2.jpeg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/sedes/Chia1.jpeg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/sedes/Veraguas4.jpeg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/sedes/Veraguas5.jpeg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Anterior</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Siguiente</span>
                            </button>
                        </div>
                    </div>

                    <!-- Why Choose Us Content -->
                    <div class="col-lg-6">
                        <div class="why_content pt-4">
                            <!--			
					    <div class="section_title_container">
							<div class="section_subtitle"></div>
							<div class="section_title"><h2>¿Porqué elegirnos?</h2></div>
						</div>
						<div class="why_text">
							<p>En Passus estamos comprometidos a mejorar su calidad de vida, por eso prestamos servicios con altos estándares de seguridad para ti y tu familia.</p>
						</div> 
					   -->
                            <div class="why_list">
                                <ul>

                                    <!-- Why List Item -->
                                    <li class="d-flex flex-row align-items-center justify-content-start">
                                        <div class="icon_container_index d-flex flex-column align-items-center justify-content-center">
                                            <div class="icon_index"><img src="images/calidad-icono.png" alt="https://www.flaticon.com/authors/prosymbols"></div>
                                        </div>
                                        <div class="why_list_content">
                                            <div class="why_list_title">Altos estándares de calidad y seguridad.</div>
                                            <!-- <div class="why_list_text">Etiam ac erat ut enim maximus accumsan vel ac nisl</div> -->
                                        </div>
                                    </li>

                                    <!-- Why List Item -->
                                    <li class="d-flex flex-row align-items-center justify-content-start">
                                        <div class="icon_container_index d-flex flex-column align-items-center justify-content-center">
                                            <div class="icon_index"><img src="images/personal-icono.png" alt="https://www.flaticon.com/authors/prosymbols"></div>
                                        </div>
                                        <div class="why_list_content">
                                            <div class="why_list_title">Personal altamente calificado para su servicio.</div>
                                            <!-- <div class="why_list_text">Ac erat ut enim maximus accumsan vel ac</div> -->
                                        </div>
                                    </li>

                                    <!-- Why List Item -->
                                    <li class="d-flex flex-row align-items-center justify-content-start">
                                        <div class="icon_container_index d-flex flex-column align-items-center justify-content-center">
                                            <div class="icon_index"><img src="images/humanizado-icono.png" alt="https://www.flaticon.com/authors/prosymbols"></div>
                                        </div>
                                        <div class="why_list_content">
                                            <div class="why_list_title">Trato digno, humanizado y respetuoso.</div>
                                            <!-- <div class="why_list_text">Etiam ac erat ut enim maximus accumsan vel</div> -->
                                        </div>
                                    </li>

                                    <!-- Why List Item -->
                                    <li class="d-flex flex-row align-items-center justify-content-start">
                                        <div class="icon_container_index d-flex flex-column align-items-center justify-content-center">
                                            <div class="icon_index"><img src="images/ubicacion-icono.png" alt="https://www.flaticon.com/authors/prosymbols"></div>
                                        </div>
                                        <div class="why_list_content">
                                            <div class="why_list_title">Contamos con sedes ubicadas a nivel nacional.</div>
                                            <div class="why_list_text">Estratégicamente georreferenciadas</div>
                                        </div>
                                    </li>

                                    <!-- Why List Item -->
                                    <li class="d-flex flex-row align-items-center justify-content-start">
                                        <div class="icon_container_index d-flex flex-column align-items-center justify-content-center">
                                            <div class="icon_index"><img src="images/dolor-icono.png" alt="https://www.flaticon.com/authors/prosymbols"></div>
                                        </div>
                                        <div class="why_list_content">
                                            <div class="why_list_title">Especializados en manejo del dolor crónico.</div>
                                            <!-- <div class="why_list_text">Etiam ac erat ut enim maximus accumsan vel</div> -->
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include('includes/_linea_atencion.php'); ?>

    <!-- Services -->

    <div class="services" id="services_index">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="section_title_container">
                        <div class="section_title">
                            <h2 class="passus_servicios_index">Nuestros servicios Passus
                                <hr class="hr">
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row services_row justify-content-center">
                <!-- Service -->
                <div class="col-12 col-md-6 service_col_divertido">
                    <div class="service text-center divtamano_index">
                        <div class="divservicios_index">
                            <img class="imgservicios_index" src="images/img-servicios/card_ips.png" alt="Passus IPS">
                            <a href="servicios_passusIPS.php" class="leer-mas">
                                <button>Ver más...</button>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Service -->
                <div class="col-12 col-md-6 service_col_divertido">
                    <div class="service text-center divtamano_index">
                        <div class="divservicios_index">
                            <img class="imgservicios_index" src="images/img-servicios/card_divertido.png" alt="Passus Divertido">
                            <a href="servicios_passus_divertido.php" class="leer-mas">
                                <button>Ver más...</button>
                            </a>
                        </div>
                    </div>
                </div>


                <!-- Service -->
                <!-- <div class="col-xl-4 col-md-6 service_col_divertido">
                    <div class="service text-center divtamano_index">
                        <div class="divservicios_index">
                            <img class="imgservicios_index" src="images/img-servicios/Fisiatría.jpg" alt="Natación infantil">
                            <a href="natacion-infantil.html" class="leer-mas">
                                <button>Ver más...</button>
                            </a>
                        </div>
                    </div>
                </div> -->


                <!-- Service -->
                <!-- <div class="col-xl-4 col-md-6 service_col_divertido">
                    <div class="service text-center divtamano_index">
                        <div class="divservicios_index">
                            <img class="imgservicios_index" src="images/img-servicios/Neuropediatría-passus.jpg" alt="Natación infantil">
                            <a href="natacion-infantil.html" class="leer-mas">
                                <button>Ver más...</button>
                            </a>
                        </div>
                    </div>
                </div> -->

                <!-- Service -->
                <!-- <div class="col-xl-4 col-md-6 service_col_divertido">
                    <div class="service text-center divtamano_index">
                        <div class="divservicios_index">
                            <img class="imgservicios_index" src="images/img-servicios/Neuropsicología.jpg" alt="Natación infantil">
                            <a href="natacion-infantil.html" class="leer-mas">
                                <button>Ver más...</button>
                            </a>
                        </div>
                    </div>
                </div> -->

                <!-- PRUEBA DE IMAGEN -->
                <!--	
				<div class="col-xl-4 col-md-6 service_col">
					<div class="service text-center divtamano">
				<div class="service">
							<div class="icon_container d-flex flex-column align-items-center justify-content-center ml-auto mr-auto" style="margin-top:15px">
								<div class="icon"><img src="images/icon_neuropediatria.png" alt="https://www.flaticon.com/authors/prosymbols"></div>
							</div>
							<div class="service_title">Neuropediatría</div>
							<div class="service_text">
								<p>Se especializa en el diagnóstico y tratamiento de trastornos neurológicos en niños, desde recién nacidos hasta adolescentes. Los neuropediatras están capacitados para manejar una amplia gama de condiciones, como trastornos del desarrollo, epilepsia, trastornos del aprendizaje y trastornos del movimiento, con un enfoque específico en las necesidades neurológicas únicas de los niños.</p>
							</div>
						</div> 
						
						<div class="divservicios" >     
						    <img class="imgservicios" src="images/img-servicios/terapia-ocupacional.png">
						</div>
					</div>
				</div>-->

                <!-- Service -->
                <!--
				<div class="col-xl-4 col-md-6 service_col">
					<div class="service text-center">
						<div class="service">
							<div class="icon_container d-flex flex-column align-items-center justify-content-center ml-auto mr-auto">
								<div class="icon"><img src="images/icon_4.svg" alt="https://www.flaticon.com/authors/prosymbols"></div>
							</div>
							<div class="service_title">Yoga y Pilates</div>
							<div class="service_text">
								<p>El pilates busca fortalecer el tono muscular y la fuerza, mientras que el yoga busca la relajación mental y física.</p>
							</div>
						</div>
					</div>
				</div>
                -->
                <!-- Service -->
                <!--
				<div class="col-xl-4 col-md-6 service_col">
					<div class="service text-center">
						<div class="service">
							<div class="icon_container d-flex flex-column align-items-center justify-content-center ml-auto mr-auto">
								<div class="icon"><img src="images/icon_4.svg" alt="https://www.flaticon.com/authors/prosymbols"></div>
							</div>
							<div class="service_title">Masajes Terapéuticos</div>
							<div class="service_text">
								<p>Técnicas de masaje que se utilizan en el tratamiento de trastornos neuromusculares y musculoesqueléticos.</p>
							</div>
						</div>
					</div>
				</div>
                -->
            </div>
        </div>
    </div>


    <!-- Rehabilitacion Integral -->
    <!-- <div id="programa_rehabilitacion_index">
        <div class="container"> -->
    <!-- <div class="row">
                <div class="col">
                    <div class="section_title_container">
                        <div class="section_title">
                            <h3 style="margin-bottom: -50px; font-size: 30px;">Nuestro programa de rehabilitación
                                <hr class="hr_subtitulo">
                            </h3>
                        </div>
                    </div>
                </div>
            </div> -->
    <!-- <div class="row services_row justify-content-center"> -->

    <!--Services-->
    <!-- <div class="col-xl-4 col-md-6 service_col_divertido">
                    <div class="service text-center divtamano_index">
                        <div class="divservicios_index">
                            <img class="imgservicios_index" src="images/img-servicios/rehabilitacion_integral.jpg" alt="Natación infantil">
                            <a href="natacion-infantil.html" class="leer-mas">
                                <button>Ver más...</button>
                            </a>
                        </div>
                    </div>
                </div> -->


    <!-- Service -->
    <!-- <div class="col-xl-4 col-md-6 service_col_divertido">
                    <div class="service text-center divtamano_index">
                        <div class="divservicios_index">
                            <img class="imgservicios_index" src="images/img-servicios/terapia_ocupacional.jpg" alt="Natación infantil">
                            <a href="natacion-infantil.html" class="leer-mas">
                                <button>Ver más...</button>
                            </a>
                        </div>
                    </div>
                </div> -->

    <!--Service-->
    <!-- <div class="col-xl-4 col-md-6 service_col_divertido">
                    <div class="service text-center divtamano_index">
                        <div class="divservicios_index">
                            <img class="imgservicios_index" src="images/img-servicios/Fonoaudiología.jpg" alt="Natación infantil">
                            <a href="natacion-infantil.html" class="leer-mas">
                                <button>Ver más...</button>
                            </a>
                        </div>
                    </div>
                </div> -->

    <!--Service-->
    <!-- <div class="col-xl-4 col-md-6 service_col_divertido">
                    <div class="service text-center divtamano_index">
                        <div class="divservicios_index">
                            <img class="imgservicios_index" src="images/img-servicios/psicologia.jpg" alt="Natación infantil">
                            <a href="natacion-infantil.html" class="leer-mas">
                                <button>Ver más...</button>
                            </a>
                        </div>
                    </div>
                </div> -->

    <!--Service-->
    <!-- <div class="col-xl-4 col-md-6 service_col_divertido">
                    <div class="service text-center divtamano_index">
                        <div class="divservicios_index">
                            <img class="imgservicios_index" src="images/img-servicios/psiquiatria_infantil.jpg" alt="Natación infantil">
                            <a href="natacion-infantil.html" class="leer-mas">
                                <button>Ver más...</button>
                            </a>
                        </div>
                    </div>
                </div> -->
    <!--
				<div class="col-xl-4 col-md-6 service_col">
					<div class="service text-center">
						<div class="service">
							<div class="icon_container d-flex flex-column align-items-center justify-content-center ml-auto mr-auto">
								<div class="icon"><img src="images/icon_4.svg" alt="https://www.flaticon.com/authors/prosymbols"></div>
							</div>
							<div class="service_title">Yoga y Pilates</div>
							<div class="service_text">
								<p>El pilates busca fortalecer el tono muscular y la fuerza, mientras que el yoga busca la relajación mental y física.</p>
							</div>
						</div>
					</div>
				</div>
                -->
    <!-- Service -->
    <!--
				<div class="col-xl-4 col-md-6 service_col">
					<div class="service text-center">
						<div class="service">
							<div class="icon_container d-flex flex-column align-items-center justify-content-center ml-auto mr-auto">
								<div class="icon"><img src="images/icon_4.svg" alt="https://www.flaticon.com/authors/prosymbols"></div>
							</div>
							<div class="service_title">Masajes Terapéuticos</div>
							<div class="service_text">
								<p>Técnicas de masaje que se utilizan en el tratamiento de trastornos neuromusculares y musculoesqueléticos.</p>
							</div>
						</div>
					</div>
				</div>
                -->
    <!-- </div>
        </div> -->



    <!-- Services Divertido -->

    <!-- <div class="container" id="divertido_index">
            <div class="row">
                <div class="col text-center">
                    <div class="section_title_container">
                        <div class="section_title">
                            <h2 class="passus_servicios_indexDivertido">Nuestros servicios Passus Divertido
                                <hr class="hr">
                            </h2>
                        </div>
                    </div>
                </div>
            </div> -->
    <!-- <div class="row services_row justify-content-center"> -->

    <!--Services-->
    <!-- <div class="col-xl-4 col-md-6 service_col_divertido">
                    <div class="service text-center divtamano_index">
                        <div class="divservicios_index">
                            <img class="imgservicios_index" src="images/img-servicios/acuamotricidad.jpg" alt="Natación infantil">
                            <a href="natacion-infantil.html" class="leer-mas">
                                <button>Ver más...</button>
                            </a>
                        </div>
                    </div>
                </div> -->

    <!-- Service -->
    <!-- <div class="col-xl-4 col-md-6 service_col_divertido">
                    <div class="service text-center divtamano_index">
                        <div class="divservicios_index">
                            <img class="imgservicios_index" src="images/img-servicios/natacion_infantil.jpg" alt="Natación infantil">
                            <a href="natacion-infantil.html" class="leer-mas">
                                <button>Ver más...</button>
                            </a>
                        </div>
                    </div>
                </div> -->


    <!-- Services -->
    <!-- <div class="col-xl-4 col-md-6 service_col_divertido">
                    <div class="service text-center divtamano_index">
                        <div class="divservicios_index">
                            <img class="imgservicios_index" src="images/img-servicios/acuamotricidad.jpg" alt="Natación infantil">
                            <a href="natacion-infantil.html" class="leer-mas">
                                <button>Ver más...</button>
                            </a>
                        </div>
                    </div>
                </div> -->

    <!-- Service -->
    <!-- <div class="col-xl-4 col-md-6 service_col_divertido">
                    <div class="service text-center divtamano_index">
                        <div class="divservicios_index">
                            <img class="imgservicios_index" src="images/img-servicios/natacion_infantil.jpg" alt="Natación infantil">
                            <a href="natacion-infantil.html" class="leer-mas">
                                <button>Ver más...</button>
                            </a>
                        </div>
                    </div>
                </div> -->


    <!--Service-->
    <!-- <div class="col-xl-4 col-md-6 service_col_divertido">
                    <div class="service text-center divtamano_index">
                        <div class="divservicios_index">
                            <img class="imgservicios_index" src="images/img-servicios/natacion_jovenes_adultos.jpg" alt="Natación infantil">
                            <a href="natacion-infantil.html" class="leer-mas">
                                <button>Ver más...</button>
                            </a>
                        </div>
                    </div>
                </div> -->

    <!--Service-->
    <!-- <div class="col-xl-4 col-md-6 service_col_divertido">
                        <div class="service text-center divtamano_index">
                            <div class="divservicios_index">
                                <img class="imgservicios_index" src="images/img-servicios/acuafiestas.jpg" alt="Natación infantil">
                                <a href="natacion-infantil.html" class="leer-mas">
                                    <button>Leer más...</button>
                                </a>
                            </div>
                        </div>
                    </div> -->

    <!--Service-->
    <!-- <div class="col-xl-4 col-md-6 service_col_divertido">
                    <div class="service text-center divtamano_index">
                        <div class="divservicios_index">
                            <img class="imgservicios_index" src="images/img-servicios/yoga.jpg" alt="Natación infantil">
                            <a href="natacion-infantil.html" class="leer-mas">
                                <button>Ver más...</button>
                            </a>
                        </div>
                    </div>
                </div> -->

    <!--Service-->
    <!-- <div class="col-xl-4 col-md-6 service_col_divertido">
                    <div class="service text-center divtamano_index">
                        <div class="divservicios_index">
                            <img class="imgservicios_index" src="images/img-servicios/yoga_acuatico.jpg" alt="Natación infantil">
                            <a href="natacion-infantil.html" class="leer-mas">
                                <button>Ver más...</button>
                            </a>
                        </div>
                    </div>
                </div> -->

    <!--Service-->
    <!-- <div class="col-xl-4 col-md-6 service_col_divertido">
                    <div class="service text-center divtamano_index">
                        <div class="divservicios_index">
                            <img class="imgservicios_index" src="images/img-servicios/pilates.jpg" alt="Natación infantil">
                            <a href="natacion-infantil.html" class="leer-mas">
                                <button>Ver más...</button>
                            </a>
                        </div>
                    </div>
                </div> -->
    <!--Service-->
    <!-- <div class="col-xl-4 col-md-6 service_col_divertido">
                    <div class="service text-center divtamano_index">
                        <div class="divservicios_index">
                            <img class="imgservicios_index" src="images/img-servicios/pilates_acuatico.jpg" alt="Natación infantil">
                            <a href="natacion-infantil.html" class="leer-mas">
                                <button>Ver más...</button>
                            </a>
                        </div>
                    </div>
                </div> -->
    <!--Service-->
    <!-- <div class="col-xl-4 col-md-6 service_col_divertido">
                    <div class="service text-center divtamano_index">
                        <div class="divservicios_index">
                            <img class="imgservicios_index" src="images/img-servicios/mindfulnes.jpg" alt="Natación infantil">
                            <a href="natacion-infantil.html" class="leer-mas">
                                <button>Ver más...</button>
                            </a>
                        </div>
                    </div>
                </div> -->

    <!-- Service -->
    <!--
				<div class="col-xl-4 col-md-6 service_col">
					<div class="service text-center">
						<div class="service">
							<div class="icon_container d-flex flex-column align-items-center justify-content-center ml-auto mr-auto">
								<div class="icon"><img src="images/icon_4.svg" alt="https://www.flaticon.com/authors/prosymbols"></div>
							</div>
							<div class="service_title">Yoga y Pilates</div>
							<div class="service_text">
								<p>El pilates busca fortalecer el tono muscular y la fuerza, mientras que el yoga busca la relajación mental y física.</p>
							</div>
						</div>
					</div>
				</div>
                -->

    <!-- </div> -->
    <!-- </div> -->

    <div class="services" id="aliados_index">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="section_title_container">
                        <div class="section_title">
                            <h2>Nuestros Aliados
                                <hr class="hr_aliados">
                            </h2>
                            <br>
                            <p class="parrafo">En Passus, trabajamos junto a las principales EPS de Colombia para ofrecerte atención médica de calidad y accesible, garantizando tu bienestar y satisfacción en todo momento.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Fila de imágenes centradas con ajuste en dispositivos pequeños -->
            <div class="row services_row justify-content-center g-1">
                <div class="col-lg-2 col-md-4 col-4 mb-2 d-flex justify-content-center">
                    <img src="images/aliados/ALIANSALUD.png" class="w-75 shadow-1-strong rounded mb-2 logo-ajustado" />
                </div>
                <div class="col-lg-2 col-md-4 col-4 mb-2 d-flex justify-content-center">
                    <img src="images/aliados/ASMET_SALUD.jpg?v=1" class="w-75 shadow-1-strong rounded mb-2 logo-ajustado" />
                </div>
                <div class="col-lg-2 col-md-4 col-4 mb-2 d-flex justify-content-center">
                    <img src="images/aliados/BOLIVAR.png" class="w-75 shadow-1-strong rounded mb-2 logo-ajustado" />
                </div>
                <div class="col-lg-2 col-md-4 col-4 mb-2 d-flex justify-content-center">
                    <img src="images/aliados/CAFAM.png" class="w-75 shadow-1-strong rounded mb-2 logo-ajustado" />
                </div>
                <div class="col-lg-2 col-md-4 col-4 mb-2 d-flex justify-content-center">
                    <img src="images/aliados/COLMEDICA.png" class="w-75 shadow-1-strong rounded mb-2 logo-ajustado" />
                </div>
                <div class="col-lg-2 col-md-4 col-4 mb-2 d-flex justify-content-center">
                    <img src="images/aliados/Compensar logo.jpg" class="w-75 shadow-1-strong rounded mb-2 logo-ajustado" />
                </div>
            </div>

            <div class="row services_row2 justify-content-center g-1">
                <div class="col-lg-2 col-md-4 col-4 mb-2 d-flex justify-content-center">
                    <img src="images/aliados/fomag.png" class="w-75 shadow-1-strong rounded mb-2 logo-ajustado" />
                </div>
                <div class="col-lg-2 col-md-4 col-4 mb-2 d-flex justify-content-center">
                    <img src="images/aliados/FAMISANAR.PNG" class="w-75 shadow-1-strong rounded mb-2 logo-ajustado" />
                </div>
                <div class="col-lg-2 col-md-4 col-4 mb-2 d-flex justify-content-center">
                    <img src="images/aliados/NUEVA_EPS.jpg" class="w-75 shadow-1-strong rounded mb-2 logo-ajustado" />
                </div>
                <div class="col-lg-2 col-md-4 col-4 mb-2 d-flex justify-content-center">
                    <img src="images/aliados/SANITAS.png" class="w-75 shadow-1-strong rounded mb-2 logo-ajustado" />
                </div>
                <div class="col-lg-2 col-md-4 col-4 mb-2 d-flex justify-content-center">
                    <img src="images/aliados/SURA.png" class="w-75 shadow-1-strong rounded mb-2 logo-ajustado" />
                </div>
            </div>
        </div>
    </div>
    </div>






    <!-- Extra -->

    <!-- <div class="extra">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/extra.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="extra_container d-flex flex-row align-items-start justify-content-end">
						<div class="extra_content">
							<div class="extra_disc d-flex flex-row align-items-end justify-content-start">
								<div>30<span>%</span></div>
								<div>Discount</div>
							</div>
							<div class="extra_title">Only in August</div>
							<div class="extra_text">
								<p>Nulla facilisi. Nulla egestas vel lacus sed interdum. Sed mollis, orci elementum eleifend tempor, nunc libero porttitor tellus.</p>
							</div>
							<div class="button button_1 extra_link trans_200"><a href="#">read more</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> -->



    <!--MODAL-->

    <!--<div class="modal" id="modal-aviso" tabindex="-1" role="dialog">-->
    <!--  <div class="modal-dialog modal-lg" role="document">-->
    <!--    <div class="modal-content">-->
    <!--      <div class="modal-header bg-rojo">-->
    <!--        <h5 class="modal-title modal-aviso-titulo">¡Información importante!</h5>-->
    <!--        <button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
    <!--          <span aria-hidden="true" style="color: #FFF;">&times;</span>-->
    <!--        </button>-->
    <!--      </div>-->
    <!--      <div class="modal-body">-->
    <!--      	<div class="row">-->
    <!--      		<div class="col-md-12 text-center">-->
    <!--	        	<img src="images/aviso-2.png" style="max-height: 400px;" class="img-fluid">-->
    <!--	        </div>-->
    <!--      	</div>-->
    <!--      </div>-->
    <!--      <div class="modal-footer">-->
    <!--        <button type="button" class="btn btn-main-1 float-left" data-dismiss="modal">Aceptar</button>-->
    <!--      </div>-->
    <!--    </div>-->
    <!--  </div>-->
    <!--</div>-->



    <!-- Footer -->
    <?php include('includes/_footer.php'); ?>

    </div>


    <?php include('includes/_js.php'); ?>
    <script src="js/elements.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/accesibilidad.js"></script>
    <script type="text/javascript">
        $('#modal-aviso').modal('show')
    </script>
</body>

</html>