<?php include('includes/_head.php'); ?>
<link rel="stylesheet" type="text/css" href="styles/elements.css?v=1.1">
<link rel="stylesheet" type="text/css" href="styles/elements_responsive.css?v=1.1">
<link rel="stylesheet" type="text/css" href="styles/contact.css?v=1.1">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css?v=1.1">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css?v=1.1">
<link rel="stylesheet" type="text/css" href="styles/core.css?v=1.3">
<link rel="stylesheet" type="text/css" href="styles/responsive.css?v=1.1">
<link rel="stylesheet" type="text/css" href="styles//servicios.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">


</head>

<body>

	<div class="super_container">

		<!-- Header -->

		<?php include('includes/_header.php'); ?>
		<?php include('includes/accesibilidad.php'); ?>

		<!-- Home -->

		<!-- <div class="home d-flex flex-column align-items-start justify-content-end" style="background-color: rgba(44, 62, 80, 0); ">
			<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/nosotros.jpeg" data-speed="0.8"></div>
			<div class="home_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="home_content px-2" style="background-color: rgba(54, 149, 235, 0.8);">
								<div class="home_title" style="font-size: 50px;">Contáctanos</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> -->
		<section class="hero-banner-contactanos">

			<div class="hero-overlay">
				<!-- Redes Sociales -->
				<div class="social-icons">
					<a href="https://www.tiktok.com/@passusipscolombia" target="_blank"><i class="fab fa-tiktok"></i></a>
					<a href="https://www.facebook.com/passsusipscolombia?_rdc=1&_rdr#" target="_blank"><i class="fab fa-facebook-f"></i></a>
					<a href="https://www.instagram.com/passusipscolombia/?igsh=dm1tdWJuMHEzMGU%3D#" target="_blank"><i class="fab fa-instagram"></i></a>
					<a href="https://www.youtube.com/@passusipscolombia" target="_blank"><i class="fab fa-youtube"></i></a>
					<a href="https://www.linkedin.com/in/passuscolombia" target="_blank"><i class="fab fa-linkedin-in"></i></a>
					<a href="mailto:contacto@tuempresa.com"><i class="fas fa-envelope"></i></a>
				</div>
				<h1>Contáctanos
					<hr>
				</h1>

				<a href="servicios_passusIPS.php">
					<button class="reflected-button">Servicios Passus IPS</button>
				</a>
			</div>


	</div>
	</section>


	<!-- Contact -->

	<div class="contact" id="contactanos">
		<div class="container">
			<div class="row">

				<!-- Contact Form -->
				<!-- <div class="col-lg-6"> -->
				<div class="col-lg-6">
					<div class="contact_form_container">
						<div class="contact_form_title">Escríbenos</div>
						<form action="#" class="contact_form" id="contactForm" name="contactform">
							<div class="d-flex flex-row align-items-start justify-content-between flex-wrap">
								<div class="col-md-12 px-0">
									<input type="text" class="contact_input" name="nombre" id="nombre" style="width: 100%;" placeholder="Nombres y apellidos" required>
								</div>
								<div class="col-md-6 px-0">
									<select class="contact_select contact_input" name="tipo_identificacion" id="tipo_identificacion" style="width: 100%;" required>
										<option disabled="" selected="" value="">Tipo documento</option>
										<option>Cédula de Ciudadanía</option>
										<option>Cédula de Extranjería</option>
									</select>
								</div>
								<div class="col-md-6 px-0">
									<input type="text" class="contact_input" name="identificacion" id="identificacion" style="width: 100%;" placeholder="Identificación" required>
								</div>
								<div class="col-md-12 px-0">
									<input type="email" class="contact_input" name="email" id="email" style="width: 100%;" placeholder="Correo" required>
								</div>
								<div class="col-md-6 px-0">
									<input type="tel" class="contact_input" name="telefono" id="telefono" style="width: 100%;" placeholder="Teléfono" required>
								</div>
								<div class="col-md-6 px-0">
									<select class="contact_select contact_input" name="ciudad" id="ciudad" style="width: 100%;" required>
										<option disabled="" selected="" value="">Ciudad</option>
										<option>Bogotá</option>
										<option>Florencia</option>
										<option>Ibagué</option>
										<option>Chía</option>
									</select>
								</div>
								<div class="col-md-12 px-0">
									<select class="contact_select contact_input" name="especialidad" id="especialidad" style="width: 100%;" required>
										<option disabled="" selected="" value="">Especialidad</option>
										<option>Hidroterapia</option>
										<option>Junta Interdisciplinaria</option>
										<option>Masajes Terapéticos</option>
										<option>Natación y Matronatación</option>
										<option>Neuropediatría</option>
										<option>Neuropsicología</option>
										<option>Psicología</option>
										<option>Psiquiatría infantil y adolescente</option>
										<option>Rehabilitación</option>
										<option>Telemedicina</option>
										<option>Yoga y Pilates</option>
										<option>Otro</option>
									</select>
								</div>
								<div class="col-md-12 px-0">
									<textarea class="contact_input" name="comentarios" id="comentarios" style="width: 100%;" placeholder="Comentarios"></textarea>
								</div>
								<div class="col-md-12 px-0">
									<div class="form-check">
										<input type="checkbox" class="form-check-input" name="checkbox" id="politicas" value="Acepto Políticas de Uso de Datos">
										<label class="form-check-label" for="exampleCheck1" id="politicaslabel">Acepto la <a href="nosotros-politica-manejo-datos" target="_blank">Política de tratamiento de datos</a> de Passus IPS 👆, pues he leído y estoy de acuerdo con lo expuesto en el manuscrito publicado.</label>
									</div>
								</div>
								<div class="col-md-12 px-0">
									<div id="response" class="col-md-12"></div>
									<button class="button button_1 contact_button trans_200 submitForm" type="button" name="enviar_mensaje">Enviar</button>
								</div>
							</div>
						</form>
					</div>
				</div>

				<!-- Contact Content -->
				<!-- <div class="col-lg-5 offset-lg-1 contact_col"> -->
				<div class="col-lg-5 offset-lg-1 contact_col">
					<!-- <div class="contact_content">
							<div class="contact_content_title">
								<h5>Puedes comunicarte con nosotros a través de los siguientes canales</h5>
							</div>
							<div class="contact_content_text">
								<p></p>
							</div>
							<div class="direct_line d-flex flex-row align-items-center justify-content-start">
								<div class="direct_line_title text-center">Call center</div>
								<div class="direct_line_num text-center"> (601) 316 16 99</div>
							</div>						
						</div> -->



					<div class="cards-container" id="cards-container">
						<h3>Nuestros servicios Passus IPS<hr class="hr"></h3>
						<div class="direct_line d-flex flex-row align-items-center justify-content-start">
							<div class="direct_line_title text-center">Call center</div>
							<div class="direct_line_num text-center"> (601) 316 16 99</div>
						</div>

						<div class="card">
							<img src="images/hidroterapia-icono.png" alt="" class="card-img">
							<p>Hidroterapia</p>
							<div class="contact-overlay">
								<span>¡Llámanos al 601 3161699!</span>
							</div>
						</div>
						<div class="card">
							<img src="images/rehabilitacion-icono.png" alt="" class="card-img">
							<p>Rehabilitación</p>
							<div class="contact-overlay">
								<span>¡Llámanos al 601 3161699!</span>
							</div>
						</div>

						<div class="card">
							<img src="images/neuropsicologia-icono.png" alt="" class="card-img">
							<p>Neuropediatría</p>
							<div class="contact-overlay">
								<span>¡Llámanos al 601 3161699!</span>
							</div>
						</div>
						<!-- <div class="card">
								<a href="https://wa.me/573214662896?text=%C2%A1Hola!%20%F0%9F%91%8B%20Me%20gustar%C3%ADa%20saber%20m%C3%A1s%20sobre%20el%20servicio%20de%20Yoga.%20%C2%BFPodr%C3%ADas%20darme%20m%C3%A1s%20informaci%C3%B3n,%20por%20favor%3F" target="_blank">
									<img src="images/neuropediatria-icono.png" alt="" class="card-img">
									<p>Neuropediatría</p>
								</a>
							</div> -->

						<!-- <div class="card">
								<a href="https://wa.me/573214662896?text=%C2%A1Hola!%20%F0%9F%91%8B%20Me%20gustar%C3%ADa%20saber%20m%C3%A1s%20sobre%20el%20servicio%20de%20Yoga.%20%C2%BFPodr%C3%ADas%20darme%20m%C3%A1s%20informaci%C3%B3n,%20por%20favor%3F" target="_blank">
									<img src="images/terapia-ocupacional-icono.png" alt="" class="card-img">
									<p>Terap. Ocupacional</p>
								</a>
							</div> -->
						<!-- <div class="card">
								<a href="https://wa.me/573214662896?text=%C2%A1Hola!%20%F0%9F%91%8B%20Me%20gustar%C3%ADa%20saber%20m%C3%A1s%20sobre%20el%20servicio%20de%20Yoga.%20%C2%BFPodr%C3%ADas%20darme%20m%C3%A1s%20informaci%C3%B3n,%20por%20favor%3F" target="_blank">
									<img src="images/fonoaudiologia-icono.png" alt="" class="card-img">
									<p>Fonoaudiología</p>
								</a>
							</div> -->
						<div class="card">
							<img src="images/psicologia-icono.png" alt="" class="card-img">
							<p>Psiquiatría</p>
							<div class="contact-overlay">
								<span>¡Llámanos al 601 3161699!</span>
							</div>
						</div>
						<div class="card">
							<img src="images/fisiatria-icono.png" alt="" class="card-img">
							<p>Fisiatría</p>
							<div class="contact-overlay">
								<span>¡Llámanos al 601 3161699!</span>
							</div>
						</div>
					</div>

					<div class="cards-container">
						<h3>Nuestros servicios Passus Bienestar <hr class="hr"></h3>
						<div class="card">
							<a href="https://wa.me/573209621527?text=%C2%A1Hola!%20%F0%9F%91%8B%20Me%20gustar%C3%ADa%20saber%20m%C3%A1s%20sobre%20el%20servicio%20de%20Yoga.%20%C2%BFPodr%C3%ADas%20darme%20m%C3%A1s%20informaci%C3%B3n,%20por%20favor%3F" target="_blank">
								<img src="images/yoga-icono.png" alt="" class="card-img">
								<p>Yoga</p>
								<div class="contact-overlay">
									<span>¡Solicita tu servicio!</span>
								</div>
							</a>
						</div>
						<div class="card">
							<a href="https://wa.me/573209621527?text=%C2%A1Hola!%20%F0%9F%91%8B%20Me%20gustar%C3%ADa%20saber%20m%C3%A1s%20sobre%20el%20servicio%20de%20Natación.%20%C2%BFPodr%C3%ADas%20darme%20m%C3%A1s%20informaci%C3%B3n,%20por%20favor%3F" target="_blank">
								<img src="images/natacion-icono.png" alt="" class="card-img">
								<p>Natación</p>
								<div class="contact-overlay">
									<span>¡Solicita tu servicio!</span>
								</div>
							</a>
						</div>
						<div class="card">
							<a href="https://wa.me/573209621527?text=%C2%A1Hola!%20%F0%9F%91%8B%20Me%20gustar%C3%ADa%20saber%20m%C3%A1s%20sobre%20el%20servicio%20de%20Pilates.%20%C2%BFPodr%C3%ADas%20darme%20m%C3%A1s%20informaci%C3%B3n,%20por%20favor%3F" target="_blank">
								<img src="images/pilates-icono.png" alt="" class="card-img">
								<p>Pilates</p>
								<div class="contact-overlay">
									<span>¡Solicita tu servicio!</span>
								</div>
							</a>
						</div>
						<div class="card">
							<a href="https://wa.me/573209621527?text=%C2%A1Hola!%20%F0%9F%91%8B%20Me%20gustar%C3%ADa%20saber%20m%C3%A1s%20sobre%20el%20servicio%20de%20Mindfulness.%20%C2%BFPodr%C3%ADas%20darme%20m%C3%A1s%20informaci%C3%B3n,%20por%20favor%3F" target="_blank">
								<img src="images/mindfulness-icono.png" alt="" class="card-img">
								<p>Mindfulness</p>
								<div class="contact-overlay">
									<span>¡Solicita tu servicio!</span>
								</div>
							</a>
						</div>
					</div>
					<!-- </div> -->




				</div>
				<div class="row google_map_row">
					<div class="col">

						<!-- Contact Map -->

						<div class="contact_map">

							<!-- Google Map -->

							<!-- <div class="map">
							<div id="google_map" class="google_map">
								<div class="map_container">
									<div id="map"></div>
								</div>
							</div>
						</div> -->

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

	<script type="text/javascript">
		$(".submitForm").on("click", function() {
			nombre = document.getElementById("nombre").value;
			tipo_identificacion = document.getElementById("tipo_identificacion").value;
			identificacion = document.getElementById("identificacion").value;
			nombre = document.getElementById("nombre").value;
			email = document.getElementById("email").value;
			telefono = document.getElementById("telefono").value;
			ciudad = document.getElementById("ciudad").value;
			especialidad = document.getElementById("especialidad").value;
			comentarios = document.getElementById("comentarios").value;
			politicas = document.getElementById("politicas").checked;
			validado = 0;

			if (nombre == "") {
				$("#nombre").addClass('invalid');
				validado = 0;
			} else {
				$("#nombre").removeClass('invalid');
				validado = 1;
			}

			if (tipo_identificacion == "") {
				$("#tipo_identificacion").addClass('invalid');
				validado = 0;
			} else {
				$("#tipo_identificacion").removeClass('invalid');
				validado = 1;
			}

			if (identificacion == "") {
				$("#identificacion").addClass('invalid');
				validado = 0;
			} else {
				$("#identificacion").removeClass('invalid');
				validado = 1;
			}

			if (email == "") {
				$("#email").addClass('invalid');
				validado = 0;
			} else {
				$("#email").removeClass('invalid');
				validado = 1;
			}

			if (telefono == "") {
				$("#telefono").addClass('invalid');
				validado = 0;
			} else {
				$("#telefono").removeClass('invalid');
				validado = 1;
			}

			if (ciudad == "") {
				$("#ciudad").addClass('invalid');
				validado = 0;
			} else {
				$("#ciudad").removeClass('invalid');
				validado = 1;
			}

			if (especialidad == "") {
				$("#especialidad").addClass('invalid');
				validado = 0;
			} else {
				$("#especialidad").removeClass('invalid');
				validado = 1;
			}

			if (comentarios == "") {
				$("#comentarios").addClass('invalid');
				validado = 0;
			} else {
				$("#comentarios").removeClass('invalid');
				validado = 1;
			}

			if (politicas == "") {
				$("#politicaslabel").addClass('invalid');
				validado = 0;
			} else {
				$("#politicaslabel").removeClass('invalid');
				validado = 1;
			}

			// var response = grecaptcha.getResponse();

			// if (response.length == 0) {
			// 	check_captcha = 0;
			// 	document.getElementById("response").innerHTML="<p class='alert alert-danger p-1'>Por favor valide el Captcha!</p>";
			// } else {
			// 	check_captcha = 1;
			// 	document.getElementById("response").innerHTML="";
			// }
			check_captcha = 1;
			if (validado == 1 && check_captcha == 1) {
				var formDetail = nombre + ";" + tipo_identificacion + ";" + identificacion + ";" + telefono + ";" + email + ";" + ciudad + ";" + especialidad + ";" + comentarios;
				$.ajax({
					method: 'POST',
					url: 'contactanosprocess.php',
					data: {
						nombre: nombre,
						tipo_identificacion: tipo_identificacion,
						identificacion: identificacion,
						telefono: telefono,
						email: email,
						ciudad: ciudad,
						especialidad: especialidad,
						comentarios: comentarios
					}
				}).done(function(resp) {
					if (resp == 1) {
						document.getElementById("response").innerHTML = "<p class='alert alert-success text-center p-1'><b>¡Mensaje enviado exitosamente, pronto estaremos en contacto!</b></p>";
						document.getElementById("nombre").value = "";
						document.getElementById("tipo_identificacion").value = "";
						document.getElementById("identificacion").value = "";
						document.getElementById("email").value = "";
						document.getElementById("telefono").value = "";
						document.getElementById("ciudad").value = "";
						document.getElementById("especialidad").value = "";
						document.getElementById("comentarios").value = "";
						document.getElementById("politicas").checked = false;
					} else {
						document.getElementById("response").innerHTML = "<p class='alert alert-danger text-center p-1'><b>¡Problemas al enviar el mensaje, por favor intente más tarde!</b></p>";
					}
				});
			}
		});
	</script>
	<script src="js/accesibilidad.js"></script>
</body>

</html>