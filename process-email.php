<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {
	// Inicializa la sesión
	session_start();
	$_SESSION['form-errors'] = [];
	
	// Inicializar boleanos de campos vacios	
	$fn = false; $ln = false; $ph = false; $em = false; $be = false; $bp = false; $qc = false;

	// Asignar variables del formulario y limpiar espacios del inicio
	$firstName = (isset($_POST['firstName']))  ? trim($_POST['firstName']) : '';
	$lastName  = (isset($_POST['lastName']))   ? trim($_POST['lastName'])  : '';
	$phone     = (isset($_POST['phone']))      ? trim($_POST['phone'])      : '';
	$email     = (isset($_POST['email']))      ? trim($_POST['email'])      : '';
	$byEmail   = (isset($_POST['byEmail']))    ? trim($_POST['byEmail'])    : '';
	$byPhone   = (isset($_POST['byPhone']))    ? trim($_POST['byPhone'])    : '';
	$questionsComments = (isset($_POST['questionComment'])) ? trim($_POST['questionComment']) : '';

	// Validación campos vacios
	if($firstName !== '') :
		$fn = true;
		$_SESSION['old-first-name'] = $firstName;
	else:
		$_SESSION['form-errors']['firstName'] = "nombre";
	endif;
	
	if($lastName !== '') :
		$ln = true;
		$_SESSION['old-last-name'] = $lastName;
	else:
		$_SESSION['form-errors']['lastName'] = "apellido";
	endif;

	if($phone !== '') :
		$ph = true;
		$_SESSION['old-phone-name'] = $phone;
	else:
		$_SESSION['form-errors']['phone'] = "teléfono";
	endif;
	
	if($email !== '') :
		$em = true;
		$_SESSION['old-email'] = $email;
	else:
		$_SESSION['form-errors']['email'] = "correo electrónico";
	endif;

	if($questionsComments !== '') :
		$qc = true;
		$_SESSION['old-question-comment'] = $questionsComments;
	else:
		$_SESSION['form-errors']['questionComment'] = "Preguntas y comentarios";
	endif;
	
	// Checkboxes
	if($byEmail == 1) :
		$bp = true;
		$_SESSION['old-email-check'] = 'checked';
	endif;
	
	if($byPhone == 1) :
		$bp = true;
		$_SESSION['old-phone-check'] = 'checked';
	endif;

	if(!$fn || !$ln || !$ph || !$em || !$qc) :
		$_SESSION['error'] = '¡ No se pudo enviar el correo !';
		header("Location: /contacto");
		exit();	
	endif;

	// Pasa La validación y se procede a enviar el correo electrónico

	// Se crea el variable de sesión de mail-sended
	// como verdadero para poder mostrar la página
	$_SESSION['mail-sended'] = true;

	// Se redirecciona a la página de gracias
	header("Location: /gracias");
	exit();

} else {
	header("Location: /contacto");
	exit();
}
?>