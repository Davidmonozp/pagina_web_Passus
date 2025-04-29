<?php include('includes/_head.php'); ?>
<link rel="stylesheet" type="text/css" href="styles/elements.css?v=2.2">
<!-- <link rel="stylesheet" type="text/css" href="/styles/carrusel.css"> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<link rel="stylesheet" type="text/css" href="styles/elements_responsive.css?v=1.1">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css?v=1.9">
<link rel="stylesheet" type="text/css" href="styles/core.css?v=2.1">
<link rel="stylesheet" type="text/css" href="styles/responsive.css?v=1.2">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

<body>

	<!-- FONDO IMAGEN PRUEBA #0F283F
COLOR AZUL ORIGINAL #57ccc3
COLOR AZUL PASSUS #3695eb 
COLOR VERDE PASSUS #00A54F -->

	<div class="super_container">


		<?php include('includes/_header.php'); ?>

		<section class="inicio">
			<!-- Home Slider -->
			<div id="homeCarousel" class="carousel slide" data-bs-ride="carousel">
				<div class="carousel-inner">

					<!-- Slide 1 -->
					<div class="carousel-item active">
						<img src="images/home/imagen_inicial.png" class="d-block w-100" alt="Imagen inicial">
					</div>

					<!-- Slide 2 -->
					<div class="carousel-item">
						<img src="images/home/Banner_Sedes.png" class="d-block w-100" alt="Banner Sedes">
					</div>

					<!-- Slide 3 -->
					<div class="carousel-item">
						<img src="images/Banner-Rehabilitación1.png" class="d-block w-100" alt="Rehabilitación 1">
					</div>

					<!-- Slide 4 -->
					<div class="carousel-item">
						<img src="images/Banner - Rehabilitación integral para la disparidad definitiva 2 Passus.png" class="d-block w-100" alt="Rehabilitación Passus 2">
					</div>

					<!-- Slide 5 -->
					<div class="carousel-item">
						<img src="images/Banner - Rehabilitación integral para la disparidad definitiva 3 Passus.png" class="d-block w-100" alt="Rehabilitación Passus 3">
					</div>

					<!-- Slide 6 -->
					<div class="carousel-item">
						<img src="images/Banner - Rehabilitación integral para la disparidad definitiva 4 Passus.png" class="d-block w-100" alt="Rehabilitación Passus 4">
					</div>

					<!-- Slide 7 -->
					<div class="carousel-item">
						<img src="images/Banner - Passus Bienestar Bogotá 1.png" class="d-block w-100" alt="Bienestar Bogotá">
					</div>

					<!-- Slide 8 -->
					<div class="carousel-item">
						<img src="images/home/Banner_Hidroterapia1.png" class="d-block w-100" alt="Hidroterapia 1">
					</div>

					<!-- Slide 9 -->
					<div class="carousel-item">
						<img src="images/Banner . Hidroterapia 0.2.png" class="d-block w-100" alt="Hidroterapia 0.2">
					</div>

				</div>

				<!-- Carousel Controls -->
				<!-- <button class="carousel-control-prev" type="button" data-bs-target="#homeCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#homeCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button> -->

				<!-- Carousel Indicators (Dots) -->
				<div class="carousel-indicators">
					<button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
					<button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
					<button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
					<button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
					<button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
					<button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="5" aria-label="Slide 6"></button>
					<button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="6" aria-label="Slide 7"></button>
					<button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="7" aria-label="Slide 8"></button>
					<button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="8" aria-label="Slide 9"></button>
				</div>
			</div>

			<!-- Bootstrap JS Bundle -->
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
		</section>


		<div class="why">

			<!-- ACCESIBILIDAD -->
			<div class="content-example-barra">
				<div class="barra-accesibilidad-govco">
					<button id="botoncontraste" class="icon-contraste" onclick="cambiarContexto()">
						<span id="titlecontraste">Contraste</span>
					</button>
					<button id="botondisminuir" class="icon-reducir" onclick="disminuirTamanio('disminuir')">
						<span id="titledisminuir">Reducir letra</span>
					</button>
					<button id="botonaumentar" class="icon-aumentar" onclick="aumentarTamanio('aumentar')">
						<span id="titleaumentar">Aumentar letra</span>
					</button>
				</div>
			</div>
			<!-- ACCESIBILIDAD -->

			<div class="container" id="para-mirar">
				<div class="row">
					<div class="col text-center">
						<div class="section_title_container">
							<div class="section_title">
								<h2 id="titulo-elegirnos">¿Por qué elegirnos?</h2>
							</div>
						</div>
					</div>
					<div class="why_text">
						<p id="parrafo-elegirnos" class="parrafo">En Passus estamos comprometidos a mejorar su calidad de vida, por eso prestamos servicios con altos estándares de seguridad para ti y tu familia.</p>
					</div>
					<div class="col-lg-6 pt-5">
						<div id="carouselExampleControls" class="carousel_index carousel slide" data-ride="carousel">
							<div class="carousel-inner" style="margin-top:19px;">
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
					<div class="col-lg-6">
						<div class="why_content pt-4">
							<div class="why_list">
								<ul>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div class="icon_container_index d-flex flex-column align-items-center justify-content-center">
											<div class="icon_index"><img src="images/icon_4.svg" alt="https://www.flaticon.com/authors/prosymbols"></div>
										</div>
										<div class="why_list_content">
											<div class="why_list_title" id="titulo-calidad-seguridad">Altos estándares de calidad y seguridad.</div>
										</div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div class="icon_container_index d-flex flex-column align-items-center justify-content-center">
											<div class="icon_index"><img src="images/icon_2.svg" alt="https://www.flaticon.com/authors/prosymbols"></div>
										</div>
										<div class="why_list_content">
											<div class="why_list_title" id="titulo-personal-calificado">Personal altamente calificado para su servicio.</div>
										</div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div class="icon_container_index d-flex flex-column align-items-center justify-content-center">
											<div class="icon_index"><img src="images/icon_4.svg" alt="https://www.flaticon.com/authors/prosymbols"></div>
										</div>
										<div class="why_list_content">
											<div class="why_list_title" id="titulo-trato-digno">Trato digno y humanizado.</div>
										</div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div class="icon_container_index d-flex flex-column align-items-center justify-content-center">
											<div class="icon_index"><img src="images/icon_8.svg" alt="https://www.flaticon.com/authors/prosymbols"></div>
										</div>
										<div class="why_list_content">
											<div class="why_list_title" id="titulo-sedes-nacionales">Contamos con sedes ubicadas a nivel nacional.</div>
											<div class="why_list_text">Estratégicamente georreferenciadas</div>
										</div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div class="icon_container_index d-flex flex-column align-items-center justify-content-center">
											<div class="icon_index"><img src="images/icon_2.svg" alt="https://www.flaticon.com/authors/prosymbols"></div>
										</div>
										<div class="why_list_content">
											<div class="why_list_title" id="titulo-dolor-cronico">Especializados en manejo del dolor crónico.</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php include('includes/_linea_atencion.php'); ?>

		<!-- Services -->

		<div class="services">
			<div class="container">
				<div class="row">
					<div class="col text-center">
						<div class="section_title_container">
							<div class="section_title">
								<h2>Nuestros servicios Passus IPS</h2>
							</div>
						</div>
					</div>
				</div>
				<div class="row services_row justify-content-center">

					<!-- Service ESTRUCUTURA ANTERIOR 
				
				<div class="col-xl-4 col-md-6 service_col">
					<div class="service text-center">
						<div class="service">
							<div class="icon_container d-flex flex-column align-items-center justify-content-center ml-auto mr-auto">
								<div class="icon"><img src="images/icon_rehabilitacion.png" alt="https://www.flaticon.com/authors/prosymbols"></div>
							</div>
							<div class="service_title">Rehabilitación integral para la discapacidad definitiva, leve, moderada o severa</div>
							<div class="service_text">
								<p>Programa diseñado para mejorar la calidad de vida y fomentar la autonomía de aquellos que enfrentan limitaciones físicas, mentales o sensoriales, abarca técnicas y metodologías adaptadas a las necesidades individuales, desde terapia física, terapia ocupacional, terapia de fonoaudiología y Psicología. El propósito fundamental para nuestros niños y adolescentes es promover el bienestar físico, social y emocional,  a través del equipo de profesionales y seguimiento clínico de nuestros médicos especialistas en psiquiatría infantil, neurología Pediátrico y fisiatría.</p>
							</div>
						</div>
					</div>
				</div>
				-->



					<!-- Service -->
					<div class="col-xl-4 col-md-6 service_col">
						<div class="service text-center divtamano">
							<div class="divservicios">
								<img class="imgservicios" src="images/img-servicios/HDT-passus.png">
							</div>
						</div>
					</div>

					<!-- Service -->
					<div class="col-xl-4 col-md-6 service_col">
						<div class="service text-center divtamano">
							<div class="divservicios">
								<img class="imgservicios" src="images/img-servicios/junta-interdiciplinaria.png">
							</div>
						</div>
					</div>


					<!-- Service -->
					<div class="col-xl-4 col-md-6 service_col">
						<div class="service text-center divtamano">
							<div class="divservicios">
								<img class="imgservicios" src="images/img-servicios/fisiatria-2.png">
							</div>
						</div>
					</div>


					<!-- Service -->
					<div class="col-xl-4 col-md-6 service_col">
						<div class="service text-center divtamano">
							<div class="divservicios">
								<img class="imgservicios" src="images/img-servicios/neuropediatria.png">
							</div>
						</div>
					</div>

					<!-- Service -->
					<div class="col-xl-4 col-md-6 service_col">
						<div class="service text-center divtamano">
							<div class="divservicios">
								<img class="imgservicios" src="images/img-servicios/neuropsicologia.png">
							</div>
						</div>
					</div>

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

		<?php include('includes/_linea_atencion.php'); ?>

		<!-- Services -->

		<div class="services">
			<div class="container">
				<div class="row">
					<div class="col text-center">
						<div class="section_title_container">
							<div class="section_title">
								<h2>Nuestros servicios Passus IPS</h2>
							</div>
						</div>
					</div>
				</div>
				<div class="row services_row justify-content-center">

					<!-- Service ESTRUCUTURA ANTERIOR 
				
				<div class="col-xl-4 col-md-6 service_col">
					<div class="service text-center">
						<div class="service">
							<div class="icon_container d-flex flex-column align-items-center justify-content-center ml-auto mr-auto">
								<div class="icon"><img src="images/icon_rehabilitacion.png" alt="https://www.flaticon.com/authors/prosymbols"></div>
							</div>
							<div class="service_title">Rehabilitación integral para la discapacidad definitiva, leve, moderada o severa</div>
							<div class="service_text">
								<p>Programa diseñado para mejorar la calidad de vida y fomentar la autonomía de aquellos que enfrentan limitaciones físicas, mentales o sensoriales, abarca técnicas y metodologías adaptadas a las necesidades individuales, desde terapia física, terapia ocupacional, terapia de fonoaudiología y Psicología. El propósito fundamental para nuestros niños y adolescentes es promover el bienestar físico, social y emocional,  a través del equipo de profesionales y seguimiento clínico de nuestros médicos especialistas en psiquiatría infantil, neurología Pediátrico y fisiatría.</p>
							</div>
						</div>
					</div>
				</div>
				-->



					<!-- Service -->
					<div class="col-xl-4 col-md-6 service_col">
						<div class="service text-center divtamano">
							<div class="divservicios">
								<img class="imgservicios" src="images/img-servicios/HDT-passus.png">
							</div>
						</div>
					</div>

					<!-- Service -->
					<div class="col-xl-4 col-md-6 service_col">
						<div class="service text-center divtamano">
							<div class="divservicios">
								<img class="imgservicios" src="images/img-servicios/junta-interdiciplinaria.png">
							</div>
						</div>
					</div>


					<!-- Service -->
					<div class="col-xl-4 col-md-6 service_col">
						<div class="service text-center divtamano">
							<div class="divservicios">
								<img class="imgservicios" src="images/img-servicios/fisiatria-2.png">
							</div>
						</div>
					</div>


					<!-- Service -->
					<div class="col-xl-4 col-md-6 service_col">
						<div class="service text-center divtamano">
							<div class="divservicios">
								<img class="imgservicios" src="images/img-servicios/neuropediatria.png">
							</div>
						</div>
					</div>

					<!-- Service -->
					<div class="col-xl-4 col-md-6 service_col">
						<div class="service text-center divtamano">
							<div class="divservicios">
								<img class="imgservicios" src="images/img-servicios/neuropsicologia.png">
							</div>
						</div>
					</div>

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

		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container">
						<div class="section_title">
							<h2>Nuestro programa de Rehabilitación</h2>
						</div>
					</div>
				</div>
			</div>
			<div class="row services_row justify-content-center">

				<!--Services-->

				<div class="col-xl-4 col-md-6 service_col">
					<div class="service text-center divtamano">
						<div class="divservicios">
							<img class="imgservicios" src="images/img-servicios/rehabilitacion-integral.png">
						</div>
					</div>
				</div>

				<!-- Service -->
				<div class="col-xl-4 col-md-6 service_col">
					<div class="service text-center divtamano">
						<div class="divservicios">
							<img class="imgservicios" src="images/img-servicios/terapia-ocupacional.png">
						</div>
					</div>
				</div>

				<!--Service-->
				<div class="col-xl-4 col-md-6 service_col">
					<div class="service text-center divtamano">
						<div class="divservicios">
							<img class="imgservicios" src="images/img-servicios/fonoaudiologia.png">
						</div>
					</div>
				</div>

				<!--Service-->

				<div class="col-xl-4 col-md-6 service_col">
					<div class="service text-center divtamano">
						<div class="divservicios">
							<img class="imgservicios" src="images/img-servicios/psicologia-2.png">
						</div>
					</div>
				</div>

				<!--Service-->

				<div class="col-xl-4 col-md-6 service_col">
					<div class="service text-center divtamano">
						<div class="divservicios">
							<img class="imgservicios" src="images/img-servicios/psiquiatria-infantil.png">
						</div>
					</div>
				</div>
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



		<!-- Services Divertido -->

		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title_container">
						<div class="section_title">
							<h2>Nuestros servicios Passus Divertido</h2>
						</div>
					</div>
				</div>
			</div>
			<div class="row services_row justify-content-center">

				<!--Services-->

				<div class="col-xl-4 col-md-6 service_col">
					<div class="service text-center divtamano">
						<div class="divservicios">
							<img class="imgservicios" src="images/img-servicios/matronatacion.png">
						</div>
					</div>
				</div>

				<!-- Service -->
				<div class="col-xl-4 col-md-6 service_col">
					<div class="service text-center divtamano">
						<div class="divservicios">
							<img class="imgservicios" src="images/img-servicios/natacion-infantil.png">
						</div>
					</div>
				</div>

				<!--Service-->
				<div class="col-xl-4 col-md-6 service_col">
					<div class="service text-center divtamano">
						<div class="divservicios">
							<img class="imgservicios" src="images/img-servicios/natacion-jovenes-adultos.png">
						</div>
					</div>
				</div>

				<!-- Service-->
				<div class="col-xl-4 col-md-6 service_col">
					<div class="service text-center divtamano">
						<div class="divservicios">
							<img class="imgservicios" src="images/img-servicios/acuafiestas.png">
						</div>
					</div>
				</div>

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

			</div>
		</div>

		<div class="services">
			<div class="container">
				<div class="row">
					<div class="col text-center">
						<div class="section_title_container">
							<div class="section_title">
								<h2>Nuestros Aliados</h2>
							</div>
						</div>
					</div>
				</div>
				<div class="row services_row justify-content-center">
					<div class="col-lg-2 col-md-12 mb-4 mb-lg-0">
						<img src="images/aliados/ALIANSALUD.png" class="w-100 shadow-1-strong rounded mb-4" />
					</div>
					<div class="col-lg-2 col-md-12 mb-4 mb-lg-0">
						<img src="images/aliados/ASMET_SALUD.jpg?v=1" class="w-100 shadow-1-strong rounded mb-4" />
					</div>
					<div class="col-lg-2 mb-4 mb-lg-0">
						<img src="images/aliados/BOLIVAR.png" class="w-100 shadow-1-strong rounded mb-4" />
					</div>
					<div class="col-lg-2 mb-4 mb-lg-0">
						<img src="images/aliados/CAFAM.png" class="w-100 shadow-1-strong rounded mb-4" />
					</div>

					<div class="col-lg-2 mb-4 mb-lg-0">
						<img src="images/aliados/COLMEDICA.png" class="w-100 shadow-1-strong rounded mb-4" />
					</div>
					<div class="col-lg-2 mb-4 mb-lg-0">
						<img src="images/aliados/COMPENSAR.png" class="w-100 shadow-1-strong rounded mb-4" />
					</div>

				</div>
				<div class="row services_row justify-content-center">
					<div class="col-lg-4 mb-4 mb-lg-0">
						<img src="images/aliados/compensar_complementario.png" class="w-100 shadow-1-strong rounded mb-4" />
					</div>
					<div class="col-lg-2 mb-4 mb-lg-0">
						<img src="images/aliados/fomag.png" class="w-100 shadow-1-strong rounded mb-4" />
					</div>
					<div class="col-lg-2 mb-4 mb-lg-0">
						<img src="images/aliados/FAMISANAR.PNG" class="w-100 shadow-1-strong rounded mb-4" />
					</div>
					<div class="col-lg-2 mb-4 mb-lg-0">
						<img src="images/aliados/NUEVA_EPS.jpg" class="w-100 shadow-1-strong rounded mb-4" />
					</div>
					<div class="col-lg-2 mb-4 mb-lg-0">
						<img src="images/aliados/SANITAS.png" class="w-100 shadow-1-strong rounded mb-4" />
					</div>
					<div class="col-lg-2 mb-4 mb-lg-0">
						<img src="images/aliados/SURA.png" class="w-100 shadow-1-strong rounded mb-4" />
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
	<script type="text/javascript">
		$('#modal-aviso').modal('show')
	</script>

	<!-- accesibilidad -->
	<!-- <div class="content-example-barra ">
		<div class="barra-accesibilidad-govco">
			<button id="botoncontraste" class="icon-contraste" onclick="cambiarContexto()">
				<span id="titlecontraste">Contraste</span>
			</button>
			<button id="botondisminuir" class="icon-reducir" onclick="disminuirTamanio('disminuir')">
				<span id="titledisminuir">Reducir letra</span>
			</button>
			<button id="botonaumentar" class="icon-aumentar" onclick="aumentarTamanio('aumentar')">
				<span id="titleaumentar">Aumentar letra</span>
			</button>
		</div>
	</div> -->
