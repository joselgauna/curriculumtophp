<?php

$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$mensaje = $_POST["mensaje"];

$destinatario = "josebbgauna@gmail.com";
$asunto = "Contacto desde mi hoja de vida";

$carta = "De: $nombre \n" ;
$carta .= "Correo: $correo \n";
$carta .= "Mensaje: $mensaje";

mail($destinatario, $asunto, $carta);
header("location:mensaje-de-envio.html")

?>