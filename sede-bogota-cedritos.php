<?php include('includes/_head.php'); ?>
<link rel="stylesheet" type="text/css" href="styles/elements.css?v=1.1">
<link rel="stylesheet" type="text/css" href="styles/elements_responsive.css?v=1.1">
<link rel="stylesheet" type="text/css" href="styles/contact.css?v=1.4">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css?v=1.1">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css?v=1.4">
<link rel="stylesheet" type="text/css" href="styles/core.css?v=1.3">
<link rel="stylesheet" type="text/css" href="styles/responsive.css?v=1.1">
</head>

<body>

	<div class="super_container">

		<!-- Header -->

		<?php include('includes/_header.php'); ?>
		<?php include('includes/accesibilidad.php'); ?>
		<?php include('includes/_boton_whatsapp.php'); ?>

		<!-- Home -->
		<section class="hero-banner-HD_bogota_norte" id="HD_bogota_norte">
			<div class="hero-overlay">
				<h1 id="titulo_HD_bogota_norte">Sede - Bogotá Norte
					<hr>
				</h1>
			</div>
		</section>

		<!-- Contact -->
		<div class="intro" id="sede_bogota_cedritos">
			<div class="container">
					<div class="">
						<h2 class="titulo_sedes">Nuestros servicios Hidroterapia en Bogotá - Norte</h2>
						<p class="parrafo_ser">Contamos con los más altos estándares de calidad y con un gran equipo de profesionales al servicio de nuestros clientes.</p>
					</div>
				<div class="row py-3">
					<!-- Titulo -->
				
					<!-- Intro Image -->
					<div class="col-md-5">
						<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="carousel-item active">
									<img src="images/sedes/Cedritos1.jpg" class="d-block w-100" alt="...">
								</div>
								<div class="carousel-item">
									<img src="images/sedes/Cedritos2.jpg" class="d-block w-100" alt="...">
								</div>
								<div class="carousel-item">
									<img src="images/sedes/Cedritos7.jpg" class="d-block w-100" alt="...">
								</div>
								<div class="carousel-item">
									<img src="images/sedes/Cedritos8.jpg" class="d-block w-100" alt="...">
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
						<div class="contact_info my-3">
							<ul>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div>Dirección:</div>
									<div class="pl-2">Calle 142 No 16A-52</div>
								</li>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div>Horarios de atención:</div>
									<div class="pl-2">
										Lunes a viernes de 6:00 am - 7:00 pm y Sábado de 7:00 am - 1:00 pm
									</div>
								</li>
							</ul>
							</ul>
						</div>
					</div>

					<!-- Intro Content -->
					<div class="col-md-7">
						<div class="intro_content">
							<!-- <div class="contact_content"> -->
								<div class="custom-accordion">
									<div>
										<input id="cac-1" name="custom-accordion-1" type="checkbox">
										<label for="cac-1">Consultas especializadas</label>
										<div class="custom-article custom-small">
											<ol>
												<li>Medicina física y rehabilitación (Fisiatría).</li>

											</ol>
										</div>
									</div>
								</div>
								<div class="custom-accordion">
									<div>
										<input id="cac-2" name="custom-accordion-1" type="checkbox">
										<label for="cac-2">Telemedicina</label>
										<div class="custom-article custom-small">
											<ol>
												<li>Fisioterapia.</li>
												<li>Medicina física y rehabilitación (Fisiatría).</li>
											</ol>
										</div>
									</div>
								</div>
								<div class="custom-accordion">
									<div>
										<input id="cac-3" name="custom-accordion-1" type="checkbox">
										<label for="cac-3">Passus Bienestar</label>
										<div class="custom-article custom-small">
											<ol>
												<li>Clases de Natación para niños y niñas.</li>
												<li>Natación jóvenes y adultos.</li>
												<li>Matronatación.</li>
												<li>Acuafiestas.</li>
											</ol>
											<ul>
												<li>Instructor personalizado.</li>
												<li>Cuatro estilos: espalda, libre, pecho y mariposa.</li>
												<li>Piscinas climatizadas y certificadas.</li>
												<li>Cada clase dura 45 minutos.</li>

											</ul>
										</div>
									</div>
								</div>

								<div id="location">
									<h4>¿Dónde estamos?</h4>
									<div class="map-container">
										<iframe
											src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.2643811041094!2d-74.04797293224411!3d4.7240758309876005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f8542e70a8993%3A0xacd10cd747531513!2sPassus%20IPS%20Norte%20-%20Hidroterapia!5e0!3m2!1ses!2sco!4v1745843731540!5m2!1ses!2sco"
											allowfullscreen=""
											loading="lazy"
											referrerpolicy="no-referrer-when-downgrade"
											title="Mapa de ubicación Passus IPS Norte - Hidroterapia">
										</iframe>
									</div>
								</div>
							<!-- </div> -->

						</div>

					</div>

				</div>
			</div>
		</div>

		<!-- Footer -->

		<?php include('includes/_footer.php'); ?>
	</div>
	<?php include('includes/_js.php'); ?>
	<script src="js/elements.js"></script>
	<script src="js/custom.js"></script>
	<script src="js/accesibilidad.js"></script>
</body>

</html>