<?php
$nombre = $_POST['demo-name'];
$email = $_POST['demo-email'];
$mensaje = $_POST['demo-message'];
$para = 'btr_manuel2@hotmail.com';
$titulo = $_POST['demo-asunto'];
$header = 'From: ' . $email;
$msjCorreo = "Nombre: $nombre\n E-Mail: $email\n Mensaje:\n $mensaje";

if ($_POST['submit']) {
	if (mail($para, $titulo, $msjCorreo, $header)) {
		echo "<script language='javascript'>
		alert('Mensaje enviado, muchas gracias.');
		window.location.href = 'http://runait.com';
		</script>";
	} 
	else {
		echo 'Falló el envio';
	}
}