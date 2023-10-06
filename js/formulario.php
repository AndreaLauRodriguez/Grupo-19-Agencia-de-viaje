<?php
$destino = "andrelaurodri@outlook.com";
$nombre = $_POST["nombre"];

$correo = $_POST["correo"];

$mensaje = $_POST["mensaje"];



$contenido = "Nombre: " . $nombre .  "\Correo " .$correo .  "\Mensaje: " . $mensaje;

mail($destino,"Mensaje Clientes", $contenido);



header(Location:"../index.html");
?>