</body>

</html>




<!-- INICIO ACCESIBILIDAD -->

<div class="barra-accesibilidad-govco">
	<button id="botoncontraste" class="icon-contraste" onclick="cambiarContexto()">
		<span id="titlecontraste">Contraste</span>
	</button>
	<button id="botondisminuir" class="icon-reducir" onclick="disminuirTamanio('disminuir')">
		<span id="titledisminuir">Reducir letra</span>
	</button>
	<button id="botonaumentar" class="icon-aumentar" onclick="aumentarTamanio('aumentar')">
		<span id="titleaumentar">Aumentar letra</span>
	</button>
</div>

<!-- FIN ACCESIBILIDAD -->










.content-example-barra {
margin-left: auto;
margin-right: auto;
}

.barra-accesibilidad-letra {
width: 100%;
align-items: center;
text-align: center;
}

.barra-accesibilidad-letra .titulo-barra-accesibilidad {
color: #000;
font-family: Montserrat-SemiBold;
font-size: 20px;
margin: 0px;
}

.barra-accesibilidad-letra .descripcion-barra-accesibilidad {
color: #4B4B4B;
font-family: WorkSans-Regular;
font-size: 16px;
margin: 0px;
}

.barra-accesibilidad-govco {
height: 142px;
width: 48px;
position: fixed;
right: 0;
top: 35%;
background-color: #004884 !important;
border-radius: 10px 0px 0px 10px;
opacity: 1;
padding-left: 0px;
padding-right: 0px;
padding-top: 12px;
padding-bottom: 20px;
align-items: center;
z-index: 9999;
}

