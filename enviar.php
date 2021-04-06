<?php

//llamando a los campos
$nombre = $_POST['Nombre'];
$correo = $_POST['Correo'];
$telefono = $_POST['Telefono'];
$mensaje = $_POST['Mensaje'];

//Datos para el correo
$destinatario = "daxterjef2@gmail.com";
$asunto = "contacto desde nuesta web";

$carta ="De: $nombre \n";
$carta .="Correo $correo \n";
$carta .="Telefono $telefono \n";
$carta .="Mensaje $mensaje";

//Enviando Mensaje
mail($destinatario, $asunto, $carta);
header('Location:mensaje-de-envio.html')
  
?>
