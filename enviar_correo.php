<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];

    $to = 'fabrizio.angulo@alwa.pe'; // Reemplaza con la dirección de correo electrónico a la que deseas enviar el mensaje
    $subject = 'Mensaje enviado desde el formulario de contacto';
    $message = "Nombre: $nombre\n";
    $message .= "Correo electrónico: $email\n";
    $message .= "Mensaje: $mensaje\n";
    $headers = 'From: tudireccion@example.com' . "\r\n" .
        'Reply-To: tudireccion@example.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    if (mail($to, $subject, $message, $headers)) {
        echo 'Correo electrónico enviado correctamente.';
    } else {
        echo 'Error al enviar el correo electrónico.';
    }
}
