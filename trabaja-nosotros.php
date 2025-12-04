<?php include('includes/_head.php'); ?>
<link rel="stylesheet" type="text/css" href="styles/elements.css?v=2.1">
<link rel="stylesheet" type="text/css" href="styles/elements_responsive.css?v=1.1">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css?v=1.8">
<link rel="stylesheet" type="text/css" href="styles/core.css?v=1.7">
<link rel="stylesheet" type="text/css" href="styles/responsive.css?v=1.2">

<body>	

	<div class="super_container">

		<?php include('includes/_header.php'); ?>
		<?php include('includes/accesibilidad.php'); ?>
		<?php include('includes/_boton_whatsapp.php'); ?>


		
				<section class="hero-banner-trabajaNosotros">
					<div class="hero-overlay">
						<h1>Descubre y aplica
							<hr>
						</h1>
					</div>
				</section>
			

		<div class="faq-grid-container" id="trabajaNosotros">
			<div class="faq-grid-text">
				<h2>Trabaja con nosotros
					<hr>
				</h2>
				<p>
					En Passus, nuestra prioridad es brindar atención de calidad y humanizada. Por eso, buscamos personas comprometidas que quieran crecer con nosotros y aportar a un equipo dinámico e innovador.
				</p>
				<div class="faq-accordion">
					<div class="faq-accordion-item">
						<button id="faq-accordion-button-2" aria-expanded="false">
							<span class="faq-accordion-title">¿Qué te ofrecemos?</span>
							<span class="faq-icon" aria-hidden="true"></span>
						</button>
						<div class="faq-accordion-content">
							<ul>
								<li>
									Formación continua y oportunidades de crecimiento.
								</li>
								<li>
									Trabajo colaborativo con profesionales apasionados.
								</li>
								<li>
									Entorno innovador con tecnología de punta.
								</li>
								<li>
									Beneficios y salarios competitivos.
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="faq-accordion">
					<div class="faq-accordion-item">
						<button id="faq-accordion-button-2" aria-expanded="false">
							<span class="faq-accordion-title">¿Cómo aplicar?</span>
							<span class="faq-icon" aria-hidden="true"></span>
						</button>
						<div class="faq-accordion-content">
							<p>Explora nuestras vacantes y aplica a través de nuestras plataformas de empleo, o consulta las ofertas disponibles al final de esta página. ¡Haz parte de nuestra comunidad de talentos! Tu próxima oportunidad te espera.</p>
							<div class="logo-oferta">
								<a href="https://co.linkedin.com/in/passus" target="_blank">
									<img src="images/logo_linkedin.png" alt="LinkedIn" class="linkedin-logo">
								</a>
								<a href="https://co.indeed.com/cmp/Passus-Ips-Taller-Psicomotriz" target="_blank">
									<img src="images/logo-indeed.png" alt="" class="indeed-logo">
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="faq-grid-image">
				<img src="images/trabaja-nosotros.png" alt="Imagen de hidroterapia">
			</div>
		</div>

		<!--Listado de vacantes-->
		<div class="service_oferta">
			<div class="container" id="nuestras_vacantes">
				<div class="row">
					<div class="col text-center">
						<div class="section_title_container">
							<div class="section_title">
								<h2 class="vacantes">Nuestras Vacantes disponibles</h2>
							</div>
						</div>
						<br><br>
					</div>
				</div>


				<div class="row services_row_oferta justify-content-center" id="ofertas-destino">

					<div class="col-12 text-center mb-4">
						<input type="text" id="busqueda-cargo" placeholder="Buscar cargo..." class="form-control">
						<button id="btn-buscar" class="btn btn-primary mt-2">Buscar</button>
					</div>

					<!-- Contenedor para el alert -->
					<div id="alert-message" class="alert-message">
						<p id="alert-text">No hay ofertas disponibles con este nombre</p>
						<button id="close-alert" class="close-alert">Cerrar</button>
					</div>

					<div class="col-xl-4 col-md-6 services_col_oferta">
						<div class="services_oferta text-center">
							<div class="services_title_oferta">AUXILIARES DE ADMISIONES Y CAJA</div>
							<div class="services_text_oferta">
								<!-- <p>Descripción del puesto: Estamos en la búsqueda de un Psicólogo Asistencial para unirse a nuestro equipo en PASSUS IPS . El candidato ideal será una persona empática, comprometida y con una pasión por la salud mental, capaz de brindar atención y apoyo psicológico a pacientes en un entorno clínico.</p> -->
								<!--<li>$16.000 por hora</li>-->
								<li>Tipo de puesto: Tiempo completo</li>
								<li>Lugar: Bogota</li>
								<li><a href="https://co.indeed.com/cmp/Passus-Ips-Taller-Psicomotriz/jobs?jk=269feb9ffe09ccb3&start=0" target="_blank">Aplica aqui</a></li>
							</div>
						</div>
					</div>



					<div class="col-xl-4 col-md-6 services_col_oferta">
						<div class="services_oferta text-center">
							<div class="services_title_oferta">PROFESIONAL COMPRAS, LOGISTICA, PROVEEDORES Y SUMINISTROS</div>
							<div class="services_text_oferta">
								<li>Tipo de puesto: Tiempo completo</li>
								<li>Lugar: Bogotá</li>
								<li><a href="https://co.indeed.com/cmp/Passus-Ips-Taller-Psicomotriz/jobs?jk=11b42a26451929e3&start=0" target="_blank">Aplica aqui</a></li>
							</div>
						</div>
					</div>

					<div class="col-xl-4 col-md-6 services_col_oferta">
						<div class="services_oferta text-center">
							<div class="services_title_oferta">Profesional de Talento Humano</div>
							<div class="services_text_oferta">								
								<!--<li>Salarios: $1.800.000 - $2.300.000 por mes</li>-->
								<li>Tipo de puesto: Tiempo completo</li>
								<li>Lugar: Bogotá</li>
								<li><a href="https://co.indeed.com/rc/clk?jk=679f8f4a44e5b2a8&bb=HyyVISExnPTUk5fWqcyPPcR_or3tcDSLPf2YePl4FfwdA8Ch2NIcQC8wWnt49Q0q-swiRV4P0UlPeNDkBefAEcLPl1VuG9WPZMhkZI5erdDmPmt0_em6gV7URLIEUeqmP1ZtMOSUl7E%3D&xkcb=SoDD67M3y0yc75SwCR0JbzkdCdPP&fccid=45e7b9c5e1f462da&cmp=Passus-Ips-Taller-Psicomotriz&ti=Analista+de+talento+humano&vjs=3" target="_blank">Aplica aqui</a></li>
							</div>
						</div>
					</div>

					<div class="col-xl-4 col-md-6 services_col_oferta">
						<div class="services_oferta text-center">
							<div class="services_title_oferta">Auxiliar de apoyo</div>
							<div class="services_text_oferta">							
								<!--<li>Salarios: $1.800.000 - $2.300.000 por mes</li>-->
								<li>Tipo de puesto: Tiempo completo</li>
								<li>Lugar: Bogotá</li>
								<li><a href="https://co.indeed.com/rc/clk?jk=223db05f76e86d7b&bb=HyyVISExnPTUk5fWqcyPPQzHvz1bJTMaAltS1w7yxWpVWdGIs3tqwCEDiOjl-c7a_Dg8Zj3t02Ul7BT8ayW7-xYCKoH1TIlXxz8flwU3bG5nnvbxeMIxrS01sPmDZq5F3hkd04AXVp0%3D&xkcb=SoB367M3y0yc75SwCR0IbzkdCdPP&fccid=45e7b9c5e1f462da&cmp=Passus-Ips-Taller-Psicomotriz&ti=Auxiliar+de+apoyo&vjs=3" target="_blank">Aplica aqui</a></li>
							</div>
						</div>
					</div>

					<div class="col-xl-4 col-md-6 services_col_oferta">
						<div class="services_oferta text-center">
							<div class="services_title_oferta">Fonoaudiólogo(a) – IPS</div>
							<div class="services_text_oferta">								
								<!--<li>Salarios: $20.000 por hora</li>-->
								<li>Tipo de puesto: Tiempo completo</li>
								<li>Lugar: Bogotá</li>
								<li><a href="https://co.indeed.com/rc/clk?jk=af05e373495c0858&bb=HyyVISExnPTUk5fWqcyPPbsD7Rr2kmD35iz-X5G_LhaFkc_ykWIG3HuoQYKsgXb26xogn4RW_ZwQ4jKZrlmeEK66_WB49WBSX9pi7zqimchdCX-uUXMbMofVsyOsw0Ikfm631UaWRPU%3D&xkcb=SoD567M3y0yc75SwCR0PbzkdCdPP&fccid=45e7b9c5e1f462da&cmp=Passus-Ips-Taller-Psicomotriz&ti=Fonoaudiologo&vjs=3" target="_blank">Aplica aqui</a></li>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-md-6 services_col_oferta">
						<div class="services_oferta text-center">
							<div class="services_title_oferta">Auxiliar contable</div>
							<div class="services_text_oferta">								
								<!--<li>Salarios: $20.000 por hora</li>-->
								<li>Tipo de puesto: Tiempo completo</li>
								<li>Lugar: Bogotá</li>
								<li><a href="https://co.indeed.com/rc/clk?jk=8b3642df551f3f6c&bb=HyyVISExnPTUk5fWqcyPPZkwBixC-1xXVTuSINPum59WrseKXcVw_Cmg4fvCCuUuKUF6f2hga3H_0zku4VFFAZWCpz4u691ywYQHbLD2QJ8mdk_EM22kDUUvQEYJ1cWeik1Pj3BpzJQ%3D&xkcb=SoDQ67M3y0yc75SwCR0NbzkdCdPP&fccid=45e7b9c5e1f462da&cmp=Passus-Ips-Taller-Psicomotriz&ti=Auxiliar+contable&vjs=3" target="_blank">Aplica aqui</a></li>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>





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

	<!-- <div class="modal" id="modal-aviso" tabindex="-1" role="dialog">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header bg-rojo">
						<h5 class="modal-title modal-aviso-titulo">¡Información importante!</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true" style="color: #FFF;">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-md-12 text-center">
								<img src="images/aviso_1.jpg" style="max-height: 400px;" class="img-fluid">
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-main-1 float-left" data-dismiss="modal">Aceptar</button>
					</div>
				</div>
			</div>
		</div> -->

	<!-- Footer -->
	<?php include('includes/_footer.php'); ?>
	<?php include('includes/_js.php'); ?>
	<script src="js/elements.js"></script>
	<script src="js/custom.js"></script>
	<script src="js/trabaja-nosotros.js"></script>
	<script src="js/accesibilidad.js"></script>
	<script src="js/servicios.js"></script>
</body>

</html>