.barra-accesibilidad-govco button {
line-height: inherit;
}

/* --- Botón Contraste --- */
.barra-accesibilidad-govco .icon-contraste {
background: #004884;
width: 48px;
height: 40px;
border: none;
outline: none;
text-decoration: none;
}

.barra-accesibilidad-govco .icon-contraste::after {
background: #fff;
content: "\e803";
font-family: "govco-font";
height: 24px;
width: 24px;
color: #004884;
padding: 4px;
border-radius: 5px;
position: relative;
}

.barra-accesibilidad-govco #titlecontraste {
text-align: left;
position: absolute;
background: #3366CC;
color: #fff;
font-family: WorkSans-Medium !important;
font-size: 14px;
margin-top: -8px;
opacity: 0;
width: 172px;
height: 40px;
border-radius: 10px 0 0 10px;
padding: 10px;
}

.barra-accesibilidad-govco button:hover #titlecontraste,
.icon-contraste:focus #titlecontraste {
opacity: 1;
visibility: visible;
margin-left: -135px;
outline: 2px solid #004985;
outline-offset: 2px;
}

.icon-contraste:hover::after,
.icon-contraste:focus::after {
background: #fff;
content: "\e803";
font-family: "govco-font";
height: 24px;
width: 24px;
color: #3366CC;
padding: 4px;
border-radius: 5px;
position: relative;
}

