<?php
require_once('phpmailer/class.phpmailer.php');
define('GUSER', 'admin@tavologourmet.com'); // el nombre de usuarios de su cuenta de correo
define('GPWD', 'Ra6qH2jAc');  // cambie las XXXXXXX por la contrase�a de la cuenta de correo.

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$comentar = $_POST['comentario'];
$telefono = $_POST['telefono'];
$dependencia = $_POST['dependencia'];


$mensaje = "Este mensaje fue enviado por: " . $nombre . ",  \r\n";
$mensaje .= "Correo de quien lo envia: " . $email . ",  \r\n";
$mensaje .= "el comentario fue: " . $comentar . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());



function smtpmailer($to, $from, $from_name, $subject, $body) { 
	global $error;
	$mail = new PHPMailer();
	$mail->IsSMTP(); // Habilitar SMTP
	$mail->SMTPDebug = 0;  // debugging: 1 = Errores y Mensajes, 2 = Mensajes unicamente
	$mail->SMTPAuth = true;  // Habilitar autenticaci�n
	$mail->SMTPSecure = 'tls'; // Habilitar TLS
	$mail->Port = 587; 
	
	// Recuerde que si quita los comentarios de un grupo debe ponerlos en el otro

	// Parametros para cuentas de google apps	
	$mail->Host = 'smtp.gmail.com';


	// Parametros para cuentas de microsoft Live
	// $mail->Host = 'smtp.live.com';

	
	$mail->Username = GUSER;  
	$mail->Password = GPWD;           
	$mail->SetFrom($from, $from_name);
	$mail->Subject = $subject;
	$mail->Body = $body;
	$mail->AddAddress($to);

	if(!$mail->Send()) {
		$error = 'Error al enviar el correo: '.$mail->ErrorInfo; 
		return false;
	} else {
		$error = 'Mensaje enviado!';
		return true;
	}
}


if (smtpmailer($dependencia, GUSER, 'Formulario pagina web', 'Informacion desde la pagina web', $mensaje)) 
{
	echo " Muchas gracias por contactar con nosotros, "; // si el correo se envio haga algo
}

if (!empty($error)) echo $error;