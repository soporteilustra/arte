<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$email_to = "info@artewilliamlopez.com";
$email_subject = "Contacto desde website";
$email_message = "Detalles de la consulta: <br>\n\n";
$email_message .= "Nombre: " . $name . "<br>\n";
$email_message .= "Correo: " . $email . "<br>\n";
$email_message .= "Mensaje: " . $message . "<br>\n";
// Ahora se envía el e-mail usando la función mail() de PHP
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
//dirección del remitente
$headers .= "From: Contacto desde web >\r\n";
//Enviamos el mensaje a tu_dirección_email
$bool = mail($email_to,$email_subject,$email_message,$headers);

if ($bool) {
  echo "Mensaje enviado correctamente";
} else {
  echo "Hubo un inconveniente, inténtelo más tarde.";
}

?>