/* --- Botón Reducir --- */
.barra-accesibilidad-govco .icon-reducir {
background: #004884;
text-align: center;
width: 48px;
height: 40px;
border: none;
outline: none;
text-decoration: none;
}

.barra-accesibilidad-govco .icon-reducir::after {
background: #fff;
content: "\ec2a";
font-family: "govco-font";
line-height: 0;
height: 24px;
width: 24px;
color: #004884;
padding: 4px;
border-radius: 5px;
position: relative;
}

.barra-accesibilidad-govco #titledisminuir {
text-align: left;
position: absolute;
background: #3366CC;
color: #fff;
font-family: WorkSans-Medium !important;
font-size: 14px;
margin-top: -8px;
opacity: 0;
width: 172px;
height: 40px;
border-radius: 10px 0 0 10px;
padding: 10px;
}

.barra-accesibilidad-govco button:hover #titledisminuir,
.icon-reducir:focus #titledisminuir {
opacity: 1;
visibility: visible;
margin-left: -135px;
outline: 2px solid #004985;
outline-offset: 2px;
}

.icon-reducir:hover::after,
.icon-reducir:focus::after {
background: #fff;
content: "\ec2a";
font-family: "govco-font";
line-height: 0;
height: 24px;
width: 24px;
color: #3366CC;
padding: 4px;
border-radius: 5px;
position: relative;
}

