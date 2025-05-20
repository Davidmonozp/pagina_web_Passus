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

		<!-- Home -->
		<section class="hero-banner-bogota_centro" id="bogota_centro">
			<div class="hero-overlay">
				<h1 id="titulo_bogota_centro">Sede - Centro Bogotá
					<hr>
				</h1>
			</div>
		</section>

		<!-- Contact -->
		<div class="intro" id="sede_bogota_centro">
			<div class="container">
				<div class="row py-3">
					<!-- Titulo -->
					<div class="">
						<h2 class="titulo_sedes">Nuestros servicios Hidroterapia y Rehabilitacion Integral en Bogotá - Centro</h2>
						<p class="parrafo_ser">Contamos con los más altos estándares de calidad y con un gran equipo de profesionales al servicio de nuestros clientes.</p>
					</div>
					<!-- Intro Image -->
					<div class="col-md-5">
						<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="carousel-item active">
									<img src="images/sedes/Veraguas1.jpeg" class="d-block w-100" alt="...">
								</div>
								<div class="carousel-item">
									<img src="images/sedes/Veraguas2.jpeg" class="d-block w-100" alt="...">
								</div>
								<div class="carousel-item">
									<img src="images/sedes/Veraguas3.jpeg" class="d-block w-100" alt="...">
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
						<div class="contact_info my-3">
							<ul>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div>Dirección:</div>
									<div class="pl-2">Carrera 32B # 4-27</div>
								</li>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div>Horarios de atención:</div>
									<div class="pl-2">
										Lunes a viernes de 6:30 am - 6:30 pm y Sábado de 7:00 am - 1:00 pm
									</div>
								</li>
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
									<label for="cac-1">Programa de Rehabilitación Integral</label>
									<div class="custom-article custom-small">
										<ol>
											<li>Psicología.</li>
											<li>Terapia física(Fisioterapia).</li>
											<li>Terapia de lenguaje / Fonoaudiológia.</li>
											<li>Terapia ocupacional.</li>
										</ol>
									</div>
								</div>
							</div>
							<div class="custom-accordion">
								<div>
									<input id="cac-2" name="custom-accordion-1" type="checkbox">
									<label for="cac-2">Programa de Hidroterapia o Terapia Hídrica</label>
									<div class="custom-article custom-small">
										<ul>
											<li>Terapia física (Fisioterapia).</li>
											<li>Terapia en agua.
									</div>
								</div>
							</div>
						</div>
						<div id="location">
							<h4>¿Dónde estamos?</h4>
							<div class="map-container">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127261.772393347!2d-74.24801035664063!3d4.606485200000009!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6a51b9ea4cd50393%3A0xb78dcf3dc95c25b7!2sPassus%20IPS%20Centro%20-%20Hidroterapia%20y%20Rehabilitaci%C3%B3n%20Integral!5e0!3m2!1ses!2sco!4v1747746452067!5m2!1ses!2sco" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
							</div>
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