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


		<section class="hero-banner-HD_surOccidente" id="HD_surOccidente">
			<div class="hero-overlay">
				<h1 id="titulo_HD_surOccidente">Sede - Bogotá Sur Occidente
					<hr>
				</h1>
			</div>
		</section>

		<!-- Contact -->
		<div class="intro" id="sede_hidroterapia_sur">
			<div class="container">
				<div class="row py-3">

					<!-- Titulo -->
					<div class="">
						<h2 class="titulo_sedes">Nuestros servicios Hidroterapia en Bogotá - Sur Occidente</h2>
						<p class="parrafo_ser">Contamos con los más altos estándares de calidad y con un gran equipo de profesionales al servicio de nuestros clientes.</p>
					</div>

					<!-- Intro Image -->
					<div class="col-md-5">
						<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="carousel-item active">
									<img src="images/sedes/Americas(I)2.jpeg" class="d-block w-100" alt="...">
								</div>
								<div class="carousel-item">
									<img src="images/sedes/Americas(I)4.jpeg" class="d-block w-100" alt="...">
								</div>
								<div class="carousel-item">
									<img src="images/sedes/Americas(I)5.jpeg" class="d-block w-100" alt="...">
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
									<div class="pl-2">Calle 5A # 71B-27 Nueva Marsella</div>
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
									<label for="cac-1">Programa de hidroterapia o terapia Hídrica</label>
									<div class="custom-article custom-small">
										<ol>
											<li>Terapia física (Fisioterapia).</li>
											<li>Terapia en agua.</li>
										</ol>

									</div>
								</div>
							</div>
							<div class="accordions">
								<div id="location">
									<h4>¿Dónde estamos?</h4>
									<div class="map-container">
										<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31814.481012201355!2d-74.17092204093932!3d4.627939109362455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9ea81e7ed821%3A0x6b8d965ceacd3695!2sPassus%20Divertido%20S.A.S%20Mandalay!5e0!3m2!1ses!2sco!4v1745931166871!5m2!1ses!2sco" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
									</div>
								</div>
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