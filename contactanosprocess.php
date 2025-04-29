<?php
error_reporting(0);
if (isset($_POST)) {
	$nombre = filter_input(INPUT_POST, 'nombre');
	$tipo_identificacion = filter_input(INPUT_POST, 'tipo_identificacion');
	$identificacion = filter_input(INPUT_POST, 'identificacion');
	$email_cliente = filter_input(INPUT_POST, 'email');
	$telefono = filter_input(INPUT_POST, 'telefono');
	$especialidad = filter_input(INPUT_POST, 'especialidad');
	$ciudad = filter_input(INPUT_POST, 'ciudad');
	$mensaje = filter_input(INPUT_POST, 'comentarios');


	/*SIGUE RECOLECTANDO DATOS PARA FUNCION MAIL*/

	$mailSubject = 'Mensaje Formulario Web Passus';
	$sendMessage = "<p>Hola,</p><p>" . $nombre . " ha enviado un nuevo mensaje a través del formulario de contacto web de www.passusips.com </p>
		<p><b>Tipo identificación:</b> " . $tipo_identificacion . "</p>
		<p><b>Identificación:</b> " . $identificacion . "</p>
		<p><b>Ciudad:</b> " . $ciudad . "</p>
		<p><b>Teléfono:</b> " . $telefono . "</p>
		<p><b>Email:</b> " . $email_cliente . "</p>
		<p><b>Especialidad:</b> " . $especialidad . "</p>
		<p><b>Mensaje:</b> " . $mensaje . "</p>";

	$header = "MIME-Version: 1.0\r\n";
	$header .= "Content-type: text/html; charset=UTF-8\r\n";
	$header .= "From: " . $nombre . " <" . $email_cliente . ">\r\n";

	$email = 'atencionalusuario@passusips.com'; //Ingresa tu dirección de correo		
	// $email='mariostiv@hotmail.com';//Ingresa tu dirección de correo		

	if (mail($email, $mailSubject, $sendMessage, $header)) {
		echo 1;
	} else {
		echo 0;
	}
}
