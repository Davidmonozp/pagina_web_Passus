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
<!-- Agrega esto en el <head> de tu HTML -->




</head>

<body>

	<div class="super_container">

		<!-- Header -->

		<?php include('includes/_header.php'); ?>
		<?php include('includes/accesibilidad.php'); ?>
		<?php include('includes/_boton_whatsapp.php'); ?>

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
					<!-- <a href="mailto:contacto@tuempresa.com"><i class="fas fa-envelope"></i></a> -->
				</div>

				<h1 id="titulo_contactanos">Contáctanos
					<hr>
				</h1>

				<a href="servicios_passusIPS.php">
					<button class="reflected-button">Servicios Passus IPS</button>
				</a>
			</div>
		</section>
	</div>


	<!-- Contact -->
 <div class="contact" id="contactanos">
        <div class="header-pqrs">
            <h2>Registra y consulta tu Petición, Queja, Reclamo o Solicitud</h2>
            <hr class="hr_subtitulo">
            <p class="parrafo">Hemos actualizado nuestro formulario de radicación. <br>
                Con el objetivo de brindarte una atención más oportuna y de mayor calidad, ahora puedes registrar y consultar fácilmente tus solicitudes a través de las siguientes opciones:</p>
        </div>

        <div class="cards-pqrs">
            <div class="card-felicitacion">
                <img src="./images/felicitacion.png" alt="Felicitación">
                <h4>Felicitaciones</h4>
                <p>Registra aquí tus felicitaciones y ayúdanos a seguir mejorando desde el reconocimiento.
                </p>
            </div>
            <div class="card-solicitud">
                <img src="./images/solicitudes.png" alt="Solicitudes">
                <h4>Solicitudes</h4>
                <p>En esta sección puedes registrar tus solicitudes como:</p>
                <ul>
                    <li>Agendamiento o reprogramación de citas</li>
                    <li>Reembolsos</li>
                    <li>Envío de Historia Clínica o informes finales</li>
                    <li>Exoneración de multa</li>
                </ul>
            </div>
            <div class="card-pqr">
                <img src="./images/registro.png" alt="Registra tu PQR">
                <h4>PQR</h4>
                <p>En este espacio puedes registrar tus Peticiones, Quejas o Reclamos relacionados con nuestros servicios.</p>
            </div>
            <div class="card-consulta">
                <img src="./images/consulta.png" alt="Consulta tu PQRS">
                <h4>Consulta tu PQRS</h4>
                <p># de Radicado</p>
                <p>Aquí puedes hacer seguimiento a tus Peticiones, Quejas o Reclamos y Solicitudes ya registradas.</p>
            </div>
        </div>

        <div class="contenido">
            <div class="contenedor-redes-sociales">
                <a class="whatsapp" href="https://wa.me/573209621527" target="_blank">
                    <span class="circulo"><i class="fab fa-whatsapp"></i></span>
                    <span class="titulo">Natación</span>
                    <span class="titulo-hover">Escribir</span>
                </a>
                <a class="call">
                    <span class="circulo"><i class="fas fa-phone"></i></span>
                    <span class="titulo">Call Center</span>
                    <span class="titulo-hover">(601) 316 16 99</span>
                </a>
            </div>
            <div class="horarios">
                <p><strong>Callcenter para asignación de citas </strong>(601) 3161699. <br>
                    <strong>Horarios de atención:</strong> <br>
                    Lunes a viernes: 7:30 am a 5:30 pm. <br>
                    Sábados: 8:00 am a 1:00 pm.
                </p>
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