/* --- Botón Aumentar --- */
.barra-accesibilidad-govco .icon-aumentar {
background: #004884;
text-align: center;
width: 48px;
height: 40px;
border: none;
outline: none;
text-decoration: none;
}

.barra-accesibilidad-govco .icon-aumentar::after {
background: #fff;
content: "\ec2b"; /* Asegúrate que este código corresponde al ícono de aumentar */
font-family: "govco-font";
line-height: 0;
height: 24px;
width: 24px;
color: #004884;
padding: 4px;
border-radius: 5px;
position: relative;
}

.barra-accesibilidad-govco #titleaumentar {
text-align: left;
position: absolute;
background: #3366CC;
color: #fff;
font-family: WorkSans-Medium !important;
font-size: 14px;
margin-top: -8px;
opacity: 0;
width: 172px;
height: 40px;
border-radius: 10px 0 0 10px;
padding: 10px;
}

.barra-accesibilidad-govco button:hover #titleaumentar,
.icon-aumentar:focus #titleaumentar {
opacity: 1;
visibility: visible;
margin-left: -135px;
outline: 2px solid #004985;
outline-offset: 2px;
}

.icon-aumentar:hover::after,
.icon-aumentar:focus::after {
background: #fff;
content: "\ec2b"; /* Ícono de aumentar */
font-family: "govco-font";
line-height: 0;
height: 24px;
width: 24px;
color: #3366CC;
padding: 4px;
border-radius: 5px;
position: relative;
}

/* Estados activos */
.active-barra-accesibilidad-govco {
background-color: #3366CC !important;
}

.active-barra-accesibilidad-govco.icon-contraste::after,
.active-barra-accesibilidad-govco.icon-reducir::after,
.active-barra-accesibilidad-govco.icon-aumentar::after {
background: #fff;
color: #3366CC;
}

/* Modo oscuro */
.modo_oscuro-govco {
width: 100%;
background-color: #000;
color: #fff;
}

.modo_oscuro-govco .titulo-barra-accesibilidad {
font-family: Montserrat-SemiBold;
font-size: 20px;
margin: 0px;
}

.modo_oscuro-govco .descripcion-barra-accesibilidad {
font-family: WorkSans-Regular;
font-size: 16px;
margin: 0px;
}

/* Modo claro */
.modo_claro-govco {
width: 100%;
align-items: center;
text-align: center;
background-color: #fff;
}

.modo_claro-govco .titulo-barra-accesibilidad {
color: #000;
font-family: Montserrat-SemiBold;
font-size: 20px;
margin: 0px;
}

.modo_claro-govco .descripcion-barra-accesibilidad {
color: #4B4B4B;
font-family: WorkSans-Regular;
font-size: 16px;
margin: 0px;
}










