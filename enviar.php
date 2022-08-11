<?php

$name = $_POST['name'];
$mail = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$time = time();

$header = 'From: ' . $mail ." \r\n ";
$header .= "ALFA&OMEGA SITIO WEB:PHP/". phpversion() ." \r\n"; 
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por:" . $name . ", \r\n";
$message .= "su correo es: ". $mail . ",\r\n";
$message .= "su telefono es: " . $phone . ",\r\n";
$message .= "su mensaje es: " . $_POST['message']. ".\r\n";
$message .= "Enviado el:" .date('d/m/Y (H:i:s)', $time). "Horario UTC";

$para = 'marco_fenix79@hotmail.com';
$asunto = 'Dudas o Preguntas de Inmobiliaria ALFA&OMEGA';

mail($para, $asunto, utf8_decode($message), $header);

header("Refresh:0; url=index.html");

?>