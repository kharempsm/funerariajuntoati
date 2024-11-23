<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $nombre = $_POST["nombre"];
  $email = $_POST["email"];
  $telefono = $_POST["telefono"]; 
  $asunto = $_POST["asunto"];

  $para = "kharempsm@gmail.com"; 
  $asunto_email = "Nuevo contacto del formulario"; 

  $cuerpo = "Nombre: " . $nombre . "\n";
  $cuerpo .= "Email: " . $email . "\n";
  $cuerpo .= "Teléfono: " . $telefono . "\n"; 
  $cuerpo .= "Asunto: " . $asunto;

  $cabeceras = "From: " . $email . "\r\n" .
              "Reply-To: " . $email . "\r\n" .
              "X-Mailer: PHP/" . phpversion();

  if (mail($para, $asunto_email, $cuerpo, $cabeceras)) {
      echo "Gracias por tu mensaje. Te contactaremos pronto.";
  } else {
      echo "Error al enviar el mensaje.";
  }
}
?>