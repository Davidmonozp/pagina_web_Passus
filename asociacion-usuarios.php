<?php include('includes/_head.php'); ?>
<link rel="stylesheet" type="text/css" href="styles/elements.css?v=1.1">
<link rel="stylesheet" type="text/css" href="styles/elements_responsive.css?v=1.1">
<link rel="stylesheet" type="text/css" href="styles/services.css?v=1.1">
<link rel="stylesheet" type="text/css" href="styles/services_responsive.css?v=1.1">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css?v=1.1">
<link rel="stylesheet" type="text/css" href="styles/core.css?v=1.4">
<link rel="stylesheet" type="text/css" href="styles/responsive.css?v=1.1">
<link rel="stylesheet" type="text/css" href="styles/servicios.css">
<link rel="stylesheet" type="text/css" href="styles/asociacion-usuarios.css">


<body>

	<div class="super_container">

		<!-- Header -->

		<?php include('includes/_header.php'); ?>
		<?php include('includes/accesibilidad.php'); ?>
		<?php include('includes/_boton_whatsapp.php'); ?>



		<!-- Home -->
		<!-- 
		<div class="home d-flex flex-column align-items-start justify-content-end" style="background-color: rgba(44, 62, 80, 0); ">
			<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/nosotros-img/participacion-ciudadana-1.png" data-speed="0.8"></div>
			<div class="home_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="home_content px-2" style="background-color: rgb(24, 113, 191);  border-radius: 20px; opacity: 0.9">
								<div class="home_title" style="font-size: 40px; margin-left: 12px; margin-right: 12px;">Política de Participación Ciudadana</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> -->
		<section class="hero-banner-participacion">
			<div class="hero-overlay">
				<h1 id="titulo_participacion_ciudadana">Asociación de usuarios
					<hr>
				</h1>
			</div>
		</section>
		<!-- Services -->

		<div class="services" id="participacion_ciudadana">
			<div class="container">
				<div class="container-asociacion">
					<div class="asociacion1">
						<h3>
							Tu voz transforma la salud
						</h3>
						<p class="parrafo-asociacion">Haz parte de la Asociación de Usuarios y contribuye a mejorar la calidad de nuestros servicios.</p>
					</div>
					<div class="asociacion2">
						<img src="./images/Asociacion-usuarios1.png" alt="asociacion de usuarios" class="img-asociacion">
						<p class="fecha-publicacion">Publicado el 1 de septiembre de 2025</p>
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