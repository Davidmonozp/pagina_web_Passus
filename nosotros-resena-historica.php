<?php include('includes/_head.php'); ?>
<link rel="stylesheet" type="text/css" href="styles/elements.css?v=1.1">
<link rel="stylesheet" type="text/css" href="styles/elements_responsive.css?v=1.1">
<link rel="stylesheet" type="text/css" href="styles/about.css?v=1.1">
<link rel="stylesheet" type="text/css" href="styles/about_responsive.css?v=1.1">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css?v=1.1">
<link rel="stylesheet" type="text/css" href="styles/core.css?v=1.4">
<link rel="stylesheet" type="text/css" href="styles/responsive.css?v=1.1">
<style type="text/css">
	/* TIMELINE
	–––––––––––––––––––––––––––––––––––––––––––––––––– */

	.timeline ul {
		padding: 50px 0;
	}

	.timeline ul li {
		list-style-type: none;
		position: relative;
		width: 6px;
		margin: 0 auto;
		padding-top: 50px;
		background: #00A54F;
	}

	.timeline ul li::after {
		content: "";
		position: absolute;
		left: 50%;
		bottom: 0;
		transform: translateX(-50%);
		width: 30px;
		height: 30px;
		border-radius: 50%;
		background: inherit;
		z-index: 1;
	}

	.timeline ul li div {
		position: relative;
		bottom: 0;
		width: 400px;
		padding: 15px;
		background: #3695eb;
		color: #FFF;
	}

	.timeline ul li div::before {
		content: "";
		position: absolute;
		bottom: 7px;
		width: 0;
		height: 0;
		border-style: solid;
	}

	.timeline ul li:nth-child(odd) div {
		left: 45px;
	}

	.timeline ul li:nth-child(odd) div::before {
		left: -15px;
		border-width: 8px 16px 8px 0;
		border-color: transparent #3695eb transparent transparent;
	}

	.timeline ul li:nth-child(even) div {
		left: -439px;
	}

	.timeline ul li:nth-child(even) div::before {
		right: -15px;
		border-width: 8px 0 8px 16px;
		border-color: transparent transparent transparent #3695eb;
	}

	time {
		display: block;
		font-size: 1.2rem;
		font-weight: bold;
		margin-bottom: 8px;
	}


	/* EFFECTS
	–––––––––––––––––––––––––––––––––––––––––––––––––– */

	.timeline ul li::after {
		transition: background 0.5s ease-in-out;
	}

	.timeline ul li.in-view::after {
		background: #3695eb;
	}

	.timeline ul li div {
		visibility: hidden;
		opacity: 0;
		transition: all 0.5s ease-in-out;
	}

	.timeline ul li:nth-child(odd) div {
		transform: translate3d(200px, 0, 0);
	}

	.timeline ul li:nth-child(even) div {
		transform: translate3d(-200px, 0, 0);
	}

	.timeline ul li.in-view div {
		transform: none;
		visibility: visible;
		opacity: 1;
	}


	/* GENERAL MEDIA QUERIES
	–––––––––––––––––––––––––––––––––––––––––––––––––– */

	@media screen and (max-width: 900px) {
		.timeline ul li div {
			width: 250px;
		}

		.timeline ul li:nth-child(even) div {
			left: -289px;
			/*250+45-6*/
		}
	}

	@media screen and (max-width: 600px) {
		.timeline ul li {
			margin-left: 20px;
		}

		.timeline ul li div {
			width: calc(100vw - 91px);
		}

		.timeline ul li:nth-child(even) div {
			left: 45px;
		}

		.timeline ul li:nth-child(even) div::before {
			left: -15px;
			border-width: 8px 16px 8px 0;
			border-color: transparent #3695eb transparent transparent;
		}
	}


	/* EXTRA/CLIP PATH STYLES
	–––––––––––––––––––––––––––––––––––––––––––––––––– */
	.timeline-clippy ul li::after {
		width: 40px;
		height: 40px;
		border-radius: 0;
	}

	.timeline-rhombus ul li::after {
		clip-path: polygon(50% 0%, 100% 50%, 50% 100%, 0% 50%);
	}

	.timeline-rhombus ul li div::before {
		bottom: 12px;
	}

	.timeline-star ul li::after {
		clip-path: polygon(50% 0%,
				61% 35%,
				98% 35%,
				68% 57%,
				79% 91%,
				50% 70%,
				21% 91%,
				32% 57%,
				2% 35%,
				39% 35%);
	}

	.timeline-heptagon ul li::after {
		clip-path: polygon(50% 0%,
				90% 20%,
				100% 60%,
				75% 100%,
				25% 100%,
				0% 60%,
				10% 20%);
	}

	.timeline-infinite ul li::after {
		animation: scaleAnimation 2s infinite;
	}

	@keyframes scaleAnimation {
		0% {
			transform: translateX(-50%) scale(1);
		}

		50% {
			transform: translateX(-50%) scale(1.25);
		}

		100% {
			transform: translateX(-50%) scale(1);
		}
	}
</style>

