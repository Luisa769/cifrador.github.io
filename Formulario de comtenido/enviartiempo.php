<?php
$nombre = $_POST['nombre'];
$mail = $_POST['correo'];
$telefono = $_POST['Telefono'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/"  . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \n\r";
$header .= "Content-Type: tex/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ",
 con telefono " . $telefono . "\r\n";
 $mensaje .= "Su e-mail es: " .$mail . "\r\n";
 $mensaje .= "Mensaje: " . $_POST['comentario'] . " \r\n";
 $mensaje .= "Enviado el " . date('d/m/y' , time());
 
 $para = 'eldavinchi12@hotmail.com';
 $asunto = 'solicitud de informa&oacute;n';
 
 mail($para, $asunto, utf8_decode($mensaje), $header);
 header("location: formulario.html");
?>