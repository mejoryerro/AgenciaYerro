<?php
require_once('recaptchalib.php');

function enviarCorreo()
{
	$nombre = $_POST['nombre'];
	$email = $_POST['email'];
	$mensaje = $_POST['mensaje'];
	$dest = "info@agenciayerro.com"; 
	 
	$headers = "From: $nombre <$email>\r\n";  
	$headers .= "X-Mailer: PHP5\n";
	$headers .= 'MIME-Version: 1.0' . "\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	 
	$asunto = "Contacto";
	$cuerpo = "Nombre: ".$nombre."<br>";
	$cuerpo .= "E-mail: ".$email."<br>";
	$cuerpo .= "Mensaje: ".$mensaje;
	 
	if($nombre != '' && $email != '' && $mensaje != ''){
	    mail($dest,$asunto,$cuerpo,$headers);
	}
}
$privkey = "6Ld8EOsSAAAAAF4sYibt25yKO9d2pQsvsidM3bea";
$verify = recaptcha_check_answer($privkey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);
if ($verify->is_valid) {
	echo "Gracias por contactar con nosotros<br><a href='contacto.php'>Click aquí para volver</a>";
	enviarCorreo();
}
else {
	echo "Vaya, parece que el código de validación no es correcto<br><a href='contacto.php'>Click aquí para volver</a>";
}
?>