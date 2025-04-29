<?php include('includes/_head.php'); ?>
<link rel="stylesheet" type="text/css" href="styles/about.css?v=1">
<link rel="stylesheet" type="text/css" href="styles/about_responsive.css?v=1">
<body>

<div class="super_container">
	
	<!-- Header -->

	<?php include('includes/_header.php'); ?>

	<!-- Home -->

	<div class="home d-flex flex-column align-items-start justify-content-end">
		<!-- <div class="background_image" style="background-image:url(images/1920x625.png)"></div> -->
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/1920x625.png" data-speed="0.8"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content">
							<div class="home_title">Nosotros</div>
							<div class="home_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Intro -->

	<div class="intro">
		<div class="container">
			<div class="row">

				<!-- Intro Content -->
				<div class="col-lg-8">
					<div class="intro_content">
						<div class="section_title_container">
							<div class="section_title"><h2>Passus IPS</h2></div>
						</div>
						<div class="">
							<p>Somos una entidad prestadora de servicios de salud, expertos en rehabilitación terapéutica integral, conozca nuestras sedes y disfrute de un excelente servicio de la mano de profesionales calificados.</p>
						</div>

						<!-- Milestones -->
						<div class="milestones">
							<div class="row milestones_row">
							
								<!-- Milestone -->
								<div class="col-md-3 milestone_col">
									<div class="milestone">
										<div class="milestone_counter" data-end-value="5000" data-sign-before="+">0</div>
										<div class="milestone_text">Pacientes satisfechos</div>
									</div>
								</div>

								<!-- Milestone -->
								<div class="col-md-3 milestone_col">
									<div class="milestone">
										<div class="milestone_counter" data-end-value="352">0</div>
										<div class="milestone_text">Estadística</div>
									</div>
								</div>

								<!-- Milestone -->
								<div class="col-md-3 milestone_col">
									<div class="milestone">
										<div class="milestone_counter" data-end-value="718">0</div>
										<div class="milestone_text">Estadística</div>
									</div>
								</div>

								<!-- Milestone -->
								<div class="col-md-3 milestone_col">
									<div class="milestone">
										<div class="milestone_counter" data-end-value="5">0</div>
										<div class="milestone_text">Estadística</div>
									</div>
								</div>

							</div>
						</div>
						<div class="section_title_container">
							<div class="section_title"><h2>Misión</h2></div>
						</div>
						<div class="">
							<p>PASSUS innova con ética y seguridad, para que tu experiencia con nosotros sea satisfactoria, amable y mejores tu calidad de vida de forma segura, a través de nuestros expertos en medicina, terapéutica y bienestar.</p>
						</div>
						<div class="section_title_container">
							<div class="section_title"><h2>Visión</h2></div>
						</div>
						<div class="">
							<p>PASSUS, para el 2030, incrementará su reconocimiento por la excelencia e innovación ética en la prestación de servicios de bienestar y de rehabilitación médico - terapéutica, promoviendo en nuestro talento humano y proveedores, acciones seguras y humanizadas. También, iremos ampliando nuestra presencia a nivel nacional e internacional.</p>
						</div>
					</div>
				</div>

				<!-- Intro Image -->
				<div class="col-lg-3 offset-lg-1">
					<div class="intro_image"><img src="images/264x394.png" alt=""></div>
				</div>
			</div>
		</div>
	</div>

	<!-- Testimonials -->

	<?php include('includes/_testimonials.php'); ?>

	<?php include('includes/_linea_atencion.php'); ?>

	<!-- Team -->

	<div class="team mt-2">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<div class="section_subtitle"></div>
						<div class="section_title"><h2>Nuestros Profesionales</h2></div>
					</div>
				</div>
			</div>
			<div class="row team_row">
				
				<!-- Team Item -->
				<div class="col-lg-4 team_col">
					<div class="team_item text-center d-flex flex-column aling-items-center justify-content-end">
						<div class="team_image"><img src="images/team_1.jpg" alt=""></div>
						<div class="team_content text-center">
							<div class="team_name"><a href="#">Doctor 1</a></div>
							<div class="team_title">Especialista</div>
							<div class="team_text">
								<p>Lorem ultrices ut. Etiam ac erat ut enim maximus accumsan vel ac nisl. Duis feugiat bibendum orci, non elementum urna.</p>
							</div>
						</div>
					</div>
				</div>

				<!-- Team Item -->
				<div class="col-lg-4 team_col">
					<div class="team_item text-center d-flex flex-column aling-items-center justify-content-end">
						<div class="team_image"><img src="images/team_2.jpg" alt=""></div>
						<div class="team_content text-center">
							<div class="team_name"><a href="#">Doctor 2</a></div>
							<div class="team_title">Especialista</div>
							<div class="team_text">
								<p>Ultrices ut. Etiam ac erat ut enim maximus accumsan vel ac nisl. Duis feugiat bibendum orci, non elementum urna.</p>
							</div>
						</div>
					</div>
				</div>

				<!-- Team Item -->
				<div class="col-lg-4 team_col">
					<div class="team_item text-center d-flex flex-column aling-items-center justify-content-end">
						<div class="team_image"><img src="images/team_3.jpg" alt=""></div>
						<div class="team_content text-center">
							<div class="team_name"><a href="#">Doctor 3</a></div>
							<div class="team_title">Especialista</div>
							<div class="team_text">
								<p>Etiam ac erat ut enim maximus accumsan vel ac nisl. Duis feugiat bibendum orci, non elementum urna. Odio ultrices ut.</p>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<?php include('includes/_footer.php'); ?>
</div>
<?php include('includes/_js.php'); ?>
<script src="js/about.js"></script>
</body>
</html>