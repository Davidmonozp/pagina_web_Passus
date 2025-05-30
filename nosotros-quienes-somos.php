<?php include('includes/_head.php'); ?>

<link rel="stylesheet" type="text/css" href="styles/elements.css?v=1.1">
<link rel="stylesheet" type="text/css" href="styles/elements_responsive.css?v=1.1">
<link rel="stylesheet" type="text/css" href="styles/services.css?v=1.1">
<link rel="stylesheet" type="text/css" href="styles/services_responsive.css?v=1.1">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css?v=1.1">
<link rel="stylesheet" type="text/css" href="styles/core.css?v=1.6">
<link rel="stylesheet" type="text/css" href="styles/responsive.css?v=1.1">

<body>

	<div class="super_container">

		<!-- Header -->

		<?php include('includes/_header.php'); ?>
		<?php include('includes/accesibilidad.php'); ?>
		<?php include('includes/_boton_whatsapp.php'); ?>

		<!-- Home -->

		<!-- <div class="home d-flex flex-column align-items-start justify-content-end" style="background-color: rgba(44, 62, 80, 0); ">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/nosotros-img/quienes-somos-1.png" data-speed="0.8"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content px-2" style="background-color: rgb(24, 113, 191);  border-radius: 20px; opacity: 0.9">
							<div class="home_title" style="font-size: 40px; margin-left: 12px; margin-right: 12px;">Quiénes Somos</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> -->

		<section class="hero-banner-quienesSomos">
			<div class="hero-overlay">
				<h1 id="titulo_quienes_somos">Quiénes somos
					<hr class="quienesSomos">
				</h1>
			</div>
		</section>
		<!-- Intro -->

		<div class="intro" id="quienes_somos">
			<div class="container">
				<div class="row">
					<!-- Intro Content -->
					<div class="col-lg-7">
						<div class="intro_content">
							<div class="section_title_container">
								<div class="section_title mt-0">
									<h2>Passus IPS</h2><br>
								</div>
							</div>
							<div class="text-justify">
								<p>Somos una entidad especializada en la prestación de servicios de salud y bienestar, con un enfoque en rehabilitación terapéutica integral. Contamos con un equipo de profesionales altamente calificados y espacios diseñados para brindar una atención de calidad. Te invitamos a conocer nuestras sedes y experimentar un servicio que promueve tu bienestar y recuperación.</p> <br><br>
							</div>

							<!-- Milestones -->
							<div class="row">
								<div class="col-md-4">
									<div class="section_title"><img src="images/mision.png" class="img-fluid"></div>
								</div>
								<div class="col-md-8 text-justify">
									<p>PASSUS innova con ética y seguridad, para que tu experiencia con nosotros sea satisfactoria, amable y mejores tu calidad de vida de forma segura, a través de nuestros expertos en medicina, terapéutica y bienestar.</p> <br>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<div class="section_title"><img src="images/vision.png" class="img-fluid"></div>
								</div>
								<div class="col-md-8 text-justify">
									<p>PASSUS, para el 2030, incrementará su reconocimiento por la excelencia e innovación ética en la prestación de servicios de bienestar y de rehabilitación médico - terapéutica, promoviendo en nuestro talento humano y proveedores, acciones seguras y humanizadas. También, iremos ampliando nuestra presencia a nivel nacional e internacional.</p>
								</div>
							</div>

						</div>
					</div>

					<!-- Intro Image -->
					<div class="col-lg-5 pt-5 mt-5">
						<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="carousel-item-quienes active">
									<img src="images/quienes_somos/circulo_excelencia1.png" class="d-block w-100" alt="...">
								</div>
								<!-- <div class="carousel-item">
									<img src="images/quienes_somos/quienes_somos_1.jpeg" class="d-block w-100" alt="...">
								</div> -->
								<!-- <div class="carousel-item">
									<img src="images/quienes_somos/quienes_somos_2.jpeg" class="d-block w-100" alt="...">
								</div> -->
								<!-- <div class="carousel-item">
									<img src="images/quienes_somos/quienes_somos_3.jpeg" class="d-block w-100" alt="...">
								</div> -->
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
				</div>
			</div>
		</div>

		<?php include('includes/_footer.php'); ?>
	</div>
	<?php include('includes/_js.php'); ?>
	<script src="js/elements.js"></script>
	<script src="js/custom.js"></script>
	<script src="js/accesibilidad.js"></script>
</body>

</html>