<body>

	<div class="super_container">

		<!-- Header -->

		<?php include('includes/_header.php'); ?>
		<?php include('includes/accesibilidad.php'); ?>


		<!-- Home -->

		<div class="home d-flex flex-column align-items-start justify-content-end" style="background-color: rgba(44, 62, 80, 0);">
			<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/nosotros-img/reseña-historica-1.png" data-speed="0.8"></div>
			<div class="home_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="home_content px-2" style="background-color: rgb(24, 113, 191);  border-radius: 20px; opacity: 0.9">
								<div class="home_title" style="font-size: 40px; margin-left: 12px; margin-right: 12px;">Reseña Histórica</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Intro -->

		<div class="intro" id="reseña">
			<div class="container">
				<div class="row">

					<!-- Intro Content -->
					<div class="col-lg-12">
						<div class="intro_content text-center">
							<div class="section_title_container">
								<div class="section_title">
									<h2>Reseña Histórica</h2>
								</div>
							</div>
							<section class="timeline">
								<ul>
									<li>
										<div class="linea_tiempo">
											<time>2009</time> Somos una institución prestadora de servicios de salud expertos en rehabilitación terapéutica integral y reeducación para cualquier tipo de población, haciendo énfasis en la población con discapacidad cognitiva, comportamental y física, PASSUS IPS TALLER PSICOMOTRIZ Y PASSUS DIVERTIDO fueron constituidos en el año 2009, nace por iniciativa de sus accionistas profesionales de la salud con gran trayectoria en el sector y experiencias cercanas a este tipo de etiología, en vista de la problemática en salud, educación y social que existe en nuestro país por falta de un adecuado enfoque de la población con discapacidad cognitiva.
										</div>
									</li>
									<li>
										<div class="linea_tiempo">
											<time>2009</time> En el año 2009 se conforma la primera sucursal en el barrio Niza en la ciudad de Bogotá, en este mismo año se dio inicio a la prestación de servicios domiciliarios en la ciudad de Neiva-Huila.
										</div>
									</li>
									<li>
										<div class="linea_tiempo">
											<time>2010</time> Para enero 2010 Se inicia a prestar servicios domiciliarios en Ibagué-Tolima, y se amplía la cobertura para la ciudad de Florencia- Caquetá, chía, Cajicá, Mosquera, Fusagasugá en Cundinamarca.
										</div>
									</li>
									<li>
										<div class="linea_tiempo">
											<time>2011</time> Para el año 2011 se traslada la sede principal hacia el barrio Cedritos-Bogotá y se instala sede en Bogotá – Américas I.
										</div>
									</li>
									<li>
										<div class="linea_tiempo">
											<time>2018</time> En el año 2018 se amplía cobertura de la sede de Américas I instalando sede Américas II en Bogotá.
										</div>
									</li>
									<li>
										<div class="linea_tiempo">
											<time>2020</time> En el año 2020 Se amplía cobertura en la ciudad de Bogotá instalando la sede de Veraguas-Bogotá.
										</div>
									</li>
									<li>
										<div class="linea_tiempo">
											<time>2022</time> Desde 2022 PASSUS cuenta con las sedes de Cedritos, Américas I Y II, Veraguas, Chía, Florencia e Ibagué. La experiencia de nuestros profesionales tanto asistenciales como administrativos garantizan la operatividad y calidad en los servicios prestados, manteniendo una eficiencia en la atención para todos los usuarios.
										</div>
									</li>

									<li>
										<div class="linea_tiempo">
											<time></time> Así mismo intervenimos en hidroterapia a población adulta con compromisos osteomusculares.<br><br>Contamos con sedes propias, ubicadas a nivel nacional y estratégicamente georreferenciadas.
										</div>
									</li>

									<li>
										<div class="linea_tiempo">
											<time></time> Nuestro recurso humano se destaca por su nivel de competencia, exigencia, responsabilidad, amabilidad, su intervención está basada en la humanización y excelencia a través de la mejora contínua.
										</div>
									</li>
									<li>
										<div class="linea_tiempo">
											<time>2023</time>PASSUS cuenta con las sedes de Cedritos (HDT),Sur occidente (HDT), Sur Occidente (RHB), Centro (RHB-HDT), Chia (RHB), Florecia (RHB-HDT), Ibagué (RHB-HDT). Tambien, sedes de Bienestar Integral con ofertas para COMPENSAR CCF en Américas, Cedritos y Veraguas.
										</div>
									</li>
									<li>
										<div class="linea_tiempo">
											<time>2024</time>PASSUS hace Apertura de Servicios de Rehabilitación Integral en Sede Centro - Bogotá. Fortalecimiento de habilidades y competencias del talento humano y automatizació con IA de procesos.
										</div>
									</li>
									<li>
										<div class="linea_tiempo">
											<time>2025</time>Nuevos servicios de bienestar: Yoga, pilates y mindfulness, categorizados para gestantes, adultos mayores y pacientes de cualquier edad, como apoyo no farmacológico en el manejo del dolor crónico osteoarticular.
										</div>
									</li>

									<li>
										<div class="linea_tiempo">
											<time></time> Se incorpora el servicio de Hidroterapia especializado para ARL.
											<time></time>
											Nuevo programa de rehabilitación cognitivo-comportamental para pacientes adultos con patologías adquiridas secundarias a trauma cráneo-encefálico con compromiso leve-moderado y demencias.
										</div>
									</li>
								</ul>
							</section>
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
	<script type="text/javascript">
		(function() {
			"use strict";

			// define variables
			var items = document.querySelectorAll(".timeline li");

			// check if an element is in viewport
			// http://stackoverflow.com/questions/123999/how-to-tell-if-a-dom-element-is-visible-in-the-current-viewport
			function isElementInViewport(el) {
				var rect = el.getBoundingClientRect();
				return (
					rect.top >= 0 &&
					rect.left >= 0 &&
					rect.bottom <=
					(window.innerHeight || document.documentElement.clientHeight) &&
					rect.right <= (window.innerWidth || document.documentElement.clientWidth)
				);
			}

			function callbackFunc() {
				for (var i = 0; i < items.length; i++) {
					if (isElementInViewport(items[i])) {
						items[i].classList.add("in-view");
					}
				}
			}

			// listen for events
			window.addEventListener("load", callbackFunc);
			window.addEventListener("resize", callbackFunc);
			window.addEventListener("scroll", callbackFunc);
		})();
	</script>
</body>

</html>