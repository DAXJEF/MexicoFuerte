<?php

//llamando a los campos
$nombre = $_POST['name'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

//Datos para el correo
$destinatario = "daxterjef2@gmail.com";
$asunto = "contacto desde nuesta web";

$carta ="De: $nombre \n";
$carta .="Correo $correo \n";
$carta .="Telefono $telefono \n";
$carta .="Mensaje $mensaje";

//Enviando Mensaje
mail($destinatario, $asunto, $carta);